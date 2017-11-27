@extends('layouts.master')

@section('title')
    IHSS - Job Postings
@endsection

@section('content')

<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/job-banner.jpg') }});">
		<div class="desc animate-box">
			<h2><strong>Browse </strong> Jobs</h2>
			<span>Welcome Jobseeker!</span>
			<span><a class="btn btn-primary btn-lg" href="{{ route('user.jobpostings.create') }}">Post a Job</a></span>
		</div>
	</div>

</div>

<div id="fh5co-content-section" class="fh5co-section-gray">
	<div class="container">
		@foreach($jobposts as $post)
		<div class="joblisting">
			<div class="row">
				<div class="col-sm-5">
					<div class="row">
						<div class="col-sm-3 logo-job">
							<img src="{{ url('/storage/jobpostings') . DIRECTORY_SEPARATOR . $post->logofile }}" class="img-responsive center-block">
						</div>
						<div class="col-sm-9">
							<div class="title-job">
								<h3>{{ $post->jobtitle }}</h3>
								<p>{{ $post->compname }}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 loc-job">
					<p></p>
				</div>
				<div class="col-sm-3 btn-job">
					<p class="text-center">
            @if($post->userid == $currentUser->userid)
            <a href="{{ route('user.jobpostings.edit',$post->postid) }}" class="footer-btn blu-btn" title="">Edit</a>
            @endif
						<a href="{{ route('user.jobpostings.single',$post->postid) }}" class="footer-btn blu-btn" title="">View</a>
					</p>
				</div>
			</div>
			<hr>
			<div class="container-fluid">
				{!! str_limit(nl2br($post->jobdesc),300) !!}
			</div>
			<div class="clearfix"><hr></div>
			<div class="container-fluid">
				@php
					$currentDate = new Carbon\Carbon();
					$postDate = $post->created_at;
					$diff = $postDate->diffForHumans($currentDate);

				@endphp
				<p><strong>Date Posted: </strong>{{ date_format($postDate,'Y-m-d') == date('Y-m-d') ? $diff : date_format($postDate,'Y-m-d') }} <strong>Posted By: </strong> {{ $post->user->username }} </p>
			</div>

		</div>
		@endforeach


		<br>
		<ul class="pager">
		    <li class="previous disabled"><a href="#">&larr; Previous</a></li>
		    <li class="next"><a href="#">Next &rarr;</a></li>
		</ul>
	</div>
</div>

@stop
