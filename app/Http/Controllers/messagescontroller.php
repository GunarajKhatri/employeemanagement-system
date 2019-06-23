<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\message;

class messagescontroller extends Controller
{
     public function create()
    {
         $data=admin::where('role','Employee')->get();
        return view('admin.message',compact('data'));
    }
     public function store(Request $request)
    {
       
       
      $this->validate($request,[
        'emp'=>'required',
        'message'=>'required',
           ]);
    	       
       $arr=$request->emp;
    	 
       foreach ($arr as $arrs) {
       	$msg=new message;
       $msg->admin_id=$arrs;
       $msg->message=$request->message;
      	 $msg->save();
      	       
       }
       return redirect('/create/task'); 

    }
     public function view(){
       $msg=message::get();
       
      return view('admin.view',compact('msg'));
     }
     public function fullview($id){


      $view=array(message::find($id));
      
      return view('admin.fulltask',compact('view'));
      }
       public function about(){
        return view('admin.aboutus');



    }

     
}
