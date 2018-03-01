@extends('layout.layout1')
@section('content')

 <!--  <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/bootstrap.min.css') }}">

	 -->

	<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
         <!--  <div class="content-header-left col-md-6 col-xs-12">
            <h2 class="content-header-title mb-0">Profile</h2>
          </div> -->
          
         @if (session('status'))
          <div class="alert alert-success">
          {{ session('status') }}
          </div>
          @endif

         <div class="content-header-lead col-xs-12 mt-2">
            <p class="lead"></p>
         </div>
        </div>

    <div class="content-detached content-right">
        <div class="content-body">
        	<section class="row">
			<div class="col-md-12">
	    	<div class="card">
	        <div class="card-head">
	        <div class="card-header">
	         <h4 class="card-title">All Contacts</h4>
		     <a class="heading-elements-toggle">
		     <i class="icon-ellipsis font-medium-3"></i>
		     </a>
        		<div class="heading-elements">
		        <button class="btn btn-primary btn-sm">
              <a href="/registration/process-1/">
		          <i class="icon-plus4 black">Create Profile</i>
              </a>
            </button>
            	<span class="dropdown">
	               <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-warning dropdown-toggle dropdown-menu-right btn-sm"><i class="icon-cloud-download3 white"></i>
	               </button>
	            <span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
	                <a href="#" class="dropdown-item"><i class="icon-upload5"></i> Import</a>
	                <a href="#" class="dropdown-item"><i class="icon-download5"></i> Export</a>
	            
	            </span>
	            </span>

            	<button class="btn btn-default btn-sm">
            		<i class="icon-cog3 white"></i></button>
		        </div>
	        </div>
	        </div>

	        <div class="card-body collapse in">
	            <div class="card-block">
	                <!-- Task List table -->
	                <table id="users-contacts" class="table table-white-space table-bordered row-grouping display table-responsive no-wrap icheck table-middle">
				      
				            <tr>
				             	<th>First Name</th>
                      <th>profile status</th>
				                <th>Employee Type</th>
				                <th>Department</th>
				               	<th>Designation</th> 
				                <th>Actions</th>
				            </tr>

				  	 <?php
               			 foreach($profile as $arr)
               			 {
                	?>
                		<tr @if($arr->profile_status=="deactivated") style="background-color: #8080802e;" @endif>
							<td>
                
              
								<div class="media">
								<div class="media-left">
						        <span class="avatar avatar-sm avatar-online rounded-circle">
                      @if(isset($arr->profile_image))
						        <img src="{{URL::asset($arr->profile_image) }}" alt="" ><i></i>
                    @else
                     <img src="{{URL::asset('user.png') }}" alt="" ><i></i>
                    @endif
						        </span>
						    	</div>
						    	<div class="media-body media-middle">{{$arr->first_name }}&nbsp;{{$arr->last_name}}
                   
						    	</div>
						    	</div>
                
             
						    </td>
                        <td>{{$arr->profile_status}}</td>
                 			  <td>{{$arr->employee_type}}</td>
                  			<td>{{$arr->department_name}}</td>
                        <td>{{$arr->designation_name}}</td>
               				  
               				<td>
				                <span class="dropdown">
				                 <button id="btnSearchDrop23" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right">
				                 <i class="icon-cog3"></i>
				             	</button>
				                 <span aria-labelledby="btnSearchDrop23" class="dropdown-menu mt-1 dropdown-menu-right">
                           <form method="post" action="{{url('/view-profile/')}}"> 
                             <input type="hidden" name="id" value="{{$arr->id}}">
                             <input type="hidden" name="_token" value="{{csrf_token()}}">
				                 <a href="" class="dropdown-item"><i class="icon-circle-plus success"></i><button type="submit" style="color:#55595C;background: transparent;border-color:transparent;:"> View</button></a>
                       </form>
				                 <a href="{{ url('/edit-profile/'.$arr->id) }}" class="dropdown-item"><i class="icon-pen3"></i> Edit</a>
                         @if($arr->profile_status=="not_completed" || $arr->profile_status=="created" || $arr->profile_status=="processing")
                            <a href="{{ url('/full-registration/'.$arr->id) }}" class="dropdown-item"><i class="icon-pen3"></i> Full Registration </a>
                            @endif
                         
                          @if($arr->profile_status=="activated")
                           <a href="{{ url('/profile/status/disable/'.$arr->id) }}" class="dropdown-item"><i class="icon-pen3"></i>Disable</a>
                          @else
                           <a href="{{ url('/profile/status/enable/'.$arr->id) }}" class="dropdown-item"><i class="icon-pen3"></i> Enable</a>
                          @endif
                         </a>
                          <a href="{{ url('/upload/document/panel/'.$arr->id) }}" class="dropdown-item"><i class="icon-pen3"></i> Upload Documents</a>
                            
				                 </span>
				                 </span>
				            </td>
              			</tr>


      
					<?php
						}
           			?>
				            
				      
				    </table>
            
         <div class="col-md-6"> 
              {!! $profile->render() !!}
          </div>
				</div>
			</div>
			</div>
			</div>
			</section>
        </div>
    </div>
        
        <div class="sidebar-detached sidebar-left">
        <div class="sidebar">
        <div class="bug-list-sidebar-content">
    	<!-- Predefined Views -->
    <div class="card">
        <!-- <div class="card-head">
            <div class="media p-1">
                <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
                <div class="media-body media-middle">
                    <h5 class="media-heading">Margaret Govan</h5>
                </div>
            </div>
        </div> -->
        <!-- contacts search -->
        <div class="card-block border-top-blue-grey border-top-lighten-5">
            <div class="bug-list-search">
                <div class="bug-list-search-content">
                    <form action="{{url('/search/profile/')}}" method="get">
                        <div class="position-relative">
                            <input type="search" name="key" id="search-contacts" class="form-control" placeholder="Search profiles...">
                            <div class="form-control-position">
                               <button type="submit" style="background:transparent;border:none;"> <i class="icon-search4 text-size-base text-muted"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /contacts search -->
      
        <!-- contacts view -->
        <div class="card-block">
            <div class="list-group">
                <a href="#" class="list-group-item active">Search By</a>
                
            </div>
            <form method="get" action="{{url('/search') }}">
            <select class="c-select form-control" id="department_id" name="department_id">
          		<option value="0">Select Department</option>
                    <?php foreach($department as $arr)
              			{
                	?>
                 <option value="{{$arr->dept_id }}">{{$arr->department_name}}</option>
                	<?php
                 		}
                 	?>								  

             </select>

             	
            <select class="c-select form-control" id="designation_id" name="designation_id">
                <option value="0">Select Designation</option>  
                    <?php foreach($designation as $arr)
                 		{
                	?>
                <option value="{{$arr->desig_id }}">{{$arr->designation_name}}</option>
                	<?php
                 		}
                 	?>
            </select>
            <br>
            <button type="submit" class="btn btn-primary" style="float: right;">Search</button>
        </form>
        </div>
        
        <!-- Groups-->
        <div class="card-block">
          <p class="lead">Profile</p>
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="tag tag-primary tag-pill float-xs-right">{{$total}}
                    </span> <a href="#"> Total </a>
                </li>
                <li class="list-group-item">
                    <span class="tag tag-info tag-pill float-xs-right">{{$created}}</span> 
                    <?php $var1="created"; ?>
                    <a href="{{url('/profiles/'.$var1)}}"> Created</a>
                </li>
                <li class="list-group-item">
                    <span class="tag tag-warning tag-pill float-xs-right">{{$not_completed}}</span> 
                     <?php $var2="not_completed"; ?>
                    <a href="{{url('/profiles/'.$var2)}}"> Not Completed</a>
                </li>
                 <li class="list-group-item">
                    <span class="tag tag-warning tag-pill float-xs-right">{{$processing}}</span> 
                    <?php $var3="processing"; ?>
                    <a href="{{url('/profiles/'.$var3)}}"> Processing</a>
                </li>
                <li class="list-group-item">
                    <span class="tag tag-success tag-pill float-xs-right">{{$activated}}</span> 
                    <?php $var4="activated"; ?>
                    <a href="{{url('/profiles/'.$var4)}}"> Activated</a>
                </li>
                <li class="list-group-item">
                    <span class="tag tag-danger tag-pill float-xs-right">{{$deactivated}}</span> 
                    <?php $var5="deactivated"; ?>
                    <a href="{{url('/profiles/'.$var5)}}"> Deactivated </a>
                </li>
                <li class="list-group-item">
                    <span class="tag tag-success tag-pill float-xs-right" style="background-color:black;">{{$removed}}</span> <?php $var6="removed"; ?>
                    <a href="{{url('/profiles/'.$var6)}}"> Removed</a>
                </li>

            </ul>
        </div>
        <!--/ Groups-->

       

    </div>
    <!--/ Predefined Views -->
	</div>
    </div>
    </div>
    </div>
    </div>

     <script src="{{ URL::asset('app-assets/js/core/libraries/jquery.min.js') }}" type="text/javascript"></script>


    

    @endsection