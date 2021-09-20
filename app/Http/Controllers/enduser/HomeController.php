<?php

namespace App\Http\Controllers\enduser;

use App\Http\Controllers\Controller;
use App\Models\products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Auth;
use Darryldecode\Cart\Cart;


class HomeController extends Controller
{
    //function index to view web home page
    public function index()
    {
        $products = products::all() ;
        return view('enduser.home' , compact('products'));
    }
    //
    public function products()
    { 
        $products = products::orderby('id')->get() ;
        return view('enduser.products' , compact('products'));
    }
    //
    public function men()
    {
        $Mproducts = products::all()->where('category_id' , '=' , 'men') ;
         return view('enduser.men' , compact('Mproducts'));
    }
    //
    public function women()
    { 
        $Wproducts = products::all()->where('category_id' , '=' , 'women') ;
        return view('enduser.women' , compact('Wproducts'));
    }
    //
    public function footwear()
    { 
        $Fproducts = products::all()->where('category_id' , '=' , 'footwear') ;
        return view('enduser.footwear' , compact('Fproducts'));
    }
    //
    public function accessories()
    { 
        $Aproducts = products::all()->where('category_id' , '=' , 'accessories') ;
        return view('enduser.accessories' , compact('Aproducts'));
    }
    //
        public function register()
        { return view('enduser.sign-up');}
        //
        public function redirectToFacebook()
        {
            return Socialite::driver('facebook')->redirect();
        }
         //
         public function facebooksigning()
         { 
            try {
    
                $user = Socialite::driver('facebook')->user();
                $facebookId = User::where('facebook_id', $user->id)->first();
         
                if($facebookId){
                    Auth::login($facebookId);
                    return redirect('/e-commerce');
                }else{
                    $createUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'facebook_id' => $user->id,
                        'password' => encrypt('john123')
                    ]);
        
                    Auth::login($createUser);
                    return redirect('/e-commerce');
                }
        
            } 
            catch (Exception $exception)
             { dd($exception->getMessage()); }
        }
    
    //
    public function store(Request $request)
    { 
$data = $request->all();
$conditions = [
    "name" => ['required' , 'min:3' , 'max:15'],
    "email" => ['required' , 'unique:users'],
    "password" => ['required']
];
    $validator = Validator($data , $conditions);
    if($validator->fails())
    {return redirect()->back()->withErrors($validator)->withInput($data) ;}
    $users = User::create([
        "name"     => $request->name,
        "email"    => $request->email,
        "password" => Hash::make($request->password),
        "role_id"  => "3"
    ]);
return redirect()->back();
    }
    //
    public function login()
    {
     return view('enduser.sign-in');
    }
      //
      public function profile($id)
      { 
          $user = User::findorfail($id);
          return view('enduser.profile' , compact('user'));
      }
        //
    public function cartList()
    {
        $cartItems = Cart::getContent();
        return view('enduser.cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => $request->image,
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
       
      //
     public function contact()
     { return view('enduser.contactus');}
      //
      public function singleproduct()
      { return view('enduser.singleproduct');}
    //
    public function search(Request $request)
    { 
        $text = $_GET['query'];
        $products= products::where('name' , 'LIKE' , '%'.$text.'%')->get();
        return view('enduser.search' , compact('products'));
       
    }
    }
