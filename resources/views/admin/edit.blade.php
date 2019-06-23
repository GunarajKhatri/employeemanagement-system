@extends('admin.app')
@section('css')
<link rel="stylesheet" href="{{asset('panel/bower_components/select2/dist/css/select2.min.css')}}">
<script type="text/javascript"src="/blog/public/js/jqry.js"></script>
@endsection
@section('main-content')

<center>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('admin-update',$data->id)}}">
              {{csrf_field()}}
             
              <div class="box-body">
              	</div><div class="form-group">
                  <label for="exampleInputname">Enter Username</label>
                  <input type="text" class="form-control"name="username" id="exampleInputname" placeholder="Enter username"value='{{$data->username}}'>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control"name="email" id="exampleInputEmail1" placeholder="Enter email"value='{{$data->email}}'>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control"name="password" id="exampleInputPassword1" placeholder="Enter Password"value='{{$data->password}}'>
                </div>
                <div class="form-group">
                  <label for="exampleInputsalary">Salary</label>
                  <input type="integer" class="form-control"name="salary" id="exampleInputPassword1" placeholder="Enter salary"value='{{$data->salary}}'>
                </div>
                 <div class="radio form-group first">
                   <label><b>Select Department</b></label><br>
                    <label>
                      <input type="radio"name='department'value="web development"
                        @if($data->department=='web development')
                        checked
                        @endif
                      >Web Devlopment</label>                                                              
                   <br>
                     <label>
                      <input type="radio"name='department'value="Andriod Development" @if($data->department=='Andriod Development')
                        checked
                        @endif
                        >
                      Andriod Devlopment
                    </label>
                  </div>
                
                
               <div class="radio form-group second">
                   <label><b>Select Roles</b></label><br><br>
                    <label>
                      <input type="radio" name="role" id="optionsRadios2" value="Admin" @if($data->role=='Admin')
                        checked
                        @endif >
                      Admin
                    </label>
                     <label>
                      <input type="radio" name="role" id="optionsRadios2" value="Employee" @if($data->role=='Employee')
                        checked
                        @endif >
                      Employee
                    </label>
                  </div>
            

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          

         </center>
<script src="{{asset('panel/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
  $(document).ready(function(){
    //Initialize Select2 Elements
    $('.select2').select2()
  });
</script>
@endsection