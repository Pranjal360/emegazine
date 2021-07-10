<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Ekodus Technologies enable clients to navigate their digital transformation. This edition focuses on the employee’s interpersonal skills, extraordinary articles from guest writer, unfolding its diverse developments in respective departments in Ekodus along with some energetic wishes from MD and CEO. Also showcasing Ms. Amrita Gogoi, an Assamese film industry actress as the brand new ambassador of YMOC.">
    <meta name="keywords" content="ekodus, emagazine, e-magazine">
    <meta name="author" content="Ekodus">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Ekodus - Bimonthly Newsletter | {{ $magazine->issue_no }}">
    <meta itemprop="description" content="Ekodus Technologies enable clients to navigate their digital transformation. This edition focuses on the employee’s interpersonal skills, extraordinary articles from guest writer, unfolding its diverse developments in respective departments in Ekodus along with some energetic wishes from MD and CEO. Also showcasing Ms. Amrita Gogoi, an Assamese film industry actress as the brand new ambassador of YMOC.">
    @hasSection ('mimg')
        @yield('mimg')
    @else
        <meta itemprop="image" content="https://ekodus.com/e-Magazine/user/images/logo.png">
    @endif
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta property="og:url"           content="https://ekodus.com/e-Magazine" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Ekodus - Bimonthly Newsletter | {{ $magazine->issue_no }}" />
    <meta property="og:description"   content="Ekodus Technologies enable clients to navigate their digital transformation. This edition focuses on the employee’s interpersonal skills, extraordinary articles from guest writer, unfolding its diverse developments in respective departments in Ekodus along with some energetic wishes from MD and CEO. Also showcasing Ms. Amrita Gogoi, an Assamese film industry actress as the brand new ambassador of YMOC." />
    @hasSection ('mgimg')
        @yield('mgimg')
    @else
        <meta property="og:image:secure_url" content="https://ekodus.com/e-Magazine/user/images/logo.png" />
    @endif
    
    <meta property="og:site_name" content="Ekodus e-Magazine">
    
    <title>Ekodus - Bimonthly Newsletter</title>
    <!--Favicon-->
    <link rel="shortcut icon" href="{{URL::asset('user/images/favicon.ico')}}" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('user/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('user/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('user/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('user/css/animate.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('user/css/bootstrap-select.min.css')}}">
    <!-- Flipbook StyleSheet -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('user/css/dflip.css')}}">
    <!-- Icons Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('user/css/themify-icons.css')}}" >
    @yield('css')
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-5 col-xs-5 nav-left">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ route('user.home') }}">
                            <img src="{{URL::asset('user/images/logo.png')}}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-7 col-xs-7 text-right">
                    <ul class="list-inline header-link">
                        <li>
                            <div class="newsleter">
                                Bi -Monthly Newsletter
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>