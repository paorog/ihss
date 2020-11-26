<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
  <base href="{{ URL::to('/') }}">

	<link rel="shortcut icon" href="{{ URL::asset('resources/assets/images/favicon.ico') }}">

	{{ Html::style(URL::asset('fonts/font-awesome/css/font-awesome.min.css')) }}
	{{ Html::style(URL::asset('css/animate.css')) }}
	{{ Html::style(URL::asset('css/icomoon.css')) }}
	{{ Html::style(URL::asset('css/bootstrap.css')) }}
	{{ Html::style(URL::asset('css/superfish.css')) }}
	{{ Html::style(URL::asset('css/style_v11.css')) }}
	{{ Html::style(URL::asset('css/custom.css')) }}

	{{ Html::script(URL::asset('js/modernizr-2.6.2.min.js')) }}

	@yield('stylesheets')
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

		<div id="fh5co-wrapper">
			<div id="fh5co-page">
				<div class="header-top">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6 text-left fh5co-link">
								@if(Auth::user())
									@if(Auth::user()->accesstype == 'SU001')
										<a href="{{ route('admin.show') }}">Administration <span class="badge">1</span></a>
										<a href="{{ route('setting.show') }}">CMS</a>
									@endif
								@endif
								@if(Auth::guest())
									<a href="{{ route('user.login') }}">Login</a>
									<a href="{{ route('user.registration') }}">Register</a>
								@endif
								@if(!Auth::guest())
									<a href="{{ route('user.jobpostings.create') }}"><i class="fa fa-drivers-license-o" aria-hidden="true"></i> Post a Job</a>
									<a href="{{ route('user.myaccount.show') }}"><i class="fa fa-user-circle" aria-hidden="true"></i> My Account</a>
									<a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
										Logout
									</a>
									<form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								@endif
							</div>
							<div class="col-md-6 col-sm-6 text-right fh5co-social">
								<!-- <nav id="fh5co-menu-wrap" role="navigation" class="user-nav">
									<ul class="sf-menu" id="fh5co-primary-menu">
										<li>
											<a href="about.html" class="fh5co-sub-ddown">Welcome, {{ Auth::user() ? Auth::user()->username : 'Guest' }}</a>
											 @if(Auth::user())
											 <ul class="fh5co-sub-menu">
											 	<li><a href="#">My Account</a></li>
											 	<li><a href="#">I-Volunteer</a></li>
											</ul>
											@endif
										</li>
									</ul>
								</nav> -->
								@if(Auth::user())
									@if(intval($accountPercentage) < 100)
									<span class="progressbar-header">Account Progress. Click <span class="label label-warning"><Strong><a href="{{ route('user.myaccount.edit') }}">here</a></Strong></span> to update your profile</span>
									<div class="progress">
						                <div class="progress-bar progress-bar-{{ intval($accountPercentage) < 30 ? 'danger' : 'success' }}" role="progressbar" aria-valuenow="{{ $accountPercentage }}" aria-valuemin="0" aria-valuemax="100">
						                <span class="skill"><i class="val">{{ intval($accountPercentage) }}%</i></span>
						                </div>
						            </div>
						            @endif
						        @endif
								</div>
						</div>
					</div>
				</div>
				<header id="fh5co-header-section" class="sticky-banner">
					<div class="container">
						<div class="nav-header">
							<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
							<h1 id="fh5co-logo"><a href="{{ url('/') }}">iHSS</a></h1>
							<!-- START #fh5co-menu-wrap -->
							<nav id="fh5co-menu-wrap" role="navigation">
								<ul class="sf-menu" id="fh5co-primary-menu">
									<li class="active">
										<a href="{{ url('/') }}">Home</a>
									</li>
									<li>
										<a href="#" class="fh5co-sub-ddown">Services</a>
										 <ul class="fh5co-sub-menu">
										 	<li><a href="{{ route('ngolist.list') }}">Programs & Services</a></li>
										 	<li><a href="#">E-Referral</a></li>
										 	<li><a href="#">Connect to Social Services</a></li>
										</ul>
									</li>
									<li>
										<a href="#" class="fh5co-sub-ddown">Network & Linkages</a>
										 <ul class="fh5co-sub-menu">
										 	<li><a href="{{ route('forum.index') }}">Forum</a></li>
										 	<li><a href="{{ route('user.jobpostings.show') }}">Job Postings</a></li>
										 	<li><a href="#">Updates</a></li>
										</ul>
									</li>
									<li>
										<a href="#" class="fh5co-sub-ddown">E-learning</a>
										 <ul class="fh5co-sub-menu">
										 	<li><a href="{{ route('user.blogs.show') }}">Blog</a></li>
											<li><a href="{{ route('paper.thesis.show') }}">Publish Paper/Thesis</a></li>
											<li><a href="{{ route('professional.education.show') }}">Continuing Professional Education</a></li>
										 	<li><a href="#">E-Learning Institute</a></li>
										 	<li><a href="{{ route('socialwork.law.show') }}">Social Work & The Law</a></li>
										 	<li><a href="#">Social Entrepreneurship</a></li>
										</ul>
									</li>
									<li><a href="{{ route('contact.us') }}">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>

				@yield('content')

				<footer>
					<div id="footer">
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 text-center">
									<p class="fh5co-social-icons">
										<a href="#"><i class="icon-twitter2"></i></a>
										<a href="#"><i class="icon-facebook2"></i></a>
										<a href="#"><i class="icon-instagram"></i></a>
										<a href="#"><i class="icon-dribbble2"></i></a>
										<a href="#"><i class="icon-youtube"></i></a>
									</p>
									<p>Copyright 2017 <a href="#">iHeart of Social Services</a>. All Rights Reserved. <br>
									<a href="#">Privacy</a> <a href="#">Contact</a> <a href="#">FAQ</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		@yield('vue')
		{{ Html::script(asset('js/jquery.min.js')) }}
		{{ Html::script(asset('js/bootstrap.min.js')) }}
		{{ Html::script(asset('js/jquery.waypoints.min.js')) }}
		{{ Html::script(asset('js/jquery.stellar.min.js')) }}
		{{ Html::script(asset('js/superfish.js')) }}
		{{ Html::script(asset('js/jquery.easing.1.3.js')) }}
		{{ Html::script(asset('js/sticky.js')) }}
		{{ Html::script(asset('js/hoverIntent.js')) }}
		{{ Html::script(asset('js/main.js')) }}
		{{ Html::script(asset('js/notify.min.js')) }}
		@yield('scripts')
		<script>
		 $(document).ready(function() {
		      $('.progress .progress-bar').css("width",
		          function() {
		              return $(this).attr("aria-valuenow") + "%";
		          }
		      )
		  });

		</script>
		@if(Session::has('system_message'))
		<script>
				$.notify( "{{ Session::get('system_message') }}" , "{{ Session::get('notification_type') }}" );
		</script>
		@endif

	</body>
</html>
