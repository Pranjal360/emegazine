<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>E-Magazine</title>
    <link rel="shortcut icon" href="{{URL::asset('admin/images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{URL::asset('admin/images/favicon.ico')}}" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{URL::asset('admin/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/svg/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/font-awesome/css/font-awesome.min.css')}}">
    @yield('css')
</head>
<body>
    <div id="wrapper">
        <div class="overlay"></div>
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <div class="top-logo">
                <div class="sidebar-brand"> <a href="#"><img src="{{URL::asset('admin/images/logo.png')}}" style="width:100%;"> </a> </div>
            </div>
            <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas"> <span class="hamb-top"></span> <span class="hamb-middle"></span> <span class="hamb-bottom"></span> </button>

            <ul class="nav sidebar-nav">
                <li class="{{ (\Request::route()->uri == 'adminHome') ? 'active' : '' }}">
                    <a href="{{ route('admin.home') }}"><span class="icon-Joint-Development-form iconsvg"></span><span class="svgtext">Issue</span></a>
                </li>
                <li class="{{ (\Request::route()->uri == 'issuesList') ? 'active' : '' }}">
                    <a href="{{ route('admin.issuelist') }}"><span class="icon-portfolio iconsvg"></span><span class="svgtext">Issue Lists</span></a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <nav class="navbar navbar-default mb-0 top-nav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-xs-10 col-sm-10 tar">
                        <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        </nav>