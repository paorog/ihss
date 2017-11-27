@extends('layouts.master')

@section('title')
    IHSS - Job Postings
@endsection

@section('stylesheets')
    {{ Html::style(URL::asset('css/froala-editor/codemirror.min.css')) }}
    {{ Html::style(URL::asset('css/froala-editor/editor.pkgd.min.css')) }}
    {{ Html::style(URL::asset('css/froala-editor/style.min.css')) }}
@endsection

@section('content')

	<div class="fh5co-hero">
      <div class="fh5co-overlay"></div>
      <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/paj.jpg') }});">
          <div class="desc animate-box">
              <h2>Post a Job</h2>
              <span>Help others find their job in a snap</span>
          </div>
      </div>

  </div>
    <div id="fh5co-contact" class="fh5co-section-gray">
         <div class="container">
             <div class="post-job">
                 {{ Form::open(array('route' => 'user.jobpostings.create.post', 'method' => 'post', 'files' => true)) }}
                     {{ csrf_field() }}
                     <div class="row">
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <label>Job Title</label>
                                 <input name="jobtitle" type="text" class="form-control" placeholder="Job Title" value="{{ old('jobtitle') }}">
                             </div>
                             @if($errors->has('jobtitle'))
                             <span class="help-block">
                                 <strong class="error-foreground">{{ $errors->first('jobtitle') }}</strong>
                             </span>
                             @endif
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <label>Company Name</label>
                                 <input name="compname" type="text" class="form-control" placeholder="Company" value="{{ old('company') }}">
                             </div>
                             @if($errors->has('compname'))
                             <span class="help-block">
                                 <strong class="error-foreground">{{ $errors->first('compname') }}</strong>
                             </span>
                             @endif
                         </div>
                     </div>
                   <div class="row">
                       <div class="col-sm-6">
                           <div class="form-group">
                               <label>Company Address</label>
                               <input name="compadrs" type="text" class="form-control" placeholder="Address" value="{{ old('compadrs') }}">
                           </div>
                           @if($errors->has('compadrs'))
                           <span class="help-block">
                               <strong class="error-foreground">{{ $errors->first('compadrs') }}</strong>
                           </span>
                           @endif
                       </div>
                       <div class="col-sm-6">
                           <div class="form-group">
                               <label>Company Logo</label>
                               {!! Form::file('logofile', array('class' => 'form-control')) !!}
                           </div>
                           @if($errors->has('logofile'))
                           <span class="help-block">
                               <strong class="error-foreground">{{ $errors->first('logofile') }}</strong>
                           </span>
                           @endif
                       </div>
                   </div>
                   <div class="form-group">
                       <label>Job Description</label>
                       <textarea name="jobdesc" class="post-desc">{{ old('jobdesc') }}</textarea>
                       @if($errors->has('jobdesc'))
                       <span class="help-block">
                           <strong class="error-foreground">{{ $errors->first('jobdesc') }}</strong>
                       </span>
                       @endif
                   </div>
                   <input type="submit" value="Submit Job" class="btn btn-primary">
               {{ Form::close() }}
            </div>
         </div>
    </div>

@stop

@section('scripts')
    {{ Html::script(URL::asset('js/jobposting/codemirror.min.js')) }}
    {{ Html::script(URL::asset('js/jobposting/xml.min.js')) }}
    {{ Html::script(URL::asset('js/jobposting/editor.pkgd.min.js')) }}
    <script> $(function() { $('.post-desc').froalaEditor({heightMin: 300}) }); </script>
@endsection
