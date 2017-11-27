@extends('layouts.master')

@section('title')
    IHSS - Programs & Services
@endsection

@section('content')
<div class="fh5co-hero">
<div class="fh5co-overlay"></div>
	<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/sw.jpg') }});">
		<div class="desc animate-box">
			<h2>Programs & Services</h2>
			<span>Search a program or service that suites you.</span>
		</div>
	</div>

</div>

<div id="fh5co-portfolio">
	<div class="container">

		<div class="row row-bottom-padded-md">

			<div class="pull-right col-md-3 search-side">
				<div class="prog-side">
					<form>
						<div class="form-group">
							<label>Search</label>
							<input type="text" class="form-control" id="search-program" placeholder="keywords here...">

						</div>
					</form>
					<div>
							<div class="form-group">
              <select class="form-control" id="search-by">
                  <option value="">Search By</option>
                  <option value="field_office">Field Office</option>
                  <option value="center_name">Center Name</option>
                  <option value="center_adrs">Center Address</option>
                  <option value="center_head">Center Head</option>
                  <option value="accredited">Accredited</option>
              </select>
              </div>
              <!--
								<label>Filter</label>
								<div class="checkbox icheck">
						            <label>
						             	<input type="checkbox"> Filter 1
						            </label>
						         </div>
						         <div class="checkbox icheck">
						            <label>
						             	<input type="checkbox"> Filter 1
						            </label>
						         </div>
						         <div class="checkbox icheck">
						            <label>
						             	<input type="checkbox"> Filter 1
						            </label>
						         </div>
						         <div class="checkbox icheck">
						            <label>
						             	<input type="checkbox"> Filter 1
						            </label>
						         </div>
						         <div class="checkbox icheck">
						            <label>
						             	<input type="checkbox"> Filter 1
						            </label>
						         </div>
						         <div class="checkbox icheck">
						            <label>
						             	<input type="checkbox"> Filter 1
						            </label>
						         </div>
							</div>
						</form> -->
					</div>
				</div>
			</div>
			<div class="col-md-9 pull-left" id="programservices">

        @if(count($programservices) > 0)
            @foreach($programservices as $program)

            <div class="proglisting">
    					<div class="row">
    						<div class="col-sm-9">
    							<div class="row">
    								<div class="col-sm-3 logo-prog">
    									<img src="{{ URL::asset('images/caring.jpg') }}" class="img-responsive center-block">
    								</div>
    								<div class="col-sm-9">
    									<div class="title-prog">
    										<h3>{{ $program->center_name }}</h3>
    										<p>{{ $program->accredited }}</p>
    										<p><em><i class="icon-map"></i>{{ $program->center_adrs }}</em></p>
    									</div>
    								</div>
    							</div>
    						</div>
    						<div class="col-sm-3 btn-prog">
    							<p class="text-center">
    								<a href="{{ route('programs.services.single') }}" class="footer-btn blu-btn" title="">View</a>
    							</p>
    						</div>
    					</div>
    				</div>

          @endforeach
      @else

      <div class="proglisting">
          <h2><strong>No results found</strong></h2>
      </div>

      @endif


      {{ $programservices->render() }}

      </div>
		</div>
	</div>
</div>

@section('scripts')
    {{ Html::script(URL::asset('js/iCheck/icheck.min.js')) }}
    {{ Html::script(URL::asset('js/img-upload.js')) }}
    {{ Html::script(URL::asset('js/registration/index.js')) }}
    {{ Html::script(URL::asset('js/programservices/filter.js')) }}
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
@endsection

@stop
