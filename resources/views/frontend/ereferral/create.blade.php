@extends('layouts.master')

@section('title')
    IHSS - E-Referral
@endsection

@section('content')
<div id="fh5co-content-section" class="fh5co-section-gray">
	
	<div class="container">
		<h2>Submit your referral</h2>
		<h5><i>Information here are confidential</i></h5>
        {{ Form::open(array('route' => 'ereferral.create.post', 'method' => 'post')) }}
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Contact Number" name="contact_number">
                    </div>
                    @if($errors->has('contact_number'))
                        <span class="help-block">
                            <strong class="error-foreground">{{ $errors->first('contact_number') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                    @if($errors->has('email'))
                        <span class="help-block">
                            <strong class="error-foreground">{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" id="" cols="30" rows="7" placeholder="Message" name="message"></textarea>
                    </div>
                    @if($errors->has('message'))
                        <span class="help-block">
                            <strong class="error-foreground">{{ $errors->first('message') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>
                </div>
            </div>
        {{ Form::close() }}
    </div>
</div>
@stop