@extends('layouts.master')

@section('title')
    IHSS - {{ $ps_title }}
@endsection

@section('content')

<div class="fh5co-hero">
<div class="fh5co-overlay"></div>
	<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/caring.jpg') }});">
		<div class="desc animate-box">
			<h2>Donation is carings</h2>
			<span>Give Love</span>
			<span><em><i class="icon-map"></i>GK Enchanted Farm in Angat, Bulacan</em></span>
		</div>
	</div>

</div>

<div id="fh5co-portfolio">
	<div class="container">

		<div class="joblisting">
			<div class="row">
				<div class="col-sm-12 jobdesc">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>

					<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>

					<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>

					<p>Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="fh5co-portfolio">
	<div class="container">

		<div class="row row-bottom-padded-md">
			<div class="col-md-6 col-md-offset-3 text-center heading-section">
				<h3>You may also like this</h3>
			</div>
			<div class="col-md-12">
				<ul id="fh5co-portfolio-list">

					<li class="one-third " style="background-image: url({{ asset('images/cover_bg_3.jpg') }}); ">
						<a href="#" class="color-4">
							<div class="case-studies-summary">
								<h2>Donation is caring</h2>
							</div>
						</a>
					</li>

					<li class="one-third " style="background-image: url({{ asset('images/cover_bg_3.jpg') }}); ">
						<a href="#" class="color-4">
							<div class="case-studies-summary">
								<h2>Donation is caring</h2>
							</div>
						</a>
					</li>

					<li class="one-third " style="background-image: url({{ asset('images/cover_bg_3.jpg') }}); ">
						<a href="#" class="color-4">
							<div class="case-studies-summary">
								<h2>Donation is caring</h2>
							</div>
						</a>
					</li>

				</ul>
			</div>
		</div>
	</div>
</div>

@stop
