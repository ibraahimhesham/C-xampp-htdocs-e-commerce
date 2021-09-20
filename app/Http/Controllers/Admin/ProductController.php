<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products= products::all();
        return view('admin.products.all' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = category::all();
        return view('admin.products.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*
  $profilepicture = $request->file('image');
    $picname= time(). "_"  . $profilepicture->getClientOriginalName() ;
       $profilepicture->storeAs('adminpanel/img' , $picname);
        $profilepicture->move('adminpanel\img' , $picname);
<---------->
        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('public/images');
        $save = new Photo;
        $save->name = $name;
        $save->path = $path;
        $save->save();
     
<-------------->
   if($request->file()) {
                $name = time().'_'.$request->file->getClientOriginalName();
                $filePath = $request->file('file')->storeAs('uploads', $name, 'public');
    
                $file->name = time().'_'.$request->file->getClientOriginalName();
                $file->file = '/storage/' . $filePath;
                $file->save();
*/

        $data = $request->all();
        $rules = [
            'name' => ['required' , 'string' , 'min:5' , 'max:20'],
            'discription' => ['required'],
            'price' => ['required'],
            'category_id' => ['required'],
            'image' => [ 'required' , 'mimes:jpg,bmp,png']
        ];
        
        //upload image
        $picname = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('adminpanel/img' , $picname);
        $productpic = [$picname , $path];
        //validating steps
        $validator = Validator::make($data , $rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($data);
        } 
         $products =products::create([
            'name' => $request->name,
            'discription' => $request->discription,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'image' => $productpic,
        ]);
            $products->category()->sync($request->category);
           return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product=products::findorfail($id);
        return view('admin.products.show' , compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product=products::findorfail($id);
        return view('admin.products.show' , compact('product'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all;
        $conditions = [
            'name' => 'required',
            'discription' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'image' => 'required',
        ];
        $validator= Validator::make($data , $conditions);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($data);
        }
        $product=products::findorfail($id);
        $product->update([
            'name' => $request->name,
            'discription' => $request->discription,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'image' => $request->image,
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = products::finorfail($id);
        $product->delete;
        return redirect()->back();
    }
}
