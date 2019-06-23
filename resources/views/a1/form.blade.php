@extends('admin.app')
@section('css')
<link rel="stylesheet" href="{{asset('panel/bower_components/select2/dist/css/select2.min.css')}}">
<script type="text/javascript"src="/blog/public/js/jqry.js"></script>
@endsection
@section('main-content')

<center>
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('admin-register') }}">
              {{csrf_field()}}
              <div class="box-body">
              	</div><div class="form-group">
                  <label for="exampleInputname">Enter Username</label>
                  <input type="text" class="form-control"name="username" id="exampleInputname" placeholder="Enter username">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control"name="email" id="exampleInputEmail1" placeholder="Enter email">
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control"name="password" id="exampleInputPassword1" placeholder="Enter Password">
                </div>
                
                
              </div>
              <div class="form-group">
                <label>Roles</label>
                <select class="form-control select2"name='role' multiple="multiple" data-placeholder="Select a roles"
                        style="width: 100%;">
                        @foreach($role as $roles)
                  <option value='{{ $roles->id }}'>{{ $roles->name }}</option>
                 
                
                @endforeach
                </select>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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