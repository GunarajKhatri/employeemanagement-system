<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;

class comment_controller extends Controller
{
     //  public function index()
     // {
     //     $comment=comment::all();
     //    return view('blogs',compact('post'));



     public function store(Request $request)
    {
        $comment=new comment;
       $comment->feedback=$request->sec;
       // $comment->main=$request->body;
        $comment->save();
     return redirect('/post/');   

}
}
