@extends('layouts.master')

@section('title')
    IHSS - Forum Single
@endsection

@section('stylesheets')
	{{ Html::style(URL::asset('css/froala-editor/codemirror.min.css')) }}
	{{ Html::style(URL::asset('css/froala-editor/editor.pkgd.min.css')) }}
	{{ Html::style(URL::asset('css/froala-editor/style.min.css')) }}
  {{ Html::style(URL::asset('css/custom.css')) }}
@endsection

@section('content')

<div id="fh5co-contact" class="animate-box">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="forum-sub-title">
					<h3>Metaphora : Short story of an egg.</h3>
					<p>September 7, 2017</p>
				</div>
				<ul id="comments-list" class="comments-list">
					<li>
						<div class="comment-main-level">
							<!-- Avatar -->
							<div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
							<!-- Contenedor del Comentario -->
							<div class="comment-box">
								<div class="comment-head">
									<h6 class="comment-name by-author"><a href="#">Agustin Ortiz</a></h6>
									<span>10 minutes ago</span>
									<i class="fa fa-reply"></i>
								</div>
								<div class="comment-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
								</div>
							</div>
						</div>
						<!-- Respuestas de los comentarios -->
						<ul class="comments-list reply-list">
							<li>
								<!-- Avatar -->
								<div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
								<!-- Contenedor del Comentario -->
								<div class="comment-box">
									<div class="comment-head">
										<h6 class="comment-name"><a href="#">Lorena Rojero</a></h6>
										<span>10 minutes ago</span>
									</div>
									<div class="comment-content">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
									</div>
								</div>
							</li>

							<li>
								<!-- Avatar -->
								<div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
								<!-- Contenedor del Comentario -->
								<div class="comment-box">
									<div class="comment-head">
										<h6 class="comment-name by-author"><a href="#">Agustin Ortiz</a></h6>
										<span>10 minutes ago</span>
									</div>
									<div class="comment-content">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
									</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<form>
					<div class="reply-forum">
						<h4>Reply</h4>
						<div class="form-group">
							<textarea class="forum-reply"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Reply" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
      <div class="col-md-4">
        <div class="top-topic-forum">
          <h4>Latest Topic</h4>
          <ul class="list-unstyled">
            <li><a href="{{ route('forum.single') }}">How a social networking works?</a></li>
            <li><a href="{{ route('forum.single') }}">Warning! Please read this.</a></li>
            <li><a href="{{ route('forum.single') }}">Welcoming new social workers</a></li>
            <li><a href="{{ route('forum.single') }}">What if this happens to you?</a></li>
            <li><a href="{{ route('forum.single') }}">Better way of using facebook</a></li>
          </ul>
        </div>
        <br>
        <div class="top-topic-forum">
          <h4>Top 5 Topics</h4>
          <ul class="list-unstyled">
            <li><a href="{{ route('forum.single') }}">5 ways to be happy in life</a></li>
            <li><a href="{{ route('forum.single') }}">Metaphora : A short story about an egg</a></li>
            <li><a href="{{ route('forum.single') }}">Modern Jose Rizal. Please read.</a></li>
            <li><a href="{{ route('forum.single') }}">Why do people judge others insensitively?</a></li>
            <li><a href="{{ route('forum.single') }}">Hi I'am Hand Some. Your virtual assistant.</a></li>
          </ul>
        </div>
				<br>
	            <div class="ads-section">
	            	<a href="#"><img src="images/ads.png"></a>
	            </div>
			</div>
		</div>
	</div>
</div>

@section('scripts')
    {{ Html::script(URL::asset('js/jobposting/codemirror.min.js')) }}
    {{ Html::script(URL::asset('js/jobposting/xml.min.js')) }}
    {{ Html::script(URL::asset('js/jobposting/editor.pkgd.min.js')) }}
    <script> $(function() { $('.forum-reply').froalaEditor({heightMin: 300}) }); </script>
@endsection

@stop
