  @extends('layout.layout1')
@section('content')


<section id="timeline" class="timeline-center timeline-wrapper">
        <ul class="timeline" style="    list-style-type: none;">
           <li class="timeline-item mt-3" style="text-decoration: none;" >
                <div class="timeline-card card border-grey border-lighten-2" >
                    <div class="card-header" id="personal">
                        <h4 class="card-title">
                        <a href="#"></a>Employee Attendance</h4>
                        <!-- <p class="card-subtitle text-muted mb-0 pt-1">
                            <span class="font-small-3">18 June, 2016 at 4.50 P.M</span>
                        </p> -->
                        <a class="heading-elements-toggle">
                            <i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="icon-repeat2"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            </ul>
                        </div>
                    </div>

                     <div class="card-body collapse in">
                        <div class="card-body collapse in">
                            <div class="card-block">
                                
                         
            <div class="box box-primary">
            <div class="box-body box-profile">
            <div class="box-body table-responsive no-padding">



              <table class="table table-hover">
              	
              	 @foreach($attendance as $arr)
                @if(isset($att_id) && $att_id==$arr->attid)
                    <form method="post" action="{{url('/edit-attendance/submit/')}}">
                @endif
				<tr>
                  <td>Employee:</td>
                   <td> 
                   	 <span class="avatar avatar-busy">
				                		@if(isset($arr->profile_image))
                                        <a href="{{url('/employee/'.$arr->id)}}">
				                		<img src="{{ URL::asset($arr->profile_image)}}" alt="avatar" data-toggle="tooltip" data-placement="right" title="{{$arr->first_name}}"><i class="">{{$arr->empid}}</i>
                                        </a>
				                		@else
                                         <a href="{{url('/employee/'.$arr->id)}}">
				                		<img src="{{ URL::asset('user.png')}}" alt="avatar" data-toggle="tooltip" data-placement="right" title="{{$arr->first_name}}"><i class="">{{$arr->empid}}</i>
                                        </a>
				                		@endif
				     </span>
				   </td>
                </tr>

                <tr>
                  <td>Status:</td>
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
                </tr>

                <tr>
                  <td>Date:</td>
                    <td>{{$arr->att_date}}</td>
                </tr>

                
                <tr>
                  <td>Shift:</td>
                    <td>{{$arr->shift}}</td>
                </tr>

                <tr>
                  <td>Shift Start:</td>
                   @if(isset($att_id) && $att_id==$arr->attid)
                   <input type="hidden" name="shift_start" value="{{$arr->shift_start}}">
                   @endif
                    <td>{{$arr->shift_start}}</td>
                </tr>

                <tr>
                  <td>Shift End:</td>
                   @if(isset($att_id) && $att_id==$arr->attid)
                   <input type="hidden" name="shift_end" value="{{$arr->shift_end}}">
                   @endif
                   <td>{{$arr->shift_end}}</td>
                </tr> 


                 <tr>
                  <td>In-Time:</td>
                    <td> 
                    	 @if(isset($att_id) && $att_id==$arr->attid)
                                      
                                        <input type="time" name="in_time" value="{{$arr->in_time}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="attid" value="{{$att_id}}">
                                 
                         @else
                           {{$arr->in_time}}
                         @endif
                    </td>
                </tr> 

                 <tr>
                  <td>Out-Time:</td>
                          <td>
                           @if(isset($att_id) && $att_id==$arr->attid)

                                       <input type="time" name="out_time" value="{{$arr->out_time}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="attid" value="{{$att_id}}">
                             @else
                           {{$arr->out_time}}
                         @endif

                           </td>
                </tr>


                <tr>
                  <td>Shift Hours:</td>
                    <td>{{$arr->shift_hrs}}</td>
                </tr>

                <tr>
                  <td>Work Hours:</td>
                    <td>{{$arr->work_hrs}}</td>
                </tr>

                <tr>
                  <td>OT Hours:</td>
                    <td>{{$arr->ot_hrs}}</td>
                </tr>

                <tr>
                  <td>Early Arrival:</td>
                    <td>{{$arr->early_arival}}</td>
                </tr>

				        <tr>
                  <td>Late Arrival:</td>
                    <td>{{$arr->late_arival}}</td>
                </tr>

				        <tr>
                  <td>Early Departure:</td>
                    <td>{{$arr->early_departure}}</td>
                </tr>
                
                <tr>
                  <td>Late Departure:</td>
                    <td>{{$arr->late_departure}}</td>
                </tr>

                <tr>
                  <td>Status:</td>
                    <td>
                        {{$arr->attendance_status}}
                       
                    </td>
                </tr>
                @endforeach
              </table>
            </div>
            </div>
            </div>


            <center>
             <button type="submit" class="btn btn-primary" >Update</button>
          </center>

                            </div>
                        </div>
                      </div> 

                </div>
            </li>
        </ul>
    </section>
            








































@endsection