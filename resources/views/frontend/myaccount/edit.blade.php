@extends('layouts.master')

@section('title')
    IHSS - My Account
@endsection

@section('stylesheets')
    {{ Html::style(URL::asset('css/social-buttons.min.css')) }}
    {{ Html::style(URL::asset('css/kendo/kendo.common-material.min.css')) }}
    {{ Html::style(URL::asset('css/kendo/kendo.material.min.css')) }}
    {{ Html::style(URL::asset('css/kendo/kendo.material.mobile.min.css')) }}
    {{ Html::style(URL::asset('css/custom.css')) }}
@endsection

@section('content')

@php
    $coverpic = !empty($userinfo->cover_photo_fname) ? $userinfo->cover_photo_fname : 'cover-photo.jpg';
    $profilepic = !empty($userinfo->profile_photo_fname) ? $userinfo->profile_photo_fname : ($userinfo->gender == 'male' ? 'profile-male.png' : 'profile-female.png');
@endphp

<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url( {{ asset('storage/cover_photos/'.$coverpic) }} );">
        <div class="desc animate-box">
            <img src="{{ asset('storage/profile_photos/'.$profilepic) }}" width=175 height=175 class="center-block img-circle">
            <span style="margin-bottom: 0;">{{ $userinfo->firstname.' '.$userinfo->lastname }}</span>
            <span>
                <a href="{{ $userinfo->facebook_url }}" target="_blank"><i class="icon-facebook-with-circle {{ empty($userinfo->facebook_url) ? 'hidden' : '' }}"></i></a>
                <a href="{{ $userinfo->twitter_url }}"><i class="icon-twitter-with-circle {{ empty($userinfo->twitter_url) ? 'hidden' : '' }}"></i></a>
                <a href="{{ $userinfo->instagram_url }}"><i class="icon-instagram-with-circle {{ empty($userinfo->instagram_url) ? 'hidden' : '' }}"></i></a>
            </span>
        </div>
    </div>
</div>

<div id="fh5co-contact" class="fh5co-section-gray">
    <div class="container">
        <div class="joblisting">
<!-- tabs -->
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <ul class="nav nav-tabs" role="tablist" id="example-one">
                            <li role="presentation" class="active">
                                <a href="#first" aria-controls="first" role="tab" data-toggle="tab">Details About You</a>
                            </li>
                            <li role="presentation">
                                <a href="#second" aria-controls="second" role="tab" data-toggle="tab">Work &amp; Education</a>
                            </li>
                            <li role="presentation">
                                <a href="#third" aria-controls="third" role="tab" data-toggle="tab">Organization</a>
                            </li>
                            <a href="{{ route('user.myaccount.show') }}" style="float:right" class="btn btn-danger btn-sm">Cancel Edit</a>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="first">
                            {{ Form::open(array('route' => 'user.myaccount.update.aboutme', 'method' => 'post', 'files' => true)) }}
                                {{ csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" name="firstname" value="{{ $userinfo->firstname }}">
                                            </div>
                                            @if($errors->has('firstname'))
                                            <span class="help-block">
                                                <strong class="error-foreground">{{ $errors->first('firstname') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Middle Name</label>
                                              <input type="text" class="form-control" placeholder="Middle Name" name="middlename" value="{{ $userinfo->middlename }}">
                                          </div>
                                          @if($errors->has('middlename'))
                                          <span class="help-block">
                                              <strong class="error-foreground">{{ $errors->first('middlename') }}</strong>
                                          </span>
                                          @endif
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Last Name</label>
                                              <input type="text" class="form-control" placeholder="Last Name" name="lastname" value="{{ $userinfo->lastname }}">
                                          </div>
                                          @if($errors->has('lastname'))
                                          <span class="help-block">
                                              <strong class="error-foreground">{{ $errors->first('lastname') }}</strong>
                                          </span>
                                          @endif
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group {{ !empty($userinfo->profile_photo_fname) ? 'text-center' : '' }}">
                                              <label>Profile Photo (1:1)</label>
                                              @if(empty($userinfo->profile_photo_fname))
                                              <input type="file" name="profile_photo" class="form-control">
                                              @else
                                              <img src="{{ url('/storage/profile_photos/'.$userinfo->profile_photo_fname) }}" height=175 class="center-block img-circle" />
                                              <a href="{{ route('user.myaccount.remove.profilephoto') }}" class="btn btn-xs btn-danger">remove</a>
                                              @endif
                                          </div>
                                          @if($errors->has('profile_photo'))
                                          <span class="help-block">
                                              <strong class="error-foreground">{{ $errors->first('profile_photo') }}</strong>
                                          </span>
                                          @endif
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group {{ !empty($userinfo->cover_photo_fname) ? 'text-center' : '' }}">
                                              <label>Cover Photo (16:9)</label>
                                              @if(empty($userinfo->cover_photo_fname))
                                              <input type="file" name="cover_photo" class="form-control">
                                              @else
                                              <img src="{{ url('/storage/cover_photos/'.$userinfo->cover_photo_fname) }}" height=175 class="center-block img-circle" />
                                              <a href="{{ route('user.myaccount.remove.coverphoto') }}" class="btn btn-xs btn-danger">remove</a>
                                              @endif
                                          </div>
                                          @if($errors->has('cover_photo'))
                                          <span class="help-block">
                                              <strong class="error-foreground">{{ $errors->first('cover_photo') }}</strong>
                                          </span>
                                          @endif
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Address</label>
                                              <input type="text" class="form-control" placeholder="Address" name="address" value="{{ $userinfo->address }}">
                                          </div>
                                          @if($errors->has('address'))
                                          <span class="help-block">
                                              <strong class="error-foreground">{{ $errors->first('address') }}</strong>
                                          </span>
                                          @endif
                                      </div>
                                      <div class="clearfix"></div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Facebook</label>
                                              <input type="text" class="form-control" placeholder="Facebook Url" name="facebook_url" value="{{ $userinfo->facebook_url }}">
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Twitter</label>
                                              <input type="text" class="form-control" placeholder="Twitter Url" name="twitter_url" value="{{ $userinfo->twitter_url }}">
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Instagram</label>
                                              <input type="text" class="form-control" placeholder="Instagram Url" name="instagram_url" value="{{ $userinfo->instagram_url }}">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Birthday</label>
                                              <div class="row">
                                                  @if(!empty($userinfo->birthday))
                                                  <div class="col-md-12">
                                                      <input placeholder="Selected date" type="text" id="datepicker-birthday" name="birthday" value="{{ $userinfo->birthday }}">
                                                  </div>
                                                  @if($errors->has('birthday'))
                                                  <span class="help-block">
                                                      <strong class="error-foreground">{{ $errors->first('birthday') }}</strong>
                                                  </span>
                                                  @endif
                                                  @else
                                                  <div class="col-md-12">
                                                      <div id="app">
                                                          <dpicker-bday></dpicker-bday>
                                                      </div>
                                                  </div>
                                                  @endif
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Gender</label>
                                              <select class="form-control" id="gender" name="gender" placeholder="Gender">
                                                  <option value="">Select gender</option>
                                                  <option value="male" {{ $userinfo->gender == 'male' ? 'selected' : '' }}>Male</option>
                                                  <option value="female" {{ $userinfo->gender == 'female' ? 'selected' : '' }}>Female</option>
                                              </select>
                                          </div>
                                          @if($errors->has('gender'))
                                          <span class="help-block">
                                              <strong class="error-foreground">{{ $errors->first('gender') }}</strong>
                                          </span>
                                          @endif
                                      </div>
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Mobile</label>
                                              <input type="text" class="form-control" placeholder="Number" name="mobile_number" value="{{ $userinfo->mobile_number }}">
                                          </div>
                                          @if($errors->has('mobile_number'))
                                          <span class="help-block">
                                              <strong class="error-foreground">{{ $errors->first('mobile_number') }}</strong>
                                          </span>
                                          @endif
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label>About Me</label>
                                              <textarea name="about_me" class="form-control" id="" cols="30" rows="7" placeholder="Write about yourself">{{ $userinfo->about_me }}</textarea>
                                          </div>
                                          @if($errors->has('about_me'))
                                          <span class="help-block">
                                              <strong class="error-foreground">{{ $errors->first('about_me') }}</strong>
                                          </span>
                                          @endif
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <input type="submit" value="Save Changes" class="btn btn-primary">
                                          </div>
                                      </div>
                                  </div>
                              {{ Form::close() }}
                        </div>
                        <div role="tabpanel" class="tab-pane" id="second">
                            <div class="row">
                                <div class="tp-l col-md-12">
                                    <h3>Work</h3>
                                    {{ Form::open(array('route' => 'user.myaccount.update.workdetails', 'method' => 'post')) }}
                                    {{ csrf_field() }}
                                        <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>Company Name</label>
                                                  <input type="text" class="form-control" placeholder="Company Name" name="company" value="{{ !empty(old('company')) ? old('company') : $userinfo->company }}">
                                              </div>
                                              @if($errors->has('company'))
                                              <span class="help-block">
                                                  <strong class="error-foreground">{{ $errors->first('company') }}</strong>
                                              </span>
                                              @endif
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>Position</label>
                                                  <input type="text" class="form-control" placeholder="Position" name="position" value="{{ !empty(old('position')) ? old('position') : $userinfo->occupation }}">
                                              </div>
                                              @if($errors->has('position'))
                                              <span class="help-block">
                                                  <strong class="error-foreground">{{ $errors->first('position') }}</strong>
                                              </span>
                                              @endif
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>Address</label>
                                                  <input type="text" class="form-control" placeholder="Address" name="company-address" value="{{ !empty(old('company-address')) ? old('position') : $userinfo->company_adrs }}">
                                              </div>
                                              @if($errors->has('company-address'))
                                              <span class="help-block">
                                                  <strong class="error-foreground">{{ $errors->first('company-address') }}</strong>
                                              </span>
                                              @endif
                                          </div>
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <input type="submit" value="Save Changes" class="btn btn-primary">
                                              </div>
                                          </div>
                                        </div>
                                    {{ Form::close() }}
                                </div>
                                <div class="tp-l col-md-12">
                                    <h3>Tertiary</h3>
                                    {{ Form::open(array('route' => 'user.myaccount.update.collegedetails', 'method' => 'post')) }}
                                    {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>University/College Name</label>
                                                    <input type="text" class="form-control" placeholder="College/University" name="college-university" value="{{ !empty(old('college-university')) ? old('college-university') : $userinfo->college_name }}">
                                                </div>
                                                @if($errors->has('college-university'))
                                                <span class="help-block">
                                                    <strong class="error-foreground">{{ $errors->first('college-university') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Course</label>
                                                    <input type="text" class="form-control" placeholder="Course" name="course" value="{{ !empty(old('course')) ? old('course') : $userinfo->college_course }}">
                                                </div>
                                                @if($errors->has('course'))
                                                <span class="help-block">
                                                    <strong class="error-foreground">{{ $errors->first('course') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Year Graduated</label>
                                                    <input type="text" class="form-control" placeholder="Year Graduated (eg: 2011)" name="col-yr-gr" value="{{ !empty(old('col-yr-gr')) ? old('col-yr-gr') : $userinfo->college_yr_grad }}">
                                                </div>
                                                @if($errors->has('col-yr-gr'))
                                                <span class="help-block">
                                                    <strong class="error-foreground">{{ $errors->first('col-yr-gr') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" placeholder="Address" name="college-address" value="{{ !empty(old('college-address')) ? old('address') : $userinfo->college_adrs }}">
                                                </div>
                                                @if($errors->has('college-address'))
                                                <span class="help-block">
                                                    <strong class="error-foreground">{{ $errors->first('college-address') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Save Changes" class="btn btn-primary">
                                                </div>
                                            </div>
                                        </div>
                                    {{ Form::close() }}
                                </div>
                                <div class="tp-l col-md-12">
                                    <h3>High School</h3>
                                    {{ Form::open(array('route' => 'user.myaccount.update.schooldetails', 'method' => 'post')) }}
                                    {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>School Name</label>
                                                    <input type="text" class="form-control" placeholder="School Name" name="highschool" value="{{ !empty(old('highschool')) ? old('highschool') : $userinfo->school_name }}">
                                                </div>
                                                @if($errors->has('highschool'))
                                                <span class="help-block">
                                                    <strong class="error-foreground">{{ $errors->first('highschool') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Year Graduated</label>
                                                    <input type="text" class="form-control" placeholder="Year Graduated (eg: 2003)" name="schl-yr-gr" value="{{ !empty(old('schl-yr-gr')) ? old('schl-yr-gr') : $userinfo->school_yr_grad }}">
                                                </div>
                                                @if($errors->has('schl-yr-gr'))
                                                <span class="help-block">
                                                    <strong class="error-foreground">{{ $errors->first('schl-yr-gr') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" placeholder="Address" name="school-address" value="{{ !empty(old('school-address')) ? old('school-address') : $userinfo->school_adrs }}">
                                                </div>
                                                @if($errors->has('school-address'))
                                                <span class="help-block">
                                                    <strong class="error-foreground">{{ $errors->first('school-address') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Save Changes" class="btn btn-primary">
                                                </div>
                                            </div>
                                        </div>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="third">
                            <div class="tp-l">
                                @if(isset($organization))
                                    @foreach($organization as $index => $org)
                                        <div class="tpl-inner">
                                            <h4>{{ $org['name'] }}</h4>
                                            <p>{{ $org['adrs'] }}</p>
                                            <a href="{{ route('user.myaccount.remove.organization',$index) }}">delete</a>
                                        </div>
                                    @endforeach
                                @endif
                                <br>
                                {{ Form::open(array('route' => 'user.myaccount.update.organization', 'method' => 'post')) }}
                                {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Organization Name</label>
                                                <input type="text" class="form-control" name="org" placeholder="Organization Name">
                                            </div>
                                            @if($errors->has('org'))
                                            <span class="help-block">
                                                <strong class="error-foreground">{{ $errors->first('org') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="org-adrs" placeholder="Address">
                                            </div>
                                            @if($errors->has('org-adrs'))
                                            <span class="help-block">
                                                <strong class="error-foreground">{{ $errors->first('org-adrs') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Add Changes" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                {{ Form::close() }}
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

@section('vue')
  {{ Html::script(asset('js/app.js')) }}
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
