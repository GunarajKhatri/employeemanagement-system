@extends('admin.app')
@section('main-content')
 <form role="form"method="post"action="{{ route('admin-task') }}">
 	{{csrf_field()}}
 <div class="box-body">
 <div class="form-group">                 
               	<div class='container'>
                <h1 class="text-center text-success">Task Assignmet</h1>	
                    <div class="checkbox">
                    	<h4>Assign Tasks To:</h4><br>
                    	@foreach($data as $datas)
                                                        
                        <input type="checkbox"name='emp[]'value='{{$datas->id}}' style="margin-left:20px;"><span style="margin-left:38px; font-weight: bold;">{{$datas->username}}</span> <br>
                          @endforeach                   
                  </div>                
               </div>
                </div>
                </div>
                <div class="box-body">
                <div class="form-group">
                  <h4>Tasks:</h4>
                  <textarea class="form-control"name='message'rows="10" placeholder="Enter message"required=''></textarea>
                </div>
                </div>

                <div class="container">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('admintask-view')}}"class="btn btn-danger" style="margin-left:20px;">See Tasks Details</a>
              </div>            
          </div>


</form>
@endsection