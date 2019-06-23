<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\admin;
use App\message;

class employeecontroller extends Controller
{
    
public function home()
    {
                

  $datas=admin::where('id',Auth::guard('admin')->user()->id)->get();

   
       return view('employee.home',compact('datas'));
    }
    public function task()
    {
       $msg=admin::find(Auth::guard('admin')->user()->id)->message;
   
    	return view('employee.task',compact('msg'));

 	}
 	 public function view($id)
    {
    	$view=array(message::find($id));
    	
    	return view('employee.view',compact('view'));

    }
}
