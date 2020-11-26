@extends('layouts.master')

@section('title')
    IHSS - {{ $ps_title }}
@endsection

@section('content')

<div class="fh5co-hero">
<div class="fh5co-overlay"></div>
	<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/caring.jpg') }});">
		<div class="desc animate-box">
            <h2>{{ $ngodata->agency }}</h2>
        <span>{{ $ngodata->registration_number }}</span>
        <span><em><i class="icon-map"></i>{{ $ngodata->address }}</em></span>
		</div>
	</div>

</div>

@php
$contact_numbers = explode("|", $ngodata->contact_numbers);
$email = explode("|", $ngodata->email);
$fax = explode("|", $ngodata->fax);
$programs_and_services = explode("|", $ngodata->programs_and_services);
$service_types = explode("|", $ngodata->service_type);
$clientele = explode("|", $ngodata->clientele);
$locations = explode("|", $ngodata->locations);
@endphp

<div id="fh5co-portfolio">
	<div class="container">
        <h2>Programs And Services</h2>
		<div class="joblisting">
			<div class="row">
				<div class="col-sm-12 jobdesc">
                    @forelse($programs_and_services as $programs)
                    <p>{{$programs}}</p>
                    @empty
                    <p>NO DATA</p>
                    @endforelse
				</div>
			</div>
        </div>
        
        <h2>Service Delivery Mode</h2>
		<div class="joblisting">
			<div class="row">
				<div class="col-sm-12 jobdesc">
                    @forelse($service_types as $service)
                    <p>{{$service}}</p>
                    @empty
                    <p>NO DATA</p>
                    @endforelse
				</div>
			</div>
        </div>
        
        <h2>Clientele</h2>
		<div class="joblisting">
			<div class="row">
				<div class="col-sm-12 jobdesc">
                    @forelse($clientele as $client)
                    <p>{{$client}}</p>
                    @empty
                    <p>NO DATA</p>
                    @endforelse
				</div>
			</div>
        </div>

        <h2>Locations</h2>
		<div class="joblisting">
			<div class="row">
				<div class="col-sm-12 jobdesc">
                    @forelse($locations as $location)
                    <p>{{$location}}</p>
                    @empty
                    <p>NO DATA</p>
                    @endforelse
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
