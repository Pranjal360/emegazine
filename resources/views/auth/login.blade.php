<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Area::E-magazine</title>

    <link rel="shortcut icon" href="{{URL::asset('admin/images/febiconicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{URL::asset('admin/images/febiconicon.png')}}" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{URL::asset('admin/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/svg/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/font-awesome/css/font-awesome.min.css')}}">
    <!--    <link rel="stylesheet" href="css/animate.css">-->
    <link rel="stylesheet" href="{{URL::asset('admin/css/animate.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body>
    <div class="container login-container">
        <div class="row">
            <div class="col-md-8 col-md-push-2 card-login">
                <div class="col-md-7 pl-0">
                    <div class="login-image">
                    <img src="{{URL::asset('admin/images/n.png')}}" style="width:100%;">
                    </div>
                </div>
                <div class="col-md-5 ">
                    <div class="right-login">
                        <div class="right-image">
                            <img src="{{URL::asset('admin/images/logo.png')}}" class="w100">
                        </div>
                        <h4 class="mb-0">Admin Login</h4>
                        <div class="form-cover">
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="group">
                                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>User Name</label>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="group">
                                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Password</label>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="tar">
                                    <button type="submit" class="btn btn-login">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL::asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/custom.js')}}"></script>
</body>
</html>