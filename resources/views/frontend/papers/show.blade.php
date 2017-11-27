@extends('layouts.master')

@section('title')
    IHSS - Paper/Thesis
@endsection

@section('content')
<div class="fh5co-hero">
<div class="fh5co-overlay"></div>
<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/research.jpg') }});">
    <div class="desc animate-box">
        <h2>Research/Thesis Papers</h2>
        <span>Lorem ipsum amet</span>
        <span><a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#send-top">Submit Research/Thesis</a></span>
    </div>
    <!-- Modal -->
    <div id="send-top" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Submit Research/Thesis Paper</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Research/Thesis Image</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Title</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Month</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Year</label>
                            <select class="form-control" id="Month" placeholder="Month">
                                <option>Month</option>
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>Septemberember</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Research/Thesis PDF/Doc</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Research/Thesis Summary</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Send</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

</div>

<div id="fh5co-content-section" class="fh5co-section-gray">
<div class="container">
    <div class="search-inline-form card">
        <h3 class="section-title">Search</h3>
        <form class="form-inline">
            <div class="form-group">
                <input type="text" class="form-control" id="Title" placeholder="Title">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="Author" placeholder="Author">
            </div>
            <div class="form-group">
                <select class="form-control" id="Month" placeholder="Month">
                    <option>Month</option>
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>Septemberember</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="Year" placeholder="Year">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <div class="search__container">
        <ul class="card">
            <li class="search-item">
                <div class="search-item__image" style="background-image: url(http://placehold.it/100x100);"></div>
                <div class="search-item__content">
                    <p class="text--medium">
                        Research Paper
                    </p>
                    <p class="text--small text--muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit.</p>
                    <p class="text--small text--muted"><span class="icon-user2"></span> &nbsp;&nbsp;Samantha Smith
                        <br><span class="icon-calendar"></span> &nbsp;&nbsp;September 2017</p>
                </div>
                <div class="search-item__options">
                    <a href="#" class="button button--outline button--small">Download</a>
                </div>
            </li>

            <li class="search-item">
                <div class="search-item__image" style="background-image: url(http://placehold.it/100x100);"></div>
                <div class="search-item__content">
                    <p class="text--medium">
                        Research Paper
                    </p>
                    <p class="text--small text--muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit.</p>
                    <p class="text--small text--muted"><span class="icon-user2"></span> &nbsp;&nbsp;Samantha Smith
                        <br><span class="icon-calendar"></span> &nbsp;&nbsp;September 2017</p>
                </div>
                <div class="search-item__options">
                    <a href="#" class="button button--outline button--small">Download</a>
                </div>
            </li>

            <li class="search-item">
                <div class="search-item__image" style="background-image: url(http://placehold.it/100x100);"></div>
                <div class="search-item__content">
                    <p class="text--medium">
                        Research Paper
                    </p>
                    <p class="text--small text--muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit.</p>
                    <p class="text--small text--muted"><span class="icon-user2"></span> &nbsp;&nbsp;Samantha Smith
                        <br><span class="icon-calendar"></span> &nbsp;&nbsp;September 2017</p>
                </div>
                <div class="search-item__options">
                    <a href="#" class="button button--outline button--small">Download</a>
                </div>
            </li>

            <li class="search-item">
                <div class="search-item__image" style="background-image: url(http://placehold.it/100x100);"></div>
                <div class="search-item__content">
                    <p class="text--medium">
                        Research Paper
                    </p>
                    <p class="text--small text--muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit.</p>
                    <p class="text--small text--muted"><span class="icon-user2"></span> &nbsp;&nbsp;Samantha Smith
                        <br><span class="icon-calendar"></span> &nbsp;&nbsp;September 2017</p>
                </div>
                <div class="search-item__options">
                    <a href="#" class="button button--outline button--small">Download</a>
                </div>
            </li>

            <li class="search-item">
                <div class="search-item__image" style="background-image: url(http://placehold.it/100x100);"></div>
                <div class="search-item__content">
                    <p class="text--medium">
                        Research Paper
                    </p>
                    <p class="text--small text--muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit.</p>
                    <p class="text--small text--muted"><span class="icon-user2"></span> &nbsp;&nbsp;Samantha Smith
                        <br><span class="icon-calendar"></span> &nbsp;&nbsp;September 2017</p>
                </div>
                <div class="search-item__options">
                    <a href="#" class="button button--outline button--small">Download</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="text--center">
        <p class="text--small text--muted">No more results.</p>
    </div>
</div>
</div>

@section('scripts')
    {{ Html::script(URL::asset('js/iCheck/icheck.min.js')) }}
    {{ Html::script(URL::asset('js/img-upload.js')) }}
    {{ Html::script(URL::asset('js/registration/index.js')) }}
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
