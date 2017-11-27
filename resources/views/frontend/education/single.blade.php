@extends('layouts.master')

@section('title')
    IHSS - {{ $ps_title }}
@endsection

@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/TrainingDevelopment.jpg') }});">
		<div class="desc animate-box">
			<h2>Volunteer Recruitment Officer</h2>
			<span>Red Cross PH</span>
		</div>
	</div>

</div>

<div id="fh5co-content-section" class="fh5co-section-gray">
	<div class="container">
		<div class="joblisting">
			<div class="row">
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-12">
							<div class="title-job">
								<h3>Training 1</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 loc-job">
					<p><i class="icon-map"></i> Shangrila Hotel Manila</p>
				</div>
				<div class="col-sm-4 btn-job">
					<p>
						Date: Oct 21 - Oct 23 2017
						<br>
						Time: 8:00AM - 5:00PM
					</p>
				</div>
			</div>
		</div>
		<div class="joblisting">
			<div class="row">
				<div class="col-sm-12 jobdesc">
					<h4><strong>Training Details</strong></h4>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec viverra urna. Nulla facilisi. Cras euismod, ex sollicitudin ultrices venenatis, velit nisl interdum urna, auctor suscipit elit purus in nibh. Etiam iaculis diam urna, vitae cursus enim pharetra nec. Cras ultrices, tortor vel tincidunt rutrum, nisl magna pharetra massa, quis tristique tellus velit sit amet neque. Vestibulum pharetra velit id imperdiet semper. Nam lacus tellus, porttitor vel fringilla et, dignissim et lectus. Pellentesque vitae mi varius sem viverra pellentesque. Cras id mi elit. Quisque eget lorem eu velit mollis tempus. Aliquam vitae diam rutrum, bibendum tellus eget, elementum ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum maximus est quis lobortis. Integer id sem mi.
					</p>

					<p>
						Sed mollis, tellus sit amet hendrerit pharetra, risus enim consequat metus, vitae ultrices ligula nulla sed tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus faucibus id mi quis placerat. Donec at neque mollis sapien laoreet luctus. Integer a leo sit amet dolor tempus dictum eget euismod tellus. Duis mattis accumsan dapibus. Nunc pulvinar, felis at condimentum aliquet, tortor felis molestie ipsum, at tincidunt tortor purus quis augue. Mauris imperdiet libero sit amet dui aliquam eleifend. Nullam ultrices nunc dolor, id tristique mi fermentum luctus.
					</p>

					<p>
						Sed sodales laoreet mi vel commodo. Vivamus sit amet dictum mi. Integer eu enim ipsum. Sed euismod bibendum ante sed maximus. Curabitur et metus sit amet eros euismod scelerisque. Praesent eros augue, varius ac consequat in, fringilla ut orci. Cras vitae posuere orci. Sed id ullamcorper eros. Donec auctor faucibus eros, in rhoncus felis lacinia vel. Nulla pellentesque augue vitae velit venenatis semper. Vivamus quam felis, porta vitae malesuada eu, viverra id diam. Vestibulum dignissim est quis mollis consectetur. Ut posuere, odio et pulvinar blandit, sapien elit dignissim ipsum, et euismod lectus mauris vitae massa. Curabitur at lectus quis eros hendrerit convallis.
					</p>


					<form class="apply-training">
						<div class="row">
							<div class="col-md-6">
								<div class="train">
									<h4><strong>Apply for this Training</strong></h4>
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
												<input type="submit" value="Apply" class="btn btn-primary">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
