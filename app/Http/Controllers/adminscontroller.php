<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
class adminscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $data=admin::all();
        return view('admin.show',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form');
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
   
     $user=new admin;
     $this->validate($request,[
        'username'=>'required',
        'email'=>'required',
        'password'=>'required',
        'salary'=>'required',
        'department'=>'required',
        'role'=>'required',
     ]
     );
     $user->username=$request->username;
     $user->email=$request->email;
     $user->password=bcrypt($request->password);
     $user->salary=$request->salary;
     $user->department=$request->department;
     $user->role=$request->role;
     $user->save();
     return redirect('/adminpanel'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data=admin::find($id);
        return view('admin.edit',compact('data'));
        
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
        $this->validate($request,[
           'username'=>'required',
           'email'=>'required',
           'password'=>'required',
           'salary'=>'required',
           'department'=>'required',
           'role'=>'required',
        ]
        );
        $user=admin::find($id);
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->salary=$request->salary;
        $user->department=$request->department;
        $user->role=$request->role;
        $user->save();
        return redirect('/adminpanel');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
        $user=admin::find($id);
        $user->delete();
        return redirect('/adminpanel');
    }
   
   
}
