  
<?php $__env->startSection('content'); ?>
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
				               <?php if(Auth::check()): ?>
                               <?php if(Auth::user()->r_id==3): ?>
				                <th>Action</th>
                                <?php endif; ?>
                                <?php endif; ?>
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
                                 <?php if(Auth::check()): ?>
                               <?php if(Auth::user()->r_id==3): ?>
				            	 <td>
				                	<a href="<?php echo e(url('')); ?>"><button class="btn btn-primary">Edit</button></a> 
				                    </span>
				                </td>
                                <?php endif; ?>
                                <?php endif; ?>

				                  <td class="text-xs-center">
				                	<span class="avatar avatar-busy">
				                		<?php if(isset($arr->profile_image)): ?>
                                        <a href="<?php echo e(url('/employee/'.$arr->id)); ?>">
				                		<img src="<?php echo e(URL::asset($arr->profile_image)); ?>" alt="avatar" data-toggle="tooltip" data-placement="right" title="<?php echo e($arr->first_name); ?>"><i class=""><?php echo e($arr->id); ?></i>
                                        </a>
				                		<?php else: ?>
                                         <a href="<?php echo e(url('/employee/'.$arr->id)); ?>">
				                		<img src="<?php echo e(URL::asset('user.png')); ?>" alt="avatar" data-toggle="tooltip" data-placement="right" title="<?php echo e($arr->first_name); ?>"><i class=""><?php echo e($arr->id); ?></i>
                                        </a>
				                		<?php endif; ?>
				                	</span>
				                </td>

				                <td>
                                     <?php if(!isset($arr->in_time) && $arr->attendance_status!='a' && $arr->attendance_status!='A'): ?>
                                        <span class="tag tag-default tag-warning">Miss</span>
                                        </button>
                                       <?php elseif($arr->late_arival>=10): ?>
                                         <span class="tag tag-default tag-warning">Late</span>
                                        <?php elseif($arr->attendance_status=='p' || $arr->attendance_status=='P'): ?>
                                           <span class="tag tag-default tag-sucess">present</span>
                                      <?php elseif($arr->attendance_status=='a' || $arr->attendance_status=='A' && (!isset($arr->in_time) && (!isset($arr->out_time)))): ?>
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
                                    <td><?php echo e($arr->attendance_status); ?></td>


				               
				            </tr>
				           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				        </tbody>
				        <tfoot>
				            <tr>
                                  <?php if(Auth::check()): ?>
                               <?php if(Auth::user()->r_id==3): ?>
				                    <th>Action</th>
                                    <?php endif; ?>
                                    <?php endif; ?>
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