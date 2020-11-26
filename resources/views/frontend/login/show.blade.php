@extends('layouts.master')

@section('title')
    IHSS - Login
@endsection

@section('stylesheets')
    {{ Html::style(URL::asset('css/login.css')) }}
    {{ Html::style(URL::asset('css/iCheck/square/blue.css')) }}
@endsection

@section('content')

@if(Session::has('login_msg'))
    <div class="alert alert-info text-center">
        <strong>{{ Session::get('login_msg') }} <a href="{{ route('user.registration.update',Session::get('userid')) }}" class="{{ Session::get('user_status') == 1 ? '' : 'hidden' }}">here</a></strong>
    </div>
@endif

@if(Session::has('system_msg'))
    <div class="alert alert-warning text-center">
        <strong>{{ Session::get('system_msg') }}</strong>
    </div>
@endif

    <div class="login-box">
    <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Login</p>

            <form action="{{ route('user.login.post') }}" method="post">
            {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input name="login" type="text" class="form-control {{ $errors->has('login') ? 'input-error' : '' }}" placeholder="Username or Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                @if ($errors->has('login'))
                    <span class="login help-block text-center">
                        <strong class="error-foreground">{{ $errors->first('login') }}</strong>
                    </span>
                @endif
                <div class="form-group has-feedback">
                    <input name="password" type="password" class="form-control {{ $errors->has('login') ? 'input-error' : '' }}" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                @if ($errors->has('password'))
                    <span class="login help-block text-center">
                        <strong class="error-foreground">{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <div class="row">
                    <div class="col-md-7">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>
                <!-- /.col -->
                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary btn-block btn-flat btn-flat-1">Sign In</button>
                    </div>
                <!-- /.col -->
                </div>
            </form>

            <!-- <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="icon-facebook3"></i> Sign in using
            Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="icon-google-plus"></i> Sign in using
            Google+</a>
            </div> -->
                <!-- /.social-auth-links -->
            <div class="clearfix loginfix"></div>

            <div class="font-12px text-center">
                <a href="#">I forgot my password</a><br>
                <a href="{{ route('user.registration') }}" class="text-center">Register a new membership</a>
            </div>
        </div>
    <!-- /.login-box-body -->
    </div>

<div class="clearfix loginfix"></div>

@section('scripts')
    {{ Html::script(URL::asset('js/iCheck/icheck.min.js')) }}

    <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
    </script>
@endsection

@stop
