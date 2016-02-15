<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
    <!-- META SECTION -->
    <title>E-TRENER</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" id="theme" href="{{ URL::asset('assets/css/theme-default.css') }}" />
    <!-- EOF CSS INCLUDE -->
</head>
<body>

<div class="login-container">

    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body">
            <div class="login-title">{!! trans('login/login.wellcome') !!}</div>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{!! trans('login/login.email') !!}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                               <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input type="password" class="form-control" name="password" placeholder="{!! trans('login/login.password') !!}">
                        @if ($errors->has('password'))
                            <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> {!! trans('login/login.rememberMe') !!}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-info btn-block">{!! trans('login/login.login') !!}</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2015 E-TRENER
            </div>
            <div class="pull-right">
                <a href="#">{!! trans('login/login.forgetPassword') !!}</a> |
                <a href="#">{!! trans('login/login.abaut') !!}</a> |
                <a href="#">{!! trans('login/login.contact') !!}</a>
            </div>
        </div>
    </div>

</div>

</body>
</html>






