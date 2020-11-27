@extends('layouts.master')

@section('title')
    IHSS - My Account
@endsection

@section('stylesheets')
    {{ Html::style(URL::asset('css/social-buttons.min.css')) }}
@endsection

@section('content')

@php
    $coverpic = !empty($userinfo->cover_photo_fname) ? $userinfo->cover_photo_fname : 'cover-photo.jpg';
    $coverphoto = url('/storage/cover_photos/'.$coverpic);
    $profilepic = !empty($userinfo->profile_photo_fname) ? $userinfo->profile_photo_fname : ($userinfo->gender == 'male' ? 'profile-male.png' : 'profile-female.png');
@endphp

<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ $coverphoto }});">
        <div class="desc animate-box">
            <img src="{{ url('/storage/profile_photos/'.$profilepic) }}" width=175 height=175 class="center-block img-circle">
            <span style="margin-bottom: 0;">{{ $userinfo->firstname.' '.$userinfo->lastname }}</span>
            <span>
                <a href="{{ $userinfo->facebook_url }}" target="_blank"><i class="icon-facebook-with-circle {{ empty($userinfo->facebook_url) ? 'hidden' : '' }}"></i></a>
                <a href="{{ $userinfo->twitter_url }}"><i class="icon-twitter-with-circle {{ empty($userinfo->twitter_url) ? 'hidden' : '' }}"></i></a>
                <a href="{{ $userinfo->instagram_url }}"><i class="icon-instagram-with-circle {{ empty($userinfo->instagram_url) ? 'hidden' : '' }}"></i></a>
            </span>
        </div>
    </div>
</div>

    <div id="fh5co-content-section" class="fh5co-section-gray">
      <div class="container">
        <div class="joblisting">
          <!-- tabs -->
          <div class="row">
              <div class="col-md-12">
                  <div class="">
                      <ul class="nav nav-tabs" role="tablist" id="example-one">
                          <li role="presentation" class="active">
                              <a href="#first" aria-controls="first" role="tab" data-toggle="tab">Overview</a>
                          </li>
                          <li role="presentation">
                              <a href="#second" aria-controls="second" role="tab" data-toggle="tab">Details About You</a>
                          </li>
                          <li role="presentation">
                              <a href="#third" aria-controls="third" role="tab" data-toggle="tab">Work &amp; Education</a>
                          </li>
                          <li role="presentation">
                              <a href="#fourth" aria-controls="fourth" role="tab" data-toggle="tab">Organization</a>
                          </li>
                          <a href="{{ route('user.myaccount.edit') }}" style="float:right" class="btn btn-warning btn-sm">Edit Profile</a>
                      </ul>
                      <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active" id="first">
                            <div class="row">
                              <div class="col-md-8 tp-l">
                                <h3>Organization</h3>
                                  @if(empty($organization))
                                    <h4>Not Specified</h4>
                                  @else
                                    @foreach($organization as $index => $org)
                                    @if($index > 0) @continue @endif
                                    <div class="tpl-inner">
                                      <h4>{{ $org['name'] }}</h4>
                                      <p>
                                        {{ $org['adrs'] }}
                                      </p>
                                    </div>
                                    @endforeach
                                  @endif
                                  <br>

                                  <h3>Work</h3>
                                  <div class="tpl-inner">
                                    @if(empty($userinfo->company))
                                      <h4>Not Specified</h4>
                                    @else
                                      <h4>{{ $userinfo->company }}</h4>
                                      <p>
                                        {{ $userinfo->company_adrs }}
                                        <br>
                                        {{ $userinfo->occupation }}
                                      </p>
                                    @endif
                                  </div>
                                  <br>

                                  <h3>Education</h3>
                                    <div class="tpl-inner">
                                      @if(empty($userinfo->college_name))
                                        <h4>College : Not Specified</h4>
                                      @else
                                        <h4>{{ $userinfo->college_name }}</h4>
                                        <p>
                                          {{ $userinfo->college_adrs }}
                                          <br>
                                          {{ $userinfo->college_course.' '.$userinfo->college_yr_grad }}
                                        </p>
                                      @endif
                                    </div>
                                    <div class="tpl-inner">
                                      @if(empty($userinfo->school_name))
                                        <h4>Highschool : Not Specified</h4>
                                      @else
                                        <h4>{{ $userinfo->school_name }}</h4>
                                        <p>
                                          {{ $userinfo->school_adrs }}
                                          <br>
                                          {{ $userinfo->school_yr_grad }}
                                        </p>
                                      @endif
                                    </div>
                                </div>
                                <div class="col-md-4 tp-r">
                                  <h3>Information</h3>
                                  <div class="tpl-inner">
                                    @if(empty($userinfo->birthday))
                                      <h4>Not Specified</h4>
                                    @else
                                      <h4>{{ $userinfo->birthday }}</h4>
                                    @endif
                                      <p>
                                        Birthday
                                      </p>

                                  </div>
                                  <div class="tpl-inner">
                                    @if(empty($userinfo->mobile_number))
                                      <h4>Not Specified</h4>
                                    @else
                                      <h4>{{ $userinfo->mobile_number }}</h4>
                                    @endif
                                      <p>
                                        Mobile
                                      </p>

                                  </div>
                                  <div class="tpl-inner">
                                    @if(empty($userinfo->gender))
                                      <h4>Not Specified</h4>
                                    @else
                                      <h4>{{ ucfirst($userinfo->gender) }}</h4>
                                    @endif
                                      <p>
                                        Gender
                                      </p>

                                  </div>
                                </div>
                              </div>
                          </div>
                          <div role="tabpanel" class="tab-pane" id="second">
                            <div class="row">
                                <div class="tp-l col-md-4">
                                  <div class="tpl-inner">
                                    <h4>About Me</h4>
                                    <p>
                                      @if(empty($userinfo->about_me))
                                        <h4>Not Specified</h4>
                                      @else
                                        {{ $userinfo->about_me }}
                                      @endif
                                    </p>
                                  </div>
                                  <div class="tpl-inner">
                                    <h4>
                                      {{ $userinfo->useraccount->email }}
                                    </h4>
                                    <p>
                                      Email address
                                    </p>
                                  </div>
                                  <div class="tpl-inner">
                                    <h4>
                                      @if(empty($userinfo->website))
                                        <h4>Not Specified</h4>
                                      @else
                                        <i><a href="{{ $userinfo->website }}">ihss.to/{{ $webstring }}</a></i>
                                      @endif
                                    </h4>
                                    <p>
                                      Website
                                    </p>
                                  </div>
                                </div>
                                <div class="col-md-8 tp-r">
                                  <div class="tpl-inner">
                                    <h4>
                                      @if(empty($userinfo->birthday))
                                        {{ 'Not Specified' }}
                                      @else
                                        {{ $userinfo->birthday }}
                                      @endif
                                    </h4>
                                    <p>
                                      Birthday
                                    </p>
                                  </div>
                                  <div class="tpl-inner">
                                    <h4>
                                      @if(empty($userinfo->mobile_number))
                                        <h4>Not Specified</h4>
                                      @else
                                        {{ $userinfo->mobile_number }}</h4>
                                      @endif
                                    <p>
                                      Mobile
                                    </p>
                                  </div>
                                  <div class="tpl-inner">
                                    <h4>
                                      @if(empty($userinfo->gender))
                                        <h4>Not Specified</h4>
                                      @else
                                        {{ $userinfo->gender }}</h4>
                                      @endif
                                    <p>
                                      Gender
                                    </p>
                                  </div>
                                  <div class="tpl-inner">
                                    <h4>
                                      @if(empty($userinfo->address))
                                        <h4>Not Specified</h4>
                                      @else
                                        {{ $userinfo->address }}</h4>
                                      @endif
                                    <p>
                                      Address
                                    </p>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div role="tabpanel" class="tab-pane" id="third">
                            <div class="tp-l">
                                <h3>Work</h3>
                                <div class="tpl-inner">
                                  @if(empty($userinfo->company))
                                    <h4>Not Specified</h4>
                                  @else
                                    <h4>{{ $userinfo->company }}</h4>
                                    <p>
                                      {{ $userinfo->company_adrs }}
                                      <br>
                                      {{ $userinfo->occupation }}
                                    </p>
                                  @endif
                                </div>
                                <br>
                                <h3>Education</h3>
                                  <div class="tpl-inner">
                                    @if(empty($userinfo->college_name))
                                      <h4>College : Not Specified</h4>
                                    @else
                                      <h4>{{ $userinfo->college_name }}</h4>
                                      <p>
                                        {{ $userinfo->college_adrs }}
                                        <br>
                                        {{ $userinfo->college_course.' '.$userinfo->college_yr_grad }}
                                      </p>
                                    @endif
                                  </div>
                                  <div class="tpl-inner">
                                    @if(empty($userinfo->school_name))
                                      <h4>Highschool : Not Specified</h4>
                                    @else
                                      <h4>{{ $userinfo->school_name }}</h4>
                                      <p>
                                        {{ $userinfo->school_adrs }}
                                        <br>
                                        {{ $userinfo->school_yr_grad }}
                                      </p>
                                    @endif
                                  </div>
                              </div>
                          </div>
                          <div role="tabpanel" class="tab-pane" id="fourth">
                            <div class="tp-l">
                                @if(empty($organization))
                                  <h4>Not Specified</h4>
                                @else
                                  @foreach($organization as $org)
                                  <div class="tpl-inner">
                                    <h4>{{ $org['name'] }}</h4>
                                    <p>
                                      {{ $org['adrs'] }}
                                    </p>
                                  </div>
                                  @endforeach
                                @endif
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end tabs -->
        </div>
      </div>
    </div>

@section('scripts')
    <script type="text/javascript">
        tabSlide();

        $('.nav-tabs li').on('shown.bs.tab', function() {
            $('#magic-line').remove();
            tabSlide();
        });

        function tabSlide() {
            $("#example-one").append("<li id='magic-line'></li>");
                var $magicLine = $("#magic-line");
                $magicLine
                  .width($(".active").width())
                  .css("left", $(".active a").position().left)
                  .data("origLeft", $magicLine.position().left)
                  .data("origWidth", $magicLine.width());
                $("#example-one li").find("a").hover(function() {
                  $el = $(this);
                  leftPos = $el.position().left;
                  newWidth = $el.parent().width();
                  $magicLine.stop().animate({
                    left: leftPos,
                    width: newWidth
                  });
                }, function() {
                  $magicLine.stop().animate({
                    left: $magicLine.data("origLeft"),
                    width: $magicLine.data("origWidth")
                  });
            });

        }
  </script>
@endsection

@section('scripts')
<script type="text/javascript">
    tabSlide();

    $('.nav-tabs li').on('shown.bs.tab', function() {
        $('#magic-line').remove();
        tabSlide();
    });

    function tabSlide() {
        $("#example-one").append("<li id='magic-line'></li>");
            var $magicLine = $("#magic-line");
            $magicLine
              .width($(".active").width())
              .css("left", $(".active a").position().left)
              .data("origLeft", $magicLine.position().left)
              .data("origWidth", $magicLine.width());
            $("#example-one li").find("a").hover(function() {
              $el = $(this);
              leftPos = $el.position().left;
              newWidth = $el.parent().width();
              $magicLine.stop().animate({
                left: leftPos,
                width: newWidth
              });
            }, function() {
              $magicLine.stop().animate({
                left: $magicLine.data("origLeft"),
                width: $magicLine.data("origWidth")
              });
        });

    }
</script>
{{ Html::script(asset('js/kendo-datetimepicker.js')) }}
@endsection

@stop
