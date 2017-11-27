@extends('layouts.master')

@section('title')
    IHSS - My Account
@endsection

@section('stylesheets')
    {{ Html::style(URL::asset('resources/assets/css/AdminLTE.min.css')) }}
    {{ Html::style(URL::asset('resources/assets/css/skins/skin-red.min.css')) }}
@endsection


@section('content')
<div class="fh5co-hero">
  <div class="fh5co-overlay"></div>
  <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/TrainingDevelopment.jpg') }});">
    <div class="desc animate-box">
      <h2><strong>Continuing  </strong> Professional Education</h2>
      <span>Far far away, behind the word mountains</span>
    </div>
  </div>

</div>

<div id="fh5co-content-section" class="fh5co-section-gray">
  <div class="container">
    <div class="joblisting">
      <div class="row">
        <div class="col-sm-5">
          <div class="row">
            <div class="col-sm-12">
              <div class="title-job">
                <h3>Training 1</h3>
                <p>
                  Date: Oct 21 - Oct 23 2017
                  <br>
                  Time: 8:00AM - 5:00PM
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 loc-job">
          <p><i class="icon-map"></i> Shangrila Hotel Manila</p>
        </div>
        <div class="col-sm-3 btn-job">
          <p class="text-center">
            <a href="{{ route('professional.education.single') }}" class="footer-btn blu-btn" title="">Apply</a>
          </p>
        </div>
      </div>
    </div>
    <div class="joblisting">
      <div class="row">
        <div class="col-sm-5">
          <div class="row">
            <div class="col-sm-12">
              <div class="title-job">
                <h3>Training 2</h3>
                <p>
                  Date: Oct 21 - Oct 23 2017
                  <br>
                  Time: 8:00AM - 5:00PM
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 loc-job">
          <p><i class="icon-map"></i> Shangrila Hotel Manila</p>
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
        <div class="col-sm-5">
          <div class="row">
            <div class="col-sm-12">
              <div class="title-job">
                <h3>Training 3</h3>
                <p>
                  Date: Oct 21 - Oct 23 2017
                  <br>
                  Time: 8:00AM - 5:00PM
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 loc-job">
          <p><i class="icon-map"></i> Shangrila Hotel Manila</p>
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
        <div class="col-sm-5">
          <div class="row">
            <div class="col-sm-12">
              <div class="title-job">
                <h3>Training 4</h3>
                <p>
                  Date: Oct 21 - Oct 23 2017
                  <br>
                  Time: 8:00AM - 5:00PM
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 loc-job">
          <p><i class="icon-map"></i> Shangrila Hotel Manila</p>
        </div>
        <div class="col-sm-3 btn-job">
          <p class="text-center">
            <a href="#" class="footer-btn blu-btn" title="">Apply</a>
          </p>
        </div>
      </div>
    </div>


    <br>
    <ul class="pager">
        <li class="previous disabled"><a href="#">&larr; Previous</a></li>
        <li class="next"><a href="#">Next &rarr;</a></li>
    </ul>
  </div>
</div>

@section('scripts')
    {{ Html::script(URL::asset('resources/assets/js/adminlte.min.js')) }}
@endsection

@stop
