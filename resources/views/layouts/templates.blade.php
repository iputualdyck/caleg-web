<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstra')}}p.min.css">
  
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesom')}}e.min.css">
  
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-black.css')}}">
  <link rel="stylesheet" href="{{ asset('dist/css/dropify.min.css') }}">
  
  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('dist/js/sw.js') }}"></script>
  <style>
    .bg-dark{
      background: #202D32;color: white;
    }

    .btn-dark{
      transition: .3s;
      background: #202D32;color: white;
    }

    .btn-dark:hover{
      color: white;
      background: #3d484c;
    }

    .form-control:focus{
      border-color: #202D32 !important;
    }

    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.a;ctive>span:focus, .pagination>.active>span:hover{
      opacity: 100%;
      border-color: #202D32;
    }

    .preloader{
        background-color: #202D32;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        opacity: 100%;
        animation-duration: 3s;
        margin-left: 0%;
        width: 100%;
        opacity: 1  ;
    }

    .preloader img{
      margin-top: 200px;
      width: 10%;
      margin-left: 45%;
      margin-right: 45%;
    }

    @keyframes fadeOut {
        0% {opacity: 1; z-index: 999;}
        100% {opacity: 0; z-index: 1;}
     }


  </style>
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  @yield('link')
</head>
<body class="hold-transition skin-black sidebar-mini">
<!-- <div class="preloader">
  <img src="{{ asset('assets/images/employee.png') }}" alt="">
</div> -->
<div class="wrapper">
  <header class="main-header">
    <a href="{{ route('home') }}" class="logo">
      <span class="logo-mini">GO</span>
      <span class="logo-lg">GO CALEG</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="">
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-block btn-danger">Sign out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ route('caleg') }}"><i class="fa fa-user"></i> <span>
        Caleg</span></a></li>
        <li><a href="{{ route('career') }}"><i class="fa fa-bank"></i> <span>Career</span></a></li>
        <li><a href="{{ route('organization') }}"><i class="fa fa-balance-scale"></i> <span>Organization</span></a></li>
        <li><a href="{{ route('activities') }}"><i class="fa fa-sticky-note"></i> <span>Activities</span></a></li>
        <li><a href="{{ route('message') }}"><i class="fa fa-comments"></i><span>Criticism & Suggestions</span></a></li>
        <li><a href="{{ route('gallery') }}"><i class="fa fa-photo"></i><span>Gallery</span></a></li>
        <li><a href="{{ route('video') }}"><i class="fa fa-video-camera"></i><span>Video Activities</span></a></li>
        <li><a href="{{ route('members') }}"><i class="fa fa-users"></i><span>Members</span></a></li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        @yield('menu_title')
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Menu</a></li>
        <li class="active">@yield('menu_title')</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2018 <a href="#">GO CALEG</a>.</strong> All rights reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('dist/js/dropify.min.js')}}"></script>
<script>
  $(function () {
    $('.dropify').dropify();
    $('#datatable').DataTable()
  })
</script>
@include('component.swal_alert')
@yield('script')
  <script>
    var interval = setInterval(function() {
    if(document.readyState === 'complete') {
        clearInterval(interval);
        // $('.preloader').css("animation-name", "fadeOut");
        // $('.preloader').css("opacity", 0);
      }    
    }, 100);
  </script>
</body>
</html>