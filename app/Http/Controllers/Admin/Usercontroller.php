<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\roles;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //method index to show data of the admins with paginate
        $users = User::all();

        return view('admin.users.all' , compact('users'));
        
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //method create to add user
        $roles = roles::all();
        return view('admin.users.create' , compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //method store to save the data you added in the create method
        $data = $request->all();
        $conditions =[
            'name' => ['required' , 'string' , 'min:3' , 'max:15'] ,
            'email' =>  ['required' , 'unique:users'],
            'password' => ['required'],
            'role_id' => ['required']
         ];
         $validator = Validator::make($data , $conditions);
         if($validator->fails())
         { return redirect()->back()->withErrors($validator)->withInput($data);}
         
        $users= User::create([
        'name' => $request->name ,
        'email' => $request->email ,
        'password' => Hash::make($request->password),
        'role_id' => $request->role_id
    ]);
    $users->roles()->sync($request->roles);
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
        //method show to show data of a specific user
        $user = User::findorfail($id);
        return view('admin.users.show' , compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //method edit to edit the data of a specific user
        $user = User::findorfail($id);
        return view('admin.users.edit' , compact('user'));
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
        //method update to save the data you edited in the edit method
        $data = $request->all();
        $conditions=[
            'name' => ['required' , 'min:3' , 'max:15'],
            'email' => ['required' , 'unique:users'],
            'password' => ['required']
        ];
        $validator= Validator::make($data , $conditions);
            if($validator->fails())
            {return redirect()->back()->withErrors($conditions)->withInput($data);}

            $user = User::findorfail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

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
        //method delete to delete user
        $user =User::findorfail($id);
        $user->delete();
        return redirect()->back();
    }
}
