<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>WELCOME TO THE iHEART OF SOCIAL SERVICES</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	{{ Html::style(URL::asset('resources/assets/css/bootstrap.min.css')) }}
	{{ Html::style(URL::asset('resources/assets/fonts/font-awesome/css/font-awesome.min.css')) }}
	{{ Html::style(URL::asset('resources/assets/fonts/Ionicons/css/ionicons.min.css')) }}
	{{ Html::style(URL::asset('resources/assets/css/AdminLTE.min.css')) }}
	{{ Html::style(URL::asset('resources/assets/plugins/iCheck/square/blue.css')) }}
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
								<a href="#">Login</a>
								<a href="#">Register</a>
								<a href="{{ route('contact.us') }}">Contact</a>
								@if(!Auth::guest())
								<a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> My Account</a>
								<a href="#">Logout</a>
								@endif
							</div>
							<div class="col-md-6 col-sm-6 text-right fh5co-social">
								<a href="#" class="grow"><i class="icon-facebook2"></i></a>
								<a href="#" class="grow"><i class="icon-twitter2"></i></a>
								<a href="#" class="grow"><i class="icon-instagram2"></i></a>
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
										<a href="about.html" class="fh5co-sub-ddown">Services</a>
										 <ul class="fh5co-sub-menu">
										 	<li><a href="#">Programs & Services</a></li>
										 	<li><a href="#">E-Referral</a></li>
										 	<li><a href="#">Customer Services</a></li>
										</ul>
									</li>
									<li>
										<a href="about.html" class="fh5co-sub-ddown">Network & Linkages</a>
										 <ul class="fh5co-sub-menu">
										 	<li><a href="#">Forum</a></li>
										 	<li><a href="#">Job Postings</a></li>
										 	<li><a href="#">Updates</a></li>
										</ul>
									</li>
									<li>
										<a href="#" class="fh5co-sub-ddown">E-learning</a>
										 <ul class="fh5co-sub-menu">
										 	<li><a href="#">Blog</a></li>
											<li><a href="#">Publish Paper/Thesis</a></li>
											<li><a href="#">Continuing Professional Education</a></li>
										 	<li><a href="#">E-Learning Institute</a></li>
										 	<li><a href="#">Social Work & The Law</a></li>
										 	<li><a href="#">Social Entrepreneurship</a></li>
										</ul>
									</li>
									<li><a href="#">Contact</a></li>
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

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="plugins/iCheck/icheck.min.js"></script>
	<script>
	  $(function () {
	    $('input').iCheck({
	      checkboxClass: 'icheckbox_square-blue',
	      radioClass: 'iradio_square-blue',
	      increaseArea: '20%' // optional
	    });
	  });
	</script>
	@yield('scripts')
	</body>
</html>