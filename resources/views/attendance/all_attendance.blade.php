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
            	<div class="row">
            		<div class="col-md-3">
        		
        			<!-- search by department and designation wise -->
        						  <form method="get" action="{{url('/filter/search/') }}">
        			               <select class="form-control" tabindex="-1" aria-hidden="true" name="department_id">
				                			<option value="0">Select Department</option>
                    						 @foreach($department as $arr)
              								  <option value="{{$arr->dept_id }}">{{$arr->department_name}}</option>
              								 @endforeach
              					    </select>
				                

				     </div>
        			<!-- search by department and designation wise ends here -->
        			<div class="col-md-3">
        		
        			<!-- search by department and designation wise -->
        						
        			               <select class="form-control" tabindex="-1" aria-hidden="true" name="designation_id">
				                		 <option value="0">Select Designation</option>  
                    					 @foreach($designation as $arr)
                						  <option value="{{$arr->desig_id }}">{{$arr->designation_name}}</option>
                						 @endforeach
				                    </select>
				                	
				               

				     </div>
				     <div class="col-md-2">
				     	 <button type="submit" class="btn btn-primary" >Search</button>
				     	  </form>
				     </div>
        			<!-- search by department and designation wise ends here -->
            		<!--  search box -->
            		<div class="col-md-4">
            		 	<div class="bug-list-search">
               				 <div class="bug-list-search-content">
                    			<form action="#">
                       				 <div class="position-relative">
                           			 <input type="search" id="search-contacts" class="form-control" placeholder="Search contacts...">
                           			 <div class="form-control-position">
                               		 <i class="icon-search4 text-size-base text-muted"></i>
                              		</div>
                        			</div>
                   				</form>
                			</div>
           				</div>
        			</div>
        		</div>
            <!-- search box ends here -->
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">

                    @if(isset($nodata))
                            @if (session('status'))
                               <div class="alert alert-danger">
                                {{ session('status') }}
                               </div>
                            @endif
                    <div class="alert alert-danger">
                    {{$nodata}}
                    </div>
                    @else
	                <!-- Task List table -->
	                <table id="project-task-list" class="table table-white-space table-bordered row-grouping display table-responsive no-wrap icheck table-middle">
				        <thead>
				            <tr>
				               
				                <th>Action</th>
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
				            	 <td>


                                    <a href="{{url('/view/attendance/'.$arr->empid.'/'.$arr->attid)}}">
                                        <button class="btn btn-primary">View</button></a> 
				                 

				                </td>

				                  <td class="text-xs-center">
				                	<span class="avatar avatar-busy">
				                		@if(isset($arr->profile_image))
                                        <a href="{{url('/employee/'.$arr->id)}}">
				                		<img src="{{ URL::asset($arr->profile_image)}}" alt="" data-toggle="tooltip" data-placement="right" title="{{$arr->first_name}}"><i class="">{{$arr->id}}</i>
                                        </a>
				                		@else
                                         <a href="{{url('/employee/'.$arr->id)}}">
				                		<img src="{{ URL::asset('user.png')}}" alt="" data-toggle="tooltip" data-placement="right" title="{{$arr->first_name}}"><i class="">{{$arr->id}}</i>
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
                                    
                                    <td>
                                        @if(isset($attendance_empid) && $attendance_empid==$arr->empid)
                                        <form method="post" action="{{url('/edit-attendance/submit/')}}">
                                        <input type="text" name="in_time" value="{{$arr->in_time}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="empid" value="{{$empid}}">
                                 
                                        @else
                                        {{$arr->in_time}}
                                         @endif
                                    </td>

                                    <td>
                                       
                                        {{$arr->out_time}}
                                         
                                        </td>

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
				                    <th>Action</th>
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
                    @endif
					<!--/ Task List table -->
				</div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection