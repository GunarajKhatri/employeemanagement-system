@extends('employee.app') 
@section('css')
<style type="text/css">
	  .task{
		text-decoration:underline;
	}
</style>
@endsection
@section('main-content')<br>

<div class="container">
<h3 class="text-danger" style="text-decoration: underline;">Task:</h3>
@foreach($view as $views)
<h6>{{$views->message}}</h6>
<a href="{{route('employee-task')}}" class='text-white bg-primary rounded' style="text-decoration: none; font-size:20px;">Back</a>
</div>

@endforeach
@endsection