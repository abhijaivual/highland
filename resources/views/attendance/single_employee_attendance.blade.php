  @extends('layout.layout1')
@section('content')
 <div class="content-body">
 	<section class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
            	<h4 class="card-title">My Task List</h4>
            	<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            	<div class="heading-elements">
            	
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">

                 
	                <!-- Task List table -->
	                <table id="project-task-list" class="table table-white-space table-bordered row-grouping display table-responsive no-wrap icheck table-middle">
				        <thead>
				            <tr>
				               @if(Auth::check())
                               @if(Auth::user()->r_id==3)
				                <th>Action</th>
                                @endif
                                @endif
                                    <th>Employee</th>
                                    <th>status 1</th>
                                    <th>Date</th>
                                    <th>Shift</th>
                                    <th>Shift Start</th>
                                    <th>Shift End</th>
                                    <th>In-Time</th>
                                    <th>Out-Time</th>
                                    <th>Shift Hours</th>
                                    <th>Work Hours</th>
                                    <th>OT Hours</th>
                                    <th>Early Arrival</th>
                                    <th>Late Arrival</th>
                                     <th>Early Departure</th>
                                    <th>Late Departure</th>
                                    <th>Status 2</th>
				            </tr>
				        </thead>
				        <tbody>
				        	<!-- ABC Project -->
				        	   @foreach($attendance as $arr)
				            <tr>
                                 @if(Auth::check())
                               @if(Auth::user()->r_id==3)
				            	 <td>
				                	<a href="{{url('')}}"><button class="btn btn-primary">Edit</button></a> 
				                    </span>
				                </td>
                                @endif
                                @endif

				                  <td class="text-xs-center">
				                	<span class="avatar avatar-busy">
				                		@if(isset($arr->profile_image))
                                        <a href="{{url('/employee/'.$arr->id)}}">
				                		<img src="{{ URL::asset($arr->profile_image)}}" alt="avatar" data-toggle="tooltip" data-placement="right" title="{{$arr->first_name}}"><i class="">{{$arr->id}}</i>
                                        </a>
				                		@else
                                         <a href="{{url('/employee/'.$arr->id)}}">
				                		<img src="{{ URL::asset('user.png')}}" alt="avatar" data-toggle="tooltip" data-placement="right" title="{{$arr->first_name}}"><i class="">{{$arr->id}}</i>
                                        </a>
				                		@endif
				                	</span>
				                </td>

				                <td>
                                     @if(!isset($arr->in_time) && $arr->attendance_status!='a' && $arr->attendance_status!='A')
                                        <span class="tag tag-default tag-warning">Miss</span>
                                        </button>
                                       @elseif($arr->late_arival>=10)
                                         <span class="tag tag-default tag-warning">Late</span>
                                        @elseif($arr->attendance_status=='p' || $arr->attendance_status=='P')
                                           <span class="tag tag-default tag-sucess">present</span>
                                      @elseif($arr->attendance_status=='a' || $arr->attendance_status=='A' && (!isset($arr->in_time) && (!isset($arr->out_time))))
                                        <span class="tag tag-default tag-danger">Absent</span>
                                      @endif
                                </td>
                                 <td>{{$arr->att_date}}</td>
                                    <td>{{$arr->shift}}</td>
                                    <td>{{$arr->shift_start}}</td>
                                    <td>{{$arr->shift_end}}</td>
                                    <td>{{$arr->in_time}}</td>
                                    <td>{{$arr->out_time}}</td>
                                    <td>{{$arr->shift_hrs}}</td>
                                    <td>{{$arr->work_hrs}}</td>
                                    <td>{{$arr->ot_hrs}}</td>
                                    <td>{{$arr->early_arival}}</td>
                                    <td>{{$arr->late_arival}}</td>
                                    <td>{{$arr->early_departure}}</td>
                                    <td>{{$arr->late_departure}}</td>
                                    <td>{{$arr->attendance_status}}</td>


				               
				            </tr>
				           @endforeach
				        </tbody>
				        <tfoot>
				            <tr>
                                  @if(Auth::check())
                               @if(Auth::user()->r_id==3)
				                    <th>Action</th>
                                    @endif
                                    @endif
                                    <th>Employee</th>
                                    <th>status 1</th>
                                    <th>Date</th>
                                    <th>Shift</th>
                                    <th>Shift Start</th>
                                    <th>Shift End</th>
                                    <th>In-Time</th>
                                    <th>Out-Time</th>
                                    <th>Shift Hours</th>
                                    <th>Work Hours</th>
                                    <th>OT Hours</th>
                                    <th>Early Arrival</th>
                                    <th>Late Arrival</th>
                                     <th>Early Departure</th>
                                    <th>Late Departure</th>
                                    <th>Status 2</th>
				            </tr>
				        </tfoot>
					</table>
                    
					<!--/ Task List table -->
				</div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection