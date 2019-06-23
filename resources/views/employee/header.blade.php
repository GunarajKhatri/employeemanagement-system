
<div class='container-fluid bg-dark'>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <a class="navbar-brand text-danger font-weight-bold" href="#">Gunaraj Co-operation</a>
  <button class="navbar-toggler"data-toggle="collapse" data-target="#Navbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse text-center" id="Navbar">
    <ul class="navbar-nav ml-auto mr-3">
      <li class="nav-item active mr-2">
        <a class="nav-link disabled home" href="{{url('/employee/dashboard')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white task"href="{{route('employee-task')}}">Tasks</a>
      </li> 
     </li>
     <li class="nav-item">
           <a class="nav-link text-white" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                       {{csrf_field()}} 
                                            </form>
      </li>
    </ul>
  </div>
</nav>	
</div>
<br>
<br>
