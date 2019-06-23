@extends('layout.ap')
@section('body')
<br>
<center>
<h1>Create new list</h1><br>
<div>
	<form method="post"action="/blog/public/todo/@yield('editId')">
	{{csrf_field()}}
	@section('editMethod')
	@show
	Enter title <br></b>
	<input type="text" name="title"value="@yield('editTitle')"><br>
<input type="text" name="body"value="@yield('editBody')">
<input type="submit" name="submit">
</center>
</form>
</div>
@endsection