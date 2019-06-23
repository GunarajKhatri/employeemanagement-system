<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\User;
use App\comment;
class post_controller extends Controller{
 public function index()
    {    
    	$user=User::all();
        $post=post::simplepaginate(3);
        $comment=comment::all();
        return view('blogs',compact(['user','post','comment']));


}
     public function store(Request $request)
    {
        $post=new post;
       $post->head=$request->topic;
        $post->main=$request->body;
        $post->save();
      return redirect('/post/');   

}
  public function delete($id)
     {
        $post=post::find($id);
          $post->delete();
          return redirect('/post/');
     }
}
