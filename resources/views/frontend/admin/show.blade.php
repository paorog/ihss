@extends('layouts.master')

@section('title')
    IHSS - Administration
@endsection

@section('stylesheets')
    {{ Html::style(URL::asset('css/custom.css')) }}
    {{ Html::style(URL::asset('css/admin/index.css')) }}
@endsection

@section('content')

<div id="fh5co-content-section" class="fh5co-section-gray">
    <div class="container">
        <div class="joblisting">
          <!-- tabs -->
            <div class="row">
                <div class="col-md-12">

                    <div class="col-md-12 text-center"><h2><strong>Administration - Front End</strong></h2></div>

                    <div class="">
                        <ul class="nav nav-tabs" role="tablist" id="example-one">
                            <li role="presentation" class="active">
                                <a href="#first" aria-controls="first" role="tab" data-toggle="tab">Notifications</a>
                            </li>
                            <li role="presentation">
                                <a href="#second" aria-controls="second" role="tab" data-toggle="tab">User Management</a>
                            </li>
                            <li role="presentation">
                                <a href="#third" aria-controls="third" role="tab" data-toggle="tab">Programs & Services</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="first">
                            <ol class="list-numbered">
                                <li>SocialWorker1 registered his account without payment. <span class="badge">3 minutes ago</span> <span style="float:right"><a class="btn btn-success"><i class="fa fa-eye"></i></a> <a class="btn btn-danger">&times;</a></span> </li>
                                <li>Juan Dela Cruz has published a new blog "Social Experiment for a cause". <span class="badge">27 minutes ago</span> <span style="float:right"><a class="btn btn-success"><i class="fa fa-eye"></i></a> <a class="btn btn-danger">&times;</a></span> </li>
                                <li>SW234Philippines has been banned from the forums. <span class="badge">2 hours ago</span> <span style="float:right"><a class="btn btn-success"><i class="fa fa-eye"></i></a> <a class="btn btn-danger">&times;</a></span> </li>
                                <li>John Doe has created a new topic in social network forum "Use facebook in..." <a href="" class="btn btn-xs btn-info">More</a>. <span class="badge">2017-09-23 8:34 PM</span> <span style="float:right"><a class="btn btn-success"><i class="fa fa-eye"></i></a> <a class="btn btn-danger">&times;</a></span> </li>
                                <li>SW234Philippines has created a new topic in politics forum "Duterte's Plan to the philippines" <span class="badge">2017-09-20 6:04 AM</span> <span style="float:right"><a class="btn btn-success"><i class="fa fa-eye"></i></a> <a class="btn btn-danger">&times;</a></span> </li>
                                <li>SW234Philippines's account is now active. <span class="badge">2017-09-18 10:46 PM</span> <span style="float:right"><a class="btn btn-success"><i class="fa fa-eye"></i></a> <a class="btn btn-danger">&times;</a></span> </li>
                                <li>SW234Philippines registered his account with payment. <a href="" class="btn btn-xs btn-success">Confirm</a> <a href="" class="btn btn-xs btn-danger">Deny</a> <span class="badge">2017-09-18 10:44 PM</span> <span style="float:right"><a class="btn btn-success"><i class="fa fa-eye"></i></a> <a class="btn btn-danger">&times;</a></span> </li>
                                <li>John Doe's account is now active. <span class="badge">2017-09-18 04:23 PM</span> <span style="float:right"><a class="btn btn-success"><i class="fa fa-eye"></i></a> <a class="btn btn-danger">&times;</a></span> </li>
                                <li>John Doe has updated his payment method. <a href="" class="btn btn-xs btn-success">Confirm</a> <a href="" class="btn btn-xs btn-danger">Deny</a> <span class="badge">2017-09-18 04:21 PM</span> <span style="float:right"><a class="btn btn-success"><i class="fa fa-eye"></i></a> <a class="btn btn-danger">&times;</a></span> </li>
                                <li>John Doe registered his account without payment. <span class="badge">2017-09-18 12:38 PM</span> <span style="float:right"><a class="btn btn-success"><i class="fa fa-eye"></i></a> <a class="btn btn-danger">&times;</a></span> </li>
                            </ol>

                            <ul class="pager">
                        		    <li class="previous disabled"><a href="#">&larr; Previous</a></li>
                        		    <li class="next"><a href="#">Next &rarr;</a></li>
                        		</ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="second">
                            <h1 class="text-center">User Management <small><i class="fa fa-user"></i></small></h1>
                              <div class="row">
                              <div class="col-md-12">
                                <div class="panel panel-primary">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Active Users</h3>
                                    <div class="pull-right">
                                      <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                                        <i class="glyphicon glyphicon-filter"></i>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="panel-body">
                                    <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Active Users" />
                                  </div>
                                  <table class="table table-hover" id="dev-table">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Userid</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Approver</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @if(!empty($activeUsers))
                                      @foreach($activeUsers as $row => $user)
                                          <tr>
                                            <td>{{ ++$row }}</td>
                                            <td>{{ $user->userid }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->approver->username }}</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-flag"></i>
                                                </a>
                                                <!-- <a href="" class="btn btn-sm btn-success">
                                                    <i class="fa fa-flag-o"></i>
                                                </a> -->
                                            </td>
                                          </tr>
                                      @endforeach
                                      @endif
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="panel panel-success">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Inactive Users</h3>
                                    <div class="pull-right">
                                      <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                                        <i class="glyphicon glyphicon-filter"></i>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="panel-body">
                                    <input type="text" class="form-control" id="task-table-filter" data-action="filter" data-filters="#task-table" placeholder="Filter Inactive Users" />
                                  </div>
                                  <table class="table table-hover" id="task-table">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Userid</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <td>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        @if(!empty($inactiveUsers))
                                        @foreach($inactiveUsers as $row => $user)
                                            <tr>
                                              <td>{{ ++$row }}</td>
                                              <td>{{ $user->userid }}</td>
                                              <td>{{ $user->username }}</td>
                                              <td>{{ $user->email }}</td>
                                              <td>
                                                  <a href="" class="btn btn-sm btn-warning">
                                                      <i class="fa fa-thumbs-o-up"></i>
                                                  </a>
                                                  <a href="" class="btn btn-sm btn-danger">
                                                      <i class="fa fa-thumbs-o-down"></i>
                                                  </a>
                                              </td>
                                            </tr>
                                        @endforeach
                                        @endif
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="third">
                            {{ Form::open(array('route' => 'admin.programservices.post', 'method' => 'post', 'files' => true)) }}
                            {{ csrf_field() }}
                                Import Excel File
                                <button type="submit" style="float:right" class="btn btn-sm btn-success">Upload</button>
                                (<i><strong>Note:</strong> Please follow this header (field_office, center_name, center_adrs, contact_number, center_head, accredited)</i>)
                                <hr>
                                {!! Form::file('programservices', array('class' => 'form-control', 'accept' => '.csv,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', '')) !!}
                            {{ Form::close() }}

                            <div class="clearfix">&nbsp;</div>

                            <div class="panel panel-info">
                              <div class="panel-heading">
                                <h3 class="panel-title">Programs & Services</h3>
                                <div class="pull-right">
                                  <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                                    <i class="glyphicon glyphicon-filter"></i>
                                  </span>
                                </div>
                              </div>
                              <div class="panel-body">
                                <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Program & Services" />
                              </div>
                              <table class="table table-hover" id="dev-table">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Field</th>
                                    <th>Name of Center</th>
                                    <th>Address of Center</th>
                                    <th>Head of Center</th>
                                    <th>Accredited</th>
                                    <th>Created By</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @if(!empty($programservices))
                                  @foreach($programservices as $row => $program)
                                      <tr>
                                        <td>{{ ++$row }}</td>
                                        <td>{{ $program->field_office }}</td>
                                        <td>{{ $program->center_name }}</td>
                                        <td>{{ $program->center_adrs }}</td>
                                        <td>{{ $program->center_head }}</td>
                                        <td>{{ $program->accredited }}</td>
                                        <td>{{ $program->createdby->username }}</td>
                                      </tr>
                                  @endforeach
                                  @endif
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>

                 </div>
             </div>
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
    {{ Html::script(URL::asset('js/admin/index.js')) }}
@endsection

@stop
