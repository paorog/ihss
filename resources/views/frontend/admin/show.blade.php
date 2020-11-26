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
                            <li role="presentation">
                              <a href="#fourth" aria-controls="fourth" role="tab" data-toggle="tab">Ngo List</a>
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
                                        <th>Donation Proof</th>
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
                                              @if($user->payment_detail)
                                              <td><img data-toggle="modal" data-target="#view-payment-modal" data-image-name="{{ $user->payment_detail->payment_fname }}" id="view-payment" width="50" height="100" class="img-responsive" src="{{ url('/storage/user_payments/'.$user->payment_detail->payment_fname) }}"></td>
                                              @else
                                              <td>None</td>
                                              @endif
                                              <td>
                                                @if($user->payment_detail)
                                                {{ Form::open(array('route' => 'admin.user.approve', 'method' => 'post')) }}
                                                {{ csrf_field()}}
                                                  <input type="hidden" name="userid" value="{{ $user->userid }}" />
                                                  <button type="submit" class="btn btn-sm btn-success">
                                                      <i class="fa fa-thumbs-o-up"></i>
                                                  </button>
                                                {{ Form::close() }}
                                                @else
                                                  no action
                                                @endif
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
                        <div role="tabpanel" class="tab-pane" id="fourth">
                            {{ Form::open(array('route' => 'admin.ngolist.post', 'method' => 'post', 'files' => true)) }}
                            {{ csrf_field() }}
                                Import Excel File
                                <button type="submit" style="float:right" class="btn btn-sm btn-success">Upload</button>
                                (<i><strong>Note:</strong> Please follow this header ('agency','address','contact_numbers','email','fax','contact_person','conctact_person_position','registration_number','license_number','accredited_number',
                                  'programs_and_services','service_type','clientele','locations')</i>)
                                <hr>
                                {!! Form::file('ngo_list', array('class' => 'form-control', 'accept' => '.csv,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', '')) !!}
                            {{ Form::close() }}

                            <div class="clearfix">&nbsp;</div>

                            <div class="panel panel-info">
                              <div class="panel-heading">
                                <h3 class="panel-title">NGO List</h3>
                                <div class="pull-right">
                                  <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                                    <i class="glyphicon glyphicon-filter"></i>
                                  </span>
                                </div>
                              </div>
                              <div class="panel-body">
                                <input type="text" class="form-control" id="ngo-list-filter" data-action="filter" data-filters="#ngo-list" placeholder="Filter Program & Services" />
                              </div>
                              <div class="table-responsive">
                              <table class="table table-hover table-fixed" id="ngo-list">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Agency</th>
                                    <th>Address</th>
                                    <th>Contact Numbers</th>
                                    <th>Email</th>
                                    <th>Fax</th>
                                    <th>Contact Person</th>
                                    <th>Registration #</th>
                                    <th>License #</th>
                                    <th>Accredited #</th>
                                    <th>Programs & Services</th>
                                    <th>Service Types</th>
                                    <th>Clientele</th>
                                    <th>Locations</th>
                                    <th>Created By</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @forelse($ngo_list as $row => $ngo)
                                  
                                  @php 
                                  $contact_numbers = explode("|", $ngo->contact_numbers);
                                  $email = explode("|", $ngo->email);
                                  $fax = explode("|", $ngo->fax);
                                  $programs_and_services = explode("|", $ngo->programs_and_services);
                                  $service_types = explode("|", $ngo->service_types);
                                  $clientele = explode("|", $ngo->clientele);
                                  $locations = explode("|", $ngo->locations);
                                  @endphp
                                      <tr>
                                        <td>{{ ++$row }}</td>
                                        <td>{{ $ngo->agency }}</td>
                                        <td>{{ $ngo->address }}</td>
                                        <td>
                                          @foreach($contact_numbers as $contact)
                                          <p>{{$contact}}</p>
                                          @endforeach
                                        </td>
                                        <td>
                                          @foreach($email as $em)
                                          <p>{{$em}}</p>
                                          @endforeach
                                        </td>
                                        <td>
                                          @foreach($fax as $fx)
                                          <p>{{$fx}}</p>
                                          @endforeach
                                        </td>
                                        <td>{{ $ngo->contact_person.' - '.$ngo->contact_person_position }}</td>
                                        <td>{{ $ngo->registration_number }}</td>
                                        <td>{{ $ngo->license_number }}</td>
                                        <td>{{ $ngo->accredited_number }}</td>
                                        <td>
                                          @foreach($programs_and_services as $program)
                                          <p>{{$program}}</p>
                                          @endforeach
                                        </td>
                                        <td>
                                          @foreach($service_types as $service)
                                          <p>{{$service}}</p>
                                          @endforeach
                                        </td>
                                        <td>
                                          @foreach($clientele as $client)
                                          <p>{{$client}}</p>
                                          @endforeach
                                        </td>
                                        <td>
                                          @foreach($locations as $location)
                                          <p>{{$location}}</p>
                                          @endforeach
                                        </td>
                                        <td></td>
                                      </tr>
                                  @empty
                                      <tr><td colspan="15">Empty List</td></tr>
                                  @endforelse
                                </tbody>
                              </table>

                              {{ isset($ngo_list) ? $ngo_list->render() : "" }}
                            </div>
                        </div>
                    </div>

                 </div>
             </div>
         </div>
     </div>
</div>

<div class="modal fade" id="view-payment-modal" tabindex="-1" role="dialog" aria-labelledby="view-payment" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="view-payment">Donation Proof</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-responsive" src="" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
