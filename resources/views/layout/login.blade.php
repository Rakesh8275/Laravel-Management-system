<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
   TA Website
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ url('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ url('assets/css/black-dashboard.css?v=1.0.0') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ url('assets/demo/demo.css') }}" rel="stylesheet" />
</head>
<!-- @guest
<li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">Login</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('register-user') }}">Register</a>
</li>
@else
<li class="nav-item">
    <a class="nav-link" href="{{ route('signout') }}">Logout2</a>
</li>
@endguest -->
<body class="">
  <div class="wrapper">
    @yield('content')
  </div>
  <!--   Core JS Files   -->
  <script src="{{ url('assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ url('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ url('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ url('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ url('assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('assets/js/black-dashboard.min.js?v=1.0.0') }}"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ url('assets/demo/demo.js') }}"></script>

  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  
</body>

</html>