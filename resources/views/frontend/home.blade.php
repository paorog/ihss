@extends('layouts.master')

@section('title')
    iHSS - Home
@endsection

@section('content')
	<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
		<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url( {{ asset('/images') }}/sample-banner.jpg);">
			<div class="desc animate-box">
				<h2>We help people through volunteering </h2>
				<span>sign up to our programs to help children</span>
				<span><a class="btn btn-primary btn-lg" href="#">sign up now</a></span>
			</div>
		</div>

	</div>

	<div id="fh5co-features">
		<div class="container">
			<div class="row">
				<div class="col-md-4">

					<div class="feature-left">
						<span class="icon">
							<i class="icon-profile-male"></i>
						</span>
						<div class="feature-copy">
							<h3>Become a volunteer</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							<p><a href="#">Learn More</a></p>
						</div>
					</div>

				</div>

				<div class="col-md-4">
					<div class="feature-left">
						<span class="icon">
							<i class="icon-happy"></i>
						</span>
						<div class="feature-copy">
							<h3>Happy Giving</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							<p><a href="#">Learn More</a></p>
						</div>
					</div>

				</div>
				<div class="col-md-4">
					<div class="feature-left">
						<span class="icon">
							<i class="icon-wallet"></i>
						</span>
						<div class="feature-copy">
							<h3>Donation</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							<p><a href="#">Learn More</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-feature-product" class="fh5co-section-gray" style="background-image: url( {{ asset('/images') }}/mv.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center heading-section heading-section-white">
					<h3>Our Mission &amp; Vision</h3>
				</div>
			</div>

			<div class="row row-bottom-padded-md">
				<div class="col-md-6 text-center animate-box">
					<p><img src="{{ URL::asset('images/mission.jpg') }}" alt="" class="img-responsive"></p>
				</div>
				<div class="col-md-6 text-left animate-box heading-section-white">
					<h3>Mission</h3>
					<p>A client-centered, solution-based and service-oriented platform that provides  simple, efficient, timely and reliable tool and knowledge-based management to multi-social service licensed agencies in the Philippines.</p>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-6 text-left animate-box heading-section-white">
					<h3>Vision</h3>
					<p>An online community of connected, engaged and collaborative professional Filipino social workers </p>
				</div>
				<div class="col-md-6 text-center animate-box">
					<p><img src="{{ URL::asset('images/vision.jpg') }}" alt="" class="img-responsive"></p>
				</div>
			</div>


		</div>
	</div>


	<div id="fh5co-portfolio">
		<div class="container">

			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
					<h3>Our Projects. Support Us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
				</div>
			</div>


			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-portfolio-list">

						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url( {{ asset('/images') }}/cover_bg_1.jpg); ">
							<a href="#" class="color-3">
								<div class="case-studies-summary">
									<span>Give Love</span>
									<h2>Donation is caring</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url( {{ asset('/images') }}/cover_bg_3.jpg); ">
							<a href="#" class="color-4">
								<div class="case-studies-summary">
									<span>Give Love</span>
									<h2>Donation is caring</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url( {{ asset('/images') }}/cover_bg_1.jpg); ">
							<a href="#" class="color-5">
								<div class="case-studies-summary">
									<span>Give Love</span>
									<h2>Donation is caring</h2>
								</div>
							</a>
						</li>
						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url( {{ asset('/images') }}/cover_bg_3.jpg); ">
							<a href="#" class="color-6">
								<div class="case-studies-summary">
									<span>Give Love</span>
									<h2>Donation is caring</h2>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center animate-box">
					<a href="#" class="btn btn-primary btn-lg">See All Projects</a>
				</div>
			</div>


		</div>
	</div>

	<div id="fh5co-blog-section" class="fh5co-section-gray" style="background-image: url( {{ asset('/images') }}/news-bg.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center heading-section heading-section-white animate-box">
					<h3>Recent From Blog</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row row-bottom-padded-md">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="{{ URL::asset('images/cover_bg_1.jpg') }}" alt=""></a>
						<div class="blog-text">
							<div class="prod-title">
								<h3><a href=""#>Medical Mission in Southern Kenya</a></h3>
								<span class="posted_by">Sep. 15th</span>
								<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<p><a href="#">Learn More...</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="{{ URL::asset('images/cover_bg_2.jpg') }}" alt=""></a>
						<div class="blog-text">
							<div class="prod-title">
								<h3><a href=""#>Medical Mission in Southern Kenya</a></h3>
								<span class="posted_by">Sep. 15th</span>
								<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<p><a href="#">Learn More...</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix visible-sm-block"></div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="{{ URL::asset('images/cover_bg_3.jpg') }}" alt=""></a>
						<div class="blog-text">
							<div class="prod-title">
								<h3><a href=""#>Medical Mission in Southern Kenya</a></h3>
								<span class="posted_by">Sep. 15th</span>
								<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<p><a href="#">Learn More...</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix visible-md-block"></div>
			</div>

			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center animate-box">
					<a href="#" class="btn btn-primary btn-lg">Our Blog</a>
				</div>
			</div>

		</div>
	</div>

@stop
