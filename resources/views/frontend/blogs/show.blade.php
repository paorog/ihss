@extends('layouts.master')

@section('title')
    IHSS - Blogs
@endsection

@section('content')

<div class="fh5co-hero">
		<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/blog.jpg') }});">
				<div class="desc animate-box">
					<h2>Our <strong>Blog &amp; News</strong></h2>
					<span>Read. Learn. Share</span>
					<span><a class="btn btn-primary btn-lg" href="{{ route('user.blogs.create') }}">Submit a Blog</a></span>
				</div>
			</div>
		</div>

		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
        <div class="row row-bottom-padded-md">
  				@foreach($blogs as $index => $blog)
  					<div class="col-lg-4 col-md-4 col-sm-6">
  						<div class="fh5co-blog animate-box">
  							<a href="{{ route('user.blogs.single',$blog->blogid) }}"><img class="img-responsive blog-thumb" src="{{ asset('storage/blogbanners/'.$blog->thumbfname) }}" alt=""></a>
  							<div class="blog-text">
  								<div class="prod-title">
  									<h3><a href="#">{{ $blog->title }}</a></h3>
  									<span class="posted_by">{{ $blog->user->username }}</span>
                    @php
            					$currentDate = new Carbon\Carbon();
            					$postDate = $blog->created_at;
            					$diff = $postDate->diffForHumans($currentDate);
            				@endphp
  									<span class="comment"><a href="">{{ date_format($postDate,'Y-m-d') == date('Y-m-d') ? $diff : date_format($postDate,'Y-m-d') }}</span>
  									<p>{!! str_limit(nl2br($blog->content),150) !!}</p>
  									<p><a href="{{ route('user.blogs.single',$blog->blogid) }}">Read More...</a></p>
  								</div>
  							</div>
  						</div>
  					</div>

            @if($index == 2)
              <div class="clearfix visible-sm-block"></div>
            @endif
  				@endforeach
        </div>
				<br>

        {{ $blogs->render() }}

			</div>
		</div>

@stop
