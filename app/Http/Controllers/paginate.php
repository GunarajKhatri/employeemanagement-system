<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
class paginate extends Controller
{
    public function users()
    {
    	# code...
    	$todo=todo::paginate(5);
    	return view('pagination',compact('todo'));
    }
}
