@extends('layouts.master')

@section('title')
    IHSS - Blog Single
@endsection

@section('content')

<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>

	<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('storage/blogbanners/'.$blogpage->bannerfname) }});">
		<div class="desc animate-box">
			<h2>{{ $blogpage->title }}</h2>
			<span>Posted by: <strong>{{ $blogpage->user->username }}</strong></span>
		</div>
	</div>

</div>

<div id="fh5co-portfolio">
	 <div class="container">
		   <div class="row">
			      <div class="col-md-8">
				          <div class="joblisting">
					               <div class="row">
						                     <div class="col-sm-12 jobdesc">
                                     {!! $blogpage->content !!}
                                 </div>
                             </div>
                         </div>
                         <div class="cmts">
        		                 <div class="well">
        		                     <h4>Leave a Comment:</h4>
        		                        <form role="form">
        		                    	      <div class="row">

                		                        <div class="form-group">
                		                        	<label>Comment</label>
                		                            <textarea class="form-control" rows="3"></textarea>
                		                        </div>
                                        </div>
    		                                <button type="submit" class="btn btn-primary">Submit</button>
    		                            </form>
      		                   </div>

        		                <hr>

        		                <div class="media">
        		                    <a class="pull-left" href="#">
        		                        <img class="media-object" src="http://placehold.it/64x64" alt="">
        		                    </a>
        		                    <div class="media-body">
        		                        <h4 class="media-heading">Testuser
        		                            <small>Oct 6, 2017 at 9:30 PM</small>
        		                        </h4>
        		                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        		                    </div>
        		                </div>

        		                <!-- Comment -->
        		                <div class="media">
        		                    <a class="pull-left" href="#">
        		                        <img class="media-object" src="http://placehold.it/64x64" alt="">
        		                    </a>
        		                    <div class="media-body">
        		                        <h4 class="media-heading">Administrator
        		                            <small>Oct 6, 2017 at 9:28 PM</small>
        		                        </h4>
        		                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        		                    </div>
        		                </div>
                      </div>
                 </div>

           <div class="col-md-4">
		           <div class="top-topic-forum">
  						     <h4>Latest Blogs</h4>
  						     <ul class="list-unstyled">
                       @foreach($latestblogs as $blog)
  							           <li><a href="{{ route('user.blogs.single',$blog->blogid) }}">{{ $blog->title }}</a></li>
                       @endforeach
  						     </ul>
					     </div>
    					 <br>
    					 <div class="top-topic-forum">
      						<h4>Top 5 Blog Views</h4>
      						<ul class="list-unstyled">
                      @foreach($topblogs as $blog)
    				              <li><a href="{{ route('user.blogs.single',$blog->blogid) }}">{{ $blog->title }}</a> <span class="badge">{{ $blog->views }}</span></li>
                      @endforeach
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

	<div id="fh5co-blog-section" class="fh5co-section-gray">
		<div class="container">
			<div class="row row-bottom-padded-md">
				<div class="col-md-6 col-md-offset-3 text-center heading-section">
					<h3>You may also like this</h3>
				</div>
				<div class="col-md-12">
					<ul id="fh5co-portfolio-list">

						<li class="one-third " style="background-image: url(images/cover_bg_3.jpg); ">
							<a href="#" class="color-4">
								<div class="case-studies-summary">
									<h2>Donation is caring</h2>
								</div>
							</a>
						</li>

						<li class="one-third " style="background-image: url(images/cover_bg_3.jpg); ">
							<a href="#" class="color-4">
								<div class="case-studies-summary">
									<h2>Donation is caring</h2>
								</div>
							</a>
						</li>

						<li class="one-third " style="background-image: url(images/cover_bg_3.jpg); ">
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
