@extends('layouts.master')

@section('title')
    IHSS - Post a Blog
@endsection

@section('stylesheets')
    {{ Html::style(URL::asset('css/froala-editor/codemirror.min.css')) }}
    {{ Html::style(URL::asset('css/froala-editor/editor.pkgd.min.css')) }}
    {{ Html::style(URL::asset('css/froala-editor/style.min.css')) }}
@endsection

@section('content')
	<div class="fh5co-hero">
		<div class="fh5co-overlay"></div>
		<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/blog.jpg') }});">
			<div class="desc animate-box">
			<h2>Post a Blog</h2>
			<span>Post something that may inspire others</span>
			</div>
		</div>
	</div>

	<div id="fh5co-contact" class="fh5co-section-gray">
		<div class="container">
			<div class="post-job">
			{{ Form::open(array('route' => 'user.blogs.create.post', 'method' => 'post', 'files' => true)) }}
				{{ csrf_field() }}
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Title</label>
								<input type="text" class="form-control" placeholder="Blog Title" id="blogTitle" name="blogTitle">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Banner</label>
								<input type="file" class="form-control" id="blogBanner" name="blogBanner">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Thumbnail</label>
								<input type="file" class="form-control" id="blogThumbnail" name="blogThumbnail">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Category</label>
								<select class="form-control" id="blogCategory" name="blogCategory">
									<option value="0">
										Unclassified
									</option>
									@foreach($categories as $cat)
										<option value="{{ $cat->categoryid }}">
											{{ $cat->name }}
										</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Privacy</label>
								<select class="form-control" id="blogPrivacy" name="blogPrivacy">
									<option value="BP001">
										Private Blog
									</option>
									<option value="BP002">
										Public Blog
									</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Content</label>
						<textarea class="post-desc" id="blogContent" name="blogContent"></textarea>
					</div>
					<input type="submit" value="Submit Blog" class="btn btn-primary">
				{{ Form::close()}}
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
