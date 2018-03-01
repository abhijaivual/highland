<?php $__env->startSection('content'); ?>

 <!--  <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('app-assets/css/bootstrap.min.css')); ?>">

	 -->

	<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
         <!--  <div class="content-header-left col-md-6 col-xs-12">
            <h2 class="content-header-title mb-0">Profile</h2>
          </div> -->
        
         <div class="content-header-lead col-xs-12 mt-2">
            <p class="lead"></p>
         </div>
        </div>

    <div class="content-detached content-right">
        <div class="content-body">
        	<section class="row">
			<div class="col-xs-12">
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
		          <i class="icon-plus4 black">Add Contacts</i>
              </a>
            </button>
            	<span class="dropdown">
	               <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-warning dropdown-toggle dropdown-menu-right btn-sm"><i class="icon-cloud-download3 white"></i>
	               </button>
	            <span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
	                <a href="#" class="dropdown-item"><i class="icon-upload5"></i> Import</a>
	                <a href="#" class="dropdown-item"><i class="icon-download5"></i> Export</a>
	                <a href="#" class="dropdown-item"><i class="icon-shuffle3"></i> Find Duplicate</a>
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
				                <th>Employee Type</th>
				                <th>Department</th>
				               	<th>Designation</th> 
				                <th>Actions</th>
				            </tr>

				  	 <?php
               			 foreach($profile as $arr)
               			 {
                	?>
                		<tr>
							<td>
								<div class="media">
								<div class="media-left">
						        <span class="avatar avatar-sm avatar-online rounded-circle">
						        <img src="<?php echo e(URL::asset($arr->profile_image)); ?>" alt=""><i></i>
						        </span>
						    	</div>
						    	<div class="media-body media-middle"><?php echo e($arr->first_name); ?><?php echo e($arr->last_name); ?>

						    	</div>
						    	</div>
						    </td>
                 			<td><?php echo e($arr->employee_type); ?></td>
                  			<td><?php echo e($arr->department_name); ?></td>
                        <td><?php echo e($arr->designation_name); ?></td>
               				
               				<td>
				                <span class="dropdown">
				                 <button id="btnSearchDrop23" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right">
				                 <i class="icon-cog3"></i>
				             	</button>
				                 <span aria-labelledby="btnSearchDrop23" class="dropdown-menu mt-1 dropdown-menu-right">
				                 <a href="<?php echo e(url('/view-profile/'.$arr->id)); ?>" class="dropdown-item"><i class="icon-circle-plus success"></i> View</a>
				                 <a href="<?php echo e(url('/edit-profile/'.$arr->id)); ?>" class="dropdown-item"><i class="icon-pen3"></i> Edit</a>
				                 </span>
				                 </span>
				            </td>
              			</tr>


      
					<?php
						}
           			?>
				            
				      
				    </table>
            
         <div class="col-md-6"> 
              <?php echo $profile->render(); ?>

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
        <div class="card-head">
            <div class="media p-1">
                <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
                <div class="media-body media-middle">
                    <h5 class="media-heading">Margaret Govan</h5>
                </div>
            </div>
        </div>
        <!-- contacts search -->
        <div class="card-block border-top-blue-grey border-top-lighten-5">
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
        <!-- /contacts search -->

        <!-- contacts view -->
        <div class="card-block">
            <div class="list-group">
                <a href="#" class="list-group-item active">Search By</a>
                
            </div>
            <form method="get" action="<?php echo e(url('/search')); ?>">
            <select class="c-select form-control" id="department_id" name="department_id">
          		<option value="0">Select Department</option>
                    <?php foreach($department as $arr)
              			{
                	?>
                 <option value="<?php echo e($arr->dept_id); ?>"><?php echo e($arr->department_name); ?></option>
                	<?php
                 		}
                 	?>								  

             </select>

             	
            <select class="c-select form-control" id="designation_id" name="designation_id">
                <option value="0">Select Designation</option>  
                    <?php foreach($designation as $arr)
                 		{
                	?>
                <option value="<?php echo e($arr->desig_id); ?>"><?php echo e($arr->designation_name); ?></option>
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
                    <span class="tag tag-primary tag-pill float-xs-right"><?php echo e($total); ?>

                    </span> <a href="#"> Total </a>
                </li>
                <li class="list-group-item">
                    <span class="tag tag-info tag-pill float-xs-right"><?php echo e($created); ?></span> <a href="#"> Created</a>
                </li>
                <li class="list-group-item">
                    <span class="tag tag-warning tag-pill float-xs-right">10</span> <a href="#"> Not Completed</a>
                </li>
                <li class="list-group-item">
                    <span class="tag tag-success tag-pill float-xs-right"><?php echo e($completed); ?></span> <a href="#"> Activated</a>
                </li>
                <li class="list-group-item">
                    <span class="tag tag-danger tag-pill float-xs-right">3</span> <a href="#"> Deactivated </a>
                </li>
                <li class="list-group-item">
                    <span class="tag tag-success tag-pill float-xs-right" style="background-color:black;">6</span> <a href="#"> Removed</a>
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

     <script src="<?php echo e(URL::asset('app-assets/js/core/libraries/jquery.min.js')); ?>" type="text/javascript"></script>


    

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>