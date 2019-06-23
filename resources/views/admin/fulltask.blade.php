@extends('admin.app') 
@section('main-content')<br>
<div >
<h3 class="text-danger" style="text-decoration: underline;">Task:</h3>
@foreach($view as $views)
<h4>{{$views->message}}</h4>
<a href="{{route('admintask-view')}}" class='text-white bg-primary rounded' style="text-decoration: none; font-size:25px;margin-left:20px;">Back</a>
</div>

@endforeach
@endsection