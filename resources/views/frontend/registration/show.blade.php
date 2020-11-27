@extends('layouts.master')

@section('title')
    IHSS - Registration
@endsection

@section('stylesheets')
    {{ Html::style(URL::asset('css/img-upload.css')) }}
    {{ Html::style(URL::asset('css/iCheck/square/blue.css')) }}
    @if($errors->has('terms'))
    {{ Html::style(URL::asset('css/terms-error.css')) }}
    @endif
@endsection

@section('content')

@if(Session::has('registration_msg'))
    <div class="alert alert-success text-center">
        <strong>{{ Session::get('registration_msg') }}</strong>
    </div>
@endif

<div class="register-box">
    <div class="register-box-body">

        <p class="login-box-msg">Registration</p>

        {{ Form::open(array('route' => 'user.registration.post', 'method' => 'post', 'files' => true)) }}
        {{ csrf_field() }}

            <div class="form-group has-feedback">
                <input name="email" type="text" class="form-control {{ $errors->has('email') ? 'input-error' : '' }}" placeholder="Enter valid email" value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            @if ($errors->has('email'))
                <span class="help-block text-center">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <div class="form-group has-feedback">
                <input name="username" type="text" class="form-control {{ $errors->has('username') ? 'input-error' : '' }}" placeholder="Enter a username" value="{{ old('username') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            @if ($errors->has('username'))
                <span class="help-block text-center">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
            <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control {{ $errors->has('password') ? 'input-error' : '' }}" placeholder="Enter your password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            @if ($errors->has('password'))
                <span class="help-block text-center">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <div class="form-group has-feedback">
                <input name="retypepass" type="password" class="form-control {{ $errors->has('retypepass') ? 'input-error' : '' }}" placeholder="Retype password">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            @if ($errors->has('retypepass'))
                <span class="help-block text-center">
                    <strong>{{ $errors->first('retypepass') }}</strong>
                </span>
            @endif
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Browse… <input name="payment" type="file" id="imgInp" accept="image/x-png,image/jpeg">
                        </span>
                    </span>
                    <input id="imgsrc" type="text" class="form-control" placeholder="Upload Donation Proof" readonly>
                </div>
                <img id='img-upload'/>
                <a id="removeImg" class="btn-remove hidden">Remove image</a>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-7">
                    <div class="checkbox icheck">
                        <label>
                            <input id="icheck" type="checkbox"> I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                    <input name="terms" id="terms" type="text" value="0" hidden>
                </div>
<!-- /.col -->
                <div class="col-md-5">
                    <button type="submit" class="btn btn-primary btn-block btn-flat btn-flat-1">Register</button>
                </div>
<!-- /.col -->
            </div>
        {{ Form::close() }}

        <div class="font-12px text-center">
            <a href="{{ route('user.login') }}" class="text-center">I already have a membership</a>
        </div>
        @if ($errors->has('terms'))
            <span class="help-block text-center">
                <strong>Must agree to terms</strong>
            </span>
        @endif
    </div>
<!-- /.form-box -->
</div>

@section('scripts')
    {{ Html::script(URL::asset('js/iCheck/icheck.min.js')) }}
    {{ Html::script(URL::asset('js/img-upload.js')) }}
    {{ Html::script(URL::asset('js/registration/index.js')) }}
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
