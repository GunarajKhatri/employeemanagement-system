@extends('employee.app') 
@section('css')
<style type="text/css">
	  .task{
		text-decoration:underline;
	}
</style>
@endsection
@section('main-content')<br>
<div class="wrapper">
<div class="container">
<h4>As You became member of our co-operation....Here are some tasks for you.Hope you will fully be responsible for your tasks...</h4>
<h3 class="text-danger" style="text-decoration: underline;">Tasks Details:</h3>

 <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Tasks</th>
                  <th>Action</th>
                  
                </tr>
                <tbody>
                <tr>
                	@foreach($msg as $msgs)
                  <td>{{$loop->index +1}}</td>
                  <td>{{substr($msgs->message,0,292)}}................<strong>click View for full details</strong></td>
                 
                  <td><a href="{{route('employee-view',$msgs->id)}}">View</a> </td>
              
                </tr>
                    @endforeach
                </tbody>
               </table>
           </div>




</div>
</div>
@endsection