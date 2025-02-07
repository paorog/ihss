@extends('layouts.master')

@section('title')
    IHSS - Contact Us
@endsection

@section('content')

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/cont.jpg') }});">
				<div class="desc animate-box">
					<h2><strong>Contact</strong> Us</h2>
					<span>How about message us about social works</span>
				</div>
			</div>

		</div>

		<div id="fh5co-contact" class="animate-box">
			<div class="container">
				<form action="#">
					<div class="row">
						<div class="col-md-6">
							<h3 class="section-title">Our Address</h3>
							<p></p>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>Manila, Philippines</li>
								<li><i class="icon-phone2"></i>+63 912 3456 789</li>
								<li><i class="icon-mail"></i><a href="#">info@ihss.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.ihss.net</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

@stop
