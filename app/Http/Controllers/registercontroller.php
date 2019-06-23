<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;
use Auth;
class registercontroller extends Controller
{
    public function index(){
    	
     return view('register');
    	# code...
    }
     public function store(Request $request){
    	
     $register=new register;
     $this->validate($request,[
     	'name'=>'required',
     	'email'=>'required',
     	'password'=>'required'
     ]
     );
     $register->name=$request->name;
     $register->email=$request->email;
     $register->password=bcrypt($request->password);
     $register->save();
     //auth()->login($register);
   return redirect('/');

 

    }
 
 public function show(){
        
     return view('loginuser');
        # code...
    }
     public function login(Request $request){
        
    
     $this->validate($request,[
        
        'email'=>'required',
        'password'=>'required'
     ]
     );
    if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

        return 'you are logged in';
    }
   //return redirect('/');
// else{
//     return 'wrong';

// }
 

    }
 












}
