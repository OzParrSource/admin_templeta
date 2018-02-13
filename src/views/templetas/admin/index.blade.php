<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    {!! Html::style('assets/adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
    <!--Select2-->
    {!! Html::style('assets/adminLTE/bower_components/select2/dist/css/select2.min.css') !!}
    <!--Check-->
    {!! Html::style('assets/adminLTE/plugins/iCheck/all.css')!!}
    <!-- Font Awesome -->
    {!! Html::style('assets/adminLTE/bower_components/font-awesome/css/font-awesome.min.css') !!}
    <!-- Ionicons -->
    {!! Html::style('assets/adminLTE/bower_components/Ionicons/css/ionicons.min.css') !!}
    <!-- Theme style -->
    {!! Html::style('assets/adminLTE/dist/css/AdminLTE.min.css') !!}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
    {!! Html::style('assets/adminLTE/dist/css/skins/_all-skins.min.css') !!}
    <!-- Morris chart -->
    {!! Html::style('assets/adminLTE/bower_components/morris.js/morris.css') !!}
    <!-- jvectormap -->
    {!! Html::style('assets/adminLTE/bower_components/jvectormap/jquery-jvectormap.css') !!}
    <!-- Date Picker -->
    {!! Html::style('assets/adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}
    <!-- Daterange picker -->
    {!! Html::style('assets/adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}
    <!-- bootstrap wysihtml5 - text editor -->
    {!! Html::style('assets/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}

    <!-- Mas css -->
    @yield('css')

<!-- Mi css -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>adminLTE</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        @if(Route::has('logout.index') )
                            <a href="{{ route('logout') }}" class="dropdown-toggle"
                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                Salir
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endif
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>

@include('admin_templeta::templetas.admin.partials.side-barr')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('titulo')
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="fa fa-dashboard"></i>
                        Home
                    </a>@yield('direccion')
                </li>

            </ol>

        </section>

        <!-- Main content -->
        <section class="content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @include('flash::message')
            @yield('contenido')
        </section>

    </div>



    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 0.1
        </div>
        <strong>powered by Luis Ozuna</strong> All rights
        reserved.
    </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
{!! Html::script('assets/adminLTE/bower_components/jquery/dist/jquery-3.2.1.min.js') !!}
<!-- jQuery UI 1.11.4 -->
{!! Html::script('assets/adminLTE/bower_components/jquery-ui/jquery-ui.min.js') !!}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
{!! Html::script('assets/adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
<!-- Morris.js charts -->
{!! Html::script('assets/adminLTE/bower_components/raphael/raphael.min.js') !!}
{!! Html::script('assets/adminLTE/bower_components/morris.js/morris.min.js') !!}
<!-- Sparkline -->
{!! Html::script('assets/adminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') !!}
<!-- jvectormap -->
{!! Html::script('assets/adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
{!! Html::script('assets/adminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
<!-- jQuery Knob Chart -->
{!! Html::script('assets/adminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js') !!}
<!-- daterangepicker -->
{!! Html::script('assets/adminLTE/bower_components/moment/min/moment.min.js') !!}
{!! Html::script('assets/adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js') !!}
<!-- datepicker -->
{!! Html::script('assets/adminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}
<!-- Bootstrap WYSIHTML5 -->
{!! Html::script('assets/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}
<!-- Slimscroll -->
{!! Html::script('assets/adminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') !!}
<!-- FastClick -->
{!! Html::script('assets/adminLTE/bower_components/fastclick/lib/fastclick.js') !!}
<!-- AdminLTE App -->
{!! Html::script('assets/adminLTE/dist/js/adminlte.min.js') !!}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{!! Html::script('assets/adminLTE/dist/js/pages/dashboard.js') !!}
<!-- AdminLTE for demo purposes -->
{!! Html::script('assets/adminLTE/dist/js/demo.js') !!}
<!--Select2-->
{!! Html::script('assets/adminLTE/bower_components/select2/dist/js/select2.full.min.js') !!}
<!--Check-->
{!! Html::script('assets/adminLTE/plugins/iCheck/icheck.min.js')!!}

@yield('scripts')
</body>