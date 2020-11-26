@extends('layouts.master')

@section('title')
    IHSS - Update Registration
@endsection

@section('stylesheets')
    {{ Html::style(URL::asset('css/img-upload.css')) }}
@endsection

@section('content')

@if(Session::has('registration_msg'))
    <div class="alert alert-success text-center">
        <strong>{{ Session::get('registration_msg') }}</strong>
    </div>
@endif

<div class="register-box">
    <div class="register-box-body">

        <p class="login-box-msg">Update User Registration</p>

        {{ Form::open(array('route' => 'user.registration.updatepayment', 'method' => 'post', 'files' => true)) }}
            {{ csrf_field()}}
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Browse… <input name="payment" type="file" id="imgInp" accept="image/x-png,image/jpeg">
                        </span>
                    </span>
                    <input id="imgsrc" type="text" class="form-control" placeholder="Upload Donation Proof" readonly>
                    <input type="hidden" name="userid" value="{{ request()->route('userid') }}" />
                </div>
                <img id='img-upload'/>
                <a id="removeImg" class="btn-remove hidden">Remove image</a>
            </div>
            <hr>
            <div class="row">
                <button type="submit" class="btn btn-primary btn-block btn-flat btn-flat-1">Update</button><!-- /.col -->
            </div>
        {{ Form::close() }}

    </div>
<!-- /.form-box -->
</div>

@section('scripts')
    {{ Html::script(URL::asset('js/img-upload.js')) }}
    {{ Html::script(URL::asset('js/registration/index.js')) }}
@endsection

@stop
