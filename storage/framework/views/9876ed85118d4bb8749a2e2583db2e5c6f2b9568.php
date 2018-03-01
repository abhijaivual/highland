  
<?php $__env->startSection('content'); ?>


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
              	
              	 <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(isset($att_id) && $att_id==$arr->attid): ?>
                    <form method="post" action="<?php echo e(url('/edit-attendance/submit/')); ?>">
                <?php endif; ?>
				<tr>
                  <td>Employee:</td>
                   <td> 
                   	 <span class="avatar avatar-busy">
				                		<?php if(isset($arr->profile_image)): ?>
                                        <a href="<?php echo e(url('/employee/'.$arr->id)); ?>">
				                		<img src="<?php echo e(URL::asset($arr->profile_image)); ?>" alt="avatar" data-toggle="tooltip" data-placement="right" title="<?php echo e($arr->first_name); ?>"><i class=""><?php echo e($arr->empid); ?></i>
                                        </a>
				                		<?php else: ?>
                                         <a href="<?php echo e(url('/employee/'.$arr->id)); ?>">
				                		<img src="<?php echo e(URL::asset('user.png')); ?>" alt="avatar" data-toggle="tooltip" data-placement="right" title="<?php echo e($arr->first_name); ?>"><i class=""><?php echo e($arr->empid); ?></i>
                                        </a>
				                		<?php endif; ?>
				     </span>
				   </td>
                </tr>

                <tr>
                  <td>Status:</td>
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
                </tr>

                <tr>
                  <td>Date:</td>
                    <td><?php echo e($arr->att_date); ?></td>
                </tr>

                
                <tr>
                  <td>Shift:</td>
                    <td><?php echo e($arr->shift); ?></td>
                </tr>

                <tr>
                  <td>Shift Start:</td>
                   <?php if(isset($att_id) && $att_id==$arr->attid): ?>
                   <input type="hidden" name="shift_start" value="<?php echo e($arr->shift_start); ?>">
                   <?php endif; ?>
                    <td><?php echo e($arr->shift_start); ?></td>
                </tr>

                <tr>
                  <td>Shift End:</td>
                   <?php if(isset($att_id) && $att_id==$arr->attid): ?>
                   <input type="hidden" name="shift_end" value="<?php echo e($arr->shift_end); ?>">
                   <?php endif; ?>
                   <td><?php echo e($arr->shift_end); ?></td>
                </tr> 


                 <tr>
                  <td>In-Time:</td>
                    <td> 
                    	 <?php if(isset($att_id) && $att_id==$arr->attid): ?>
                                      
                                        <input type="time" name="in_time" value="<?php echo e($arr->in_time); ?>">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="hidden" name="attid" value="<?php echo e($att_id); ?>">
                                 
                         <?php else: ?>
                           <?php echo e($arr->in_time); ?>

                         <?php endif; ?>
                    </td>
                </tr> 

                 <tr>
                  <td>Out-Time:</td>
                          <td>
                           <?php if(isset($att_id) && $att_id==$arr->attid): ?>

                                       <input type="time" name="out_time" value="<?php echo e($arr->out_time); ?>">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="hidden" name="attid" value="<?php echo e($att_id); ?>">
                             <?php else: ?>
                           <?php echo e($arr->out_time); ?>

                         <?php endif; ?>

                           </td>
                </tr>


                <tr>
                  <td>Shift Hours:</td>
                    <td><?php echo e($arr->shift_hrs); ?></td>
                </tr>

                <tr>
                  <td>Work Hours:</td>
                    <td><?php echo e($arr->work_hrs); ?></td>
                </tr>

                <tr>
                  <td>OT Hours:</td>
                    <td><?php echo e($arr->ot_hrs); ?></td>
                </tr>

                <tr>
                  <td>Early Arrival:</td>
                    <td><?php echo e($arr->early_arival); ?></td>
                </tr>

				        <tr>
                  <td>Late Arrival:</td>
                    <td><?php echo e($arr->late_arival); ?></td>
                </tr>

				        <tr>
                  <td>Early Departure:</td>
                    <td><?php echo e($arr->early_departure); ?></td>
                </tr>
                
                <tr>
                  <td>Late Departure:</td>
                    <td><?php echo e($arr->late_departure); ?></td>
                </tr>

                <tr>
                  <td>Status:</td>
                    <td>
                        <?php echo e($arr->attendance_status); ?>

                       
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            








































<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>