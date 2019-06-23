@extends('layout.ap')
@section('body')
<div>	
<a href="todo/create">Create New Lists</a>
<center><h1>To do list app</h1></center>
<strong>
<ul>	
	<li>
	@foreach($todos as $todo)
	<a href="todo/{{$todo->id}}">{{$todo->title}}</a>
</li><br>	
@endforeach
</ul>
</strong><br>
<strong>
<ul style="display:inline; ">	
	<li>
	@foreach($todos as $todo)
	@role('writer')
	<a href="todo/{{$todo->id}}/edit">edit</a>
	@endrole
</li><br>	

</ul>
</strong>
<form action="todo/{{$todo->id}}"method="post"style="display: inline;">
	{{csrf_field()}}
	{{method_field('DELETE')}}

<button type="submit">delete</button>
</form>
@endforeach
@endsection
