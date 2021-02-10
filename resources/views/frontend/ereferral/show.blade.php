@extends('layouts.master')

@section('title')
    IHSS - E-Referral
@endsection

@section('content')

@if(auth::user() && auth::user()->accesstype == 'SU001')
<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/ereferral.jpg') }});">
		<div class="desc animate-box">
			<h2><strong>Referrals </strong></h2>
			<span><a class="btn btn-primary btn-lg" href="{{ route('ereferral.create') }}">Submit a referral</a></span>
		</div>
	</div>

</div>

<div id="fh5co-content-section" class="fh5co-section-gray">
	<div class="container">
		@forelse($referrals as $referral)
		<div class="joblisting">
			<div class="row">
				<div class="col-sm-5">
					<div class="row">
						<div class="col-sm-12">
							<div class="title-job">
								<p>Contact Number - {{ $referral->contact_number }}</p>
								<p>Email - {{ $referral->email }}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 loc-job">
					<p></p>
				</div>
				<div class="col-sm-3 btn-job">
					<p class="text-center">
            {{-- @if($post->userid == $currentUser->userid)
            <a href="{{ route('user.jobpostings.edit',$post->postid) }}" class="footer-btn blu-btn" title="">Edit</a>
            @endif --}}
						<a href="#" class="footer-btn blu-btn" title="">View</a>
					</p>
				</div>
			</div>
			<hr>
			<div class="container-fluid">
				{!! str_limit(nl2br($referral->message),300) !!}
			</div>
			<div class="clearfix"><hr></div>
			<div class="container-fluid">
				@php
					$currentDate = new Carbon\Carbon();
					$refDate = $referral->created_at;
					$diff = $refDate->diffForHumans($currentDate);
					$postedBy = $referral->userid != 0 ? $referral->user->username : 'anonymous';
				@endphp
				<p><strong>Date Posted: </strong>{{ date_format($refDate,'Y-m-d') == date('Y-m-d') ? $diff : date_format($refDate,'Y-m-d') }} <strong>Posted By: </strong> {{ $postedBy }} </p>
			</div>

		</div>
		@empty
		<div class="joblisting">
			<div class="row">
				<h2>There are no referrals</h2>
			</div>
		</div>
		@endforelse


		{{-- <br>
		<ul class="pager">
		    <li class="previous disabled"><a href="#">&larr; Previous</a></li>
		    <li class="next"><a href="#">Next &rarr;</a></li>
		</ul> --}}
	</div>
</div>
@else
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
</div>
@endif

@stop
