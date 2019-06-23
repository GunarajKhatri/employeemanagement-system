@extends('employee.app')
@section('css')
<style type="text/css">
	  .home{
		text-decoration:underline;
	}
</style>
@endsection 
@section('main-content')
<div class="wrapper">
<div class="container"><br>
@foreach($datas as $data)

 <h5 class="d-4 mt-5"> Welcome! Mr. <strong> {{$data->username}} </strong>... You are selected in department called {{$data->department}}.<br>As per negotiation,We decided you to give salary Rs.{{$data->salary}} per month.Hope You work honourely and sincirely in our company and respect our vision. <br>
  Good Luck for Bright Future.. </h5>


@endforeach
 
</div>

</div>
@endsection