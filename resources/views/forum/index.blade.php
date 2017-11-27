@extends('layouts.master')

@section('title')
    IHSS - Forum
@endsection

@section('content')

<div class="fh5co-hero">
  <div class="fh5co-overlay"></div>
  <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cont.jpg);">
    <div class="desc animate-box">
      <h2><strong>Forum</strong></h2>
      <span>Modernized but simplified forums for simple users</span>
    </div>
  </div>

</div>

<div id="fh5co-contact" class="animate-box">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="forums">
            <div class="fp-parent">
              <div class="row">
                <div class="col-sm-9">
                  <h4><a href="">The Forum</a></h4>
                  <p>
                    About our forum, updates, announcements, events, projects, programs, and everything that can make the world a better place.
                </div>
                <div class="col-sm-3">
                  <div class="threads-post">
                    <ul class="list-unstyled">
                      <li>
                        Threads - 3
                      </li>
                      <li>
                        Post - 2321
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="fp-sub">
              <ul class="list-unstyled">
                <li><a href="{{ route('forum.single') }}"><i class="icon-chat"></i>FAQS</a></li>
                <li><a href="{{ route('forum.single') }}"><i class="icon-chat"></i>House Rules</a></li>
                <li><a href="{{ route('forum.single') }}"><i class="icon-chat"></i>The Bulletin</a></li>
              </ul>
            </div>
          </div>
          <div class="forums">
            <div class="fp-parent">
              <div class="row">
                <div class="col-sm-9">
                  <h4><a href="">Social Work</a></h4>
                  <p>
                    All about social work.
                  </p>
                </div>
                <div class="col-sm-3">
                  <div class="threads-post">
                    <ul class="list-unstyled">
                      <li>
                        Threads - 250
                      </li>
                      <li>
                        Post - 3534
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="fp-sub">
              <ul class="list-unstyled">
                <li><a href="{{ route('forum.single') }}"><i class="icon-chat"></i>Social Work and Law</a></li>
                <li><a href="{{ route('forum.single') }}"><i class="icon-chat"></i>Effectiveness of social workers</a></li>
                <li><a href="{{ route('forum.single') }}"><i class="icon-chat"></i>Benefits of social workers</a></li>
                <li><a href="{{ route('forum.single') }}"><i class="icon-chat"></i>Characteristics of a social worker</a></li>
                <li><a href="{{ route('forum.single') }}"><i class="icon-chat"></i>How to be an effective social worker</a></li>
              </ul>
            </div>
          </div>
          <div class="forums">
            <div class="fp-parent">
              <div class="row">
                <div class="col-sm-9">
                  <h4><a href="">The Lounge</a></h4>
                  <p>
                    This is the modern "Tambayan" of social workers
                  </p>
                </div>
                <div class="col-sm-3">
                  <div class="threads-post">
                    <ul class="list-unstyled">
                      <li>
                        Threads - 110
                      </li>
                      <li>
                        Post - 823
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="fp-sub">
              <ul class="list-unstyled">
                <li><a href="{{ route('forum.single') }}"><i class="icon-chat"></i>Facebook chat, is there something wrong?</a></li>
                <li><a href="{{ route('forum.single') }}"><i class="icon-chat"></i>Best artwork that I've even seen</a></li>
                <li><a href="{{ route('forum.single') }}"><i class="icon-chat"></i>Iphone X is revolutionary</a></li>
                <li><a href="{{ route('forum.single') }}"><i class="icon-chat"></i>Lifestyle : Healthy but not wealthy</a></li>
                <li><a href="{{ route('forum.single') }}"><i class="icon-chat"></i>Friendship? is it applicable to millennials?</a></li>
              </ul>
            </div>
          </div>
          <br>
          <ul class="pager">
              <li class="previous disabled"><a href="#">&larr; Previous</a></li>
              <li class="next"><a href="#">Next &rarr;</a></li>
          </ul>
        </div>
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
              <div class="panel panel-primary">
                  <div class="panel-heading" id="accordion">
                      <span class="glyphicon glyphicon-comment"></span> Chat
                  </div>
                  <div class="panel-collapse collapse in" id="collapseOne">
                      <div class="panel-body panel-body2">
                          <ul class="chat">
                              <li class="left clearfix"><span class="chat-img pull-left">
                              <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                          </span>
                                  <div class="chat-body clearfix">
                                      <div class="header">
                                          <strong class="primary-font">Jack Sparrow</strong>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                      <small class="min-text text-muted">
                                          <span class="glyphicon glyphicon-time"></span>12 mins ago
                                      </small>
                                  </div>
                              </li>
                              <li class="right clearfix">
                                <span class="chat-img pull-right">
                                  <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                              </span>
                                  <div class="chat-body clearfix">
                                      <div class="header">
                                          <strong class="primary-font">Bhaumik Patel</strong>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                      <small class="min-text text-muted">
                                        <span class="glyphicon glyphicon-time"></span>13 mins ago
                                      </small>
                                  </div>
                              </li>
                              <li class="left clearfix">
                                <span class="chat-img pull-left">
                                  <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                              </span>
                                  <div class="chat-body clearfix">
                                      <div class="header">
                                          <strong class="primary-font">Jack Sparrow</strong>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                      <small class="min-text text-muted">
                                          <span class="glyphicon glyphicon-time"></span>14 mins ago
                                      </small>
                                  </div>
                              </li>
                              <li class="right clearfix">
                                <span class="chat-img pull-right">
                                  <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                              </span>
                                  <div class="chat-body clearfix">
                                      <div class="header">
                                          <strong class="primary-font">Bhaumik Patel</strong>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                      <small class="min-text text-muted">
                                        <span class="glyphicon glyphicon-time"></span>15 mins ago
                                      </small>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <div class="panel-footer">
                          <div class="input-group">
                              <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                              <span class="input-group-btn">
                              <button class="btn btn-warning btn-sm" id="btn-chat">
                                  Send</button>
                          </span>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="ads-section">
                <a href="#"><img src="images/ads.png"></a>
              </div>
      </div>
    </div>
  </div>
</div>

@stop
