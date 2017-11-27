@extends('layouts.master')

@section('title')
    IHSS - Job Postings
@endsection

@section('content')
@php $banner = url('/resources/assets/images/') @endphp
	<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
		@php $companylogo = asset('/storage/jobpostings/'.$post->logofile) @endphp
		<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/job-banner.jpg') }});">
			<div class="desc animate-box">
				<h2>{{ $post->jobtitle }}</h2>
				<span>{{ $post->compname }}</span>
			</div>
		</div>

	</div>

		<div id="fh5co-content-section" class="fh5co-section-gray">
			<div class="container">
				<div class="joblisting">
					<div class="row">
						<div class="col-sm-5">
							<div class="row">
								<div class="col-sm-3 logo-job">
									<img src="{{ $companylogo }}" class="img-responsive center-block">
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
								<a href="#" class="footer-btn blu-btn" title="">Apply</a>
							</p>
						</div>

					</div>
				</div>
				<div class="joblisting">
					<div class="row">
						<div class="col-sm-12 jobdesc">
							{!! nl2br($post->jobdesc) !!}
						</div>
					</div>
					<ul class="pager">
					    <li class="next"><a href="{{ route('user.jobpostings.show') }}" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Return to Job Postings</a></li>
					</ul>
				</div>

			</div>
		</div>

@stop
