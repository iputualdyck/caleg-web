<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstra')}}p.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesom')}}e.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-green.css')}}">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" href="{{ asset('dist/please-wait.css') }}">
  <script src="{{ asset('dist/please-wait.min.js') }}"></script>
  <script type="text/javascript">
      window.loading_screen = window.pleaseWait({
        logo: "assets/images/employee.png",
        backgroundColor: '#f46d3b',
        loadingHtml: "<p class='loading-message'>A good day to you fine user!</p>"
      });
    </script>
</head>
<style>
  .title{
    font-weight: bold;
    color: #202D32;
  }
  .subtitle{
    margin-top: -13px;
    color: #a5a5a5;
  }
  body{
    background: #EBF0F5;
  }

  .btn-dark{
    transition: .3s;
    background: #202D32;
    color: #fff;
    height: 60px
  }

  .btn-dark:hover{
    color: #fff;
    background: #38484f;
    box-shadow: 0 0 20px #eee;
  }
</style>
<body>
<div class="inner">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default" style="margin-top: 50px;">
          <div class="panel-body">
            <p class="text-center"><img src="{{ asset('assets/images/employee.png') }}" alt="" class="img-responsive" width="170px" style="margin: 0 auto;"></p>
            <h1 class="title">GO CALEG</h1>
            <p class="subtitle">Login Administrator</p>
            <form action="{{ route('login') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" autofocus="true">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password">
              </div>
              <button class="btn btn-dark btn-block">Masuk <i class="fa fa-sign-in"></i></button>
            </form>
          </div>
        </div>
        <br>
        @if($errors->any())
          <div class="alert alert-danger text-center">Email Atau Password Salah</div>
        @endif
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>