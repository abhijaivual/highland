  
<?php $__env->startSection('content'); ?>
 <div class="content-body">
 	<section class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
            	<h4 class="card-title">My Task List</h4>
            	<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
        		<div class="heading-elements">
            		<button class="btn btn-primary btn-sm"><i class="icon-plus4 white"></i> New Task</button>
        			<span class="dropdown">
                        <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-warning btn-sm dropdown-toggle dropdown-menu-right"><i class="icon-cloud-download3 white"></i></button>
                        <span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-calendar5"></i> Due Date</a>
                            <a href="#" class="dropdown-item"><i class="icon-shuffle3"></i> Priority </a>
                            <a href="#" class="dropdown-item"><i class="icon-bar-graph"></i> Progress</a>
                            <a href="#" class="dropdown-item"><i class="icon-head"></i> Assign to</a>
                        </span>
                    </span>
        			<button class="btn btn-success btn-sm"><i class="icon-cog3 white"></i></button>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
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
				        	   <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				            <tr>
				            	 <td>
				                	<span class="dropdown">
				                        <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="icon-cog3"></i></button>
				                        <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
				                            <a href="#" class="dropdown-item"><i class="icon-eye6"></i> Open </a>
				                            <a href="#" class="dropdown-item"><i class="icon-pen3"></i> Edit </a>
				                           
				                        </span>
				                    </span>
				                </td>

				                  <td class="text-xs-center">
				                	<span class="avatar avatar-busy">
				                		<img src="<?php echo e(URL::asset($arr->profile_image)); ?>" alt="avatar" data-toggle="tooltip" data-placement="right" title="<?php echo e($arr->first_name); ?>"><i class=""></i>
				                	</span>
				                </td>

				                <td>
                                     <?php if(!isset($arr->in_time) && $arr->status!='a' && $arr->status!='A'): ?>
                                        <span class="tag tag-default tag-warning">Miss</span>
                                        </button>
                                       <?php elseif($arr->late_arival>=10): ?>
                                         <span class="tag tag-default tag-warning">Late</span>
                                        <?php elseif($arr->status=='p' || $arr->status=='P'): ?>
                                           <span class="tag tag-default tag-sucess">present</span>
                                      <?php elseif($arr->status=='a' || $arr->status=='A' && (!isset($arr->in_time) && (!isset($arr->out_time)))): ?>
                                        <span class="tag tag-default tag-danger">Absent</span>
                                      <?php endif; ?>
                                </td>
                                 <td><?php echo e($arr->att_date); ?></td>
                                    <td><?php echo e($arr->shift); ?></td>
                                    <td><?php echo e($arr->shift_start); ?></td>
                                    <td><?php echo e($arr->shift_end); ?></td>
                                    <td><?php echo e($arr->in_time); ?></td>
                                    <td><?php echo e($arr->out_time); ?></td>
                                    <td><?php echo e($arr->shift_hrs); ?></td>
                                    <td><?php echo e($arr->work_hrs); ?></td>
                                    <td><?php echo e($arr->ot_hrs); ?></td>
                                    <td><?php echo e($arr->early_arival); ?></td>
                                    <td><?php echo e($arr->late_arival); ?></td>
                                    <td><?php echo e($arr->early_departure); ?></td>
                                    <td><?php echo e($arr->late_departure); ?></td>
                                    <td><?php echo e($arr->status); ?></td>


				               
				            </tr>
				           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
					<!--/ Task List table -->
				</div>
            </div>
        </div>
    </div>
</section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>