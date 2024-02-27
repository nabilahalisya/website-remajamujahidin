<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <title>Dashboard | Remaja Mujahidin</title> --}}

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="adminlte/plugins/summernote/summernote.min.css">
   <!-- SimpleMDE -->
   <link rel="stylesheet" href="adminlte/plugins/simplemde/simplemde.min.css">
   <!-- SweetAlert2 -->
  <link rel="stylesheet" href="adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- jQuery -->
  @stack('css')
  <script src="adminlte/plugins/jquery/jquery.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars"></i></a>
      </li>
    </ul>
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="adminlte/img/user2-160x160.jpg"
          class="user-image img-circle elevation-1" alt="User Image">
          <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="adminlte/img/user2-160x160.jpg" class="img-circle elevation-1" alt="User Image">

            <p>
              {{ Auth::user()->name }}
              {{-- <small>Member since Nov. 2012</small> --}}
            </p>
          </li>
      {{-- <li class="user-body">
        <div class="row">
          <div class="col-4 text-center">
            <a href="#">Followers</a>
          </div>
          <div class="col-4 text-center">
            <a href="#">Sales</a>
          </div>
          <div class="col-4 text-center">
            <a href="#">Friends</a>
          </div>
        </div>
        <!-- /.row -->
      </li> --}}

      <!-- Menu Footer-->
      <li class="user-footer">
          <a href="/user" class="btn btn-default btn-flat">Profile</a>
          {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-default btn-flat">Log out</button>
          </form> --}}
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
      <i class="fas fa-expand-arrows-alt"></i>
    </a>
  </li>
      <li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="nav-link bg-white border-0">Log out</button>
        </form>
      </li>
    </ul>

    
  </nav>
  <!-- /.navbar -->

@yield('content')

  
{{-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2021 <a href="/">Remaja Mujahidin</a>.</strong> All rights reserved.
</footer> --}}
<footer class="main-footer">
  <strong>Copyright &copy; 2014-2021 <a href="/">Remaja Mujahidin</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.1.0
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="adminlte/plugins/summernote/summernote.min.js"></script>
<!-- SweetAlert2 -->
<script src="adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="adminlte/js/demo.js"></script> --}}
<!-- Page specific script -->

@include('sweetalert::alert')
@stack('scripts')

<script type="text/javascript">
$(document).ready(function(){
  $('#summernote').summernote({
    
  })
});
  //   // Summernote
  //   $('#summernote').summernote({
  //     height:250
  // });
</script>
</body>
</html>
