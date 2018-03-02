 
<?php $__env->startSection('content'); ?>

 <!-- <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('app-assets/css/bootstrap.min.css')); ?>"> -->

  <?php if(Auth::check()): ?> 

 <script src="<?php echo e(URL::asset('app-assets/js/core/libraries/jquery.min.js')); ?>" type="text/javascript"></script>

 <div class="app-content content container-fluid">
      <div class="content-wrapper">
      
<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="content-body">
   <div id="user-profile">
      <div class="row">
        <div class="col-xs-12">
            <div class="card profile-with-cover">
                <div class="card-img-top img-fluid bg-cover height-300" style="background-color:#81c784e6;"></div>
                <div class="media profil-cover-details">
                    <div class="media-left pl-2 pt-2">
                        <a href="#"  class="profile-image">
                            <?php if(isset($arr->profile_image)): ?>
                            <img src="<?php echo e(URL::asset($arr->profile_image)); ?>" class="rounded-circle img-border height-100" alt="Card image">
                            <?php else: ?>
                              <img src="<?php echo e(URL::asset('user.png')); ?>" class="rounded-circle img-border height-100" alt="Card image">
                            <?php endif; ?>
                             </a>
                  
                       

                     
                    </div>


                    <div class="media-body media-middle row">
                        <div class="col-xs-4">
                             <h3 class="card-title"><?php echo e($arr->id); ?></h3>
                            <h3 class="card-title"><?php echo e($arr->first_name); ?>&nbsp;<?php echo e($arr->last_name); ?><br>
                               <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#inlineForm" style="">
                  <i class="icon-photo" ></i>
                  </button>
                            </h3>
                            
                         </div>
                         <div class="col-xs-4">
                          <!-- Button trigger modal -->
                 

                  <!-- Modal -->
                  <div class="modal fade text-xs-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <label class="modal-title text-text-bold-600" id="myModalLabel33">Change Profile Image</label>
                        </div>
                        <form action="<?php echo e(url('/change/profile/image/')); ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                       <div class="form-group">
                                            <label for="profile">Profile Image :</label>
                                            <input type="file" class="form-control" name="image" >
                        </div>
                        <input type="hidden" name="eid" value="<?php echo e($arr->id); ?>">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                          
                          </div>
                          <div class="modal-footer">
                         
                          <input type="submit" class="btn btn-primary" value="Change">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
              <!-- Modal ENDS-->

                         </div>
         

                        <div class="col-xs-4 text-xs-right">
                            <!-- edit profile for hr and user -->
                              <?php if(!isset($employeeid)): ?>
                          
                         <a href="<?php echo e(url('/profile/edit/'.$arr->id)); ?>"> <button  class="btn btn-primary">Edit</button></a>
                         
                              <?php endif; ?>

                            <?php if($arr->profile_status!="activated" && $arr->profile_status!="deactivated"): ?>
                            <?php if(isset($not_id)): ?>
                            <a href="<?php echo e(url('/confirm/profile/request/'.$not_id.'/'.$arr->id)); ?>"> 
                            <button type="button" class="btn btn-primary hidden-xs-down">
                            <i class="icon-plus4"></i> Confirm</button>
                            </a>
                              <a href="<?php echo e(url('/reject/profile/request/'.$not_id.'/'.$arr->id)); ?>"> 
                            <button type="button" class="btn btn-danger hidden-xs-down">
                            <i class="icon-plus4"></i> Reject</button>
                            </a>
                            <?php endif; ?>
                             
                             <?php endif; ?>
                       </div>
                    </div>
                </div>
                
                <nav class="navbar navbar-light navbar-profile">
                    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation"></button>
                    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
                        <ul class="nav navbar-nav float-xs-right">
                            <li class="nav-item active">
                                <a class="nav-link" href="#personal"><i class="icon-content-left"></i> Personal <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#office"><i class="icon-head"></i> Office</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#documents"><i class="icon-briefcase4"></i> Documents</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#attendance"><i class="icon-heart6"></i> Attendance</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#leave"><i class="icon-bell4"></i> Leave</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

          <?php if(session('status')): ?>
              <div class="alert alert-success">
              <?php echo e(session('status')); ?>

              </div>
          <?php endif; ?>

  <?php if(isset($employeeid)): ?>
                       <form method="post" action="<?php echo e(url('/profile/edit/submit/')); ?>">
                      <input type="hidden" name="eid" value="<?php echo e($arr->id); ?>">
                        <?php echo e(csrf_field()); ?>

  <?php endif; ?>


    <section id="timeline" class="timeline-center timeline-wrapper">
        <ul class="timeline" style="    list-style-type: none;">
           <li class="timeline-item mt-3" style="text-decoration: none;" >
                <div class="timeline-card card border-grey border-lighten-2" >
                    <div class="card-header" id="personal">
                        <h4 class="card-title">
                        <a href="#">Personal Information</a></h4>
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
                <tr>
                  <td>First Name:</td>
                  <td>
                    <?php if(isset($employeeid) && Auth::user()->r_id==3): ?>
                      <div class="form-group">
                    <input type="text" name="first_name" value="<?php echo e($arr->first_name); ?>" class="form-control">
                  </div>
                    <?php else: ?>
                    <?php echo e($arr->first_name); ?>

                    <?php endif; ?>
                  </td>
                </tr>

                <tr>
                  <td>Last Name:</td>
                    <td>
                        <?php if(isset($employeeid) && Auth::user()->r_id==3): ?>
                      <div class="form-group">
                    <input type="text" name="last_name" value="<?php echo e($arr->last_name); ?>" class="form-control">
                  </div>
                  
                    <?php else: ?>
                      <?php echo e($arr->last_name); ?>

                    <?php endif; ?>
                    </td>
                </tr>

                <tr>
                  <td>Date Of Birth:</td>
                    <td>
                       <?php if(isset($employeeid)): ?>
                        <div class="form-group">
                         <input type="date" name="dob" value="<?php echo e($arr->dob); ?>" class="form-control">
                       </div>
                       <?php else: ?>
                          <?php echo e($arr->dob); ?>

                       <?php endif; ?>
                        </td>
                </tr>

                <tr>
                  <td>E-mail:</td>
                    <td>
                       <?php if(isset($employeeid)): ?>
                        <div class="form-group">
                         <input type="email" name="email" value="<?php echo e($arr->email); ?>" class="form-control">
                       </div>
                       <?php else: ?>
                          <?php echo e($arr->email); ?>

                       <?php endif; ?>
                    </td>
                </tr>

                
                <tr>
                  <td>Contact No:</td>
                    <td>
                      <?php if(isset($employeeid)): ?>
                       <div class="form-group">
                         <input type="text" name="phone" value="<?php echo e($arr->phone); ?>" class="form-control">
                       </div>
                       <?php else: ?>
                          <?php echo e($arr->phone); ?>

                       <?php endif; ?>
                    </td>
                </tr>

                <tr>
                  <td>Address:</td>
                    <td>
                       <?php if(isset($employeeid)): ?>
                        <div class="form-group">
                         <textarea name="address" class="form-control"> <?php echo e($arr->address); ?></textarea>
                       </div>
                       <?php else: ?>
                          <?php echo e($arr->address); ?>

                       <?php endif; ?>
                    </td>
                </tr>

                <tr>
                  <td>City:</td>
                   <td>
                       <?php if(isset($employeeid)): ?>
                        <div class="form-group">
                         <input type="text" name="city" value="<?php echo e($arr->city); ?>" class="form-control">
                       </div>
                       <?php else: ?>
                          <?php echo e($arr->city); ?>

                       <?php endif; ?>
                  </td>
                </tr>   
                 <tr>
                  <td>Age:</td>
                    <td>
                      <?php if(isset($employeeid)): ?>
                       <div class="form-group">
                         <input type="text" name="age" value="<?php echo e($arr->age); ?>" class="form-control">
                       </div>
                       <?php else: ?>
                          <?php echo e($arr->age); ?>

                       <?php endif; ?>
                    </td>
                </tr> 

                 <tr>
                  <td>Gender:</td>
                    <td>
                      <?php if(isset($employeeid)): ?>
                        <div class="form-group">
                                          
                                            <a class="heading-elements-toggle">
                                            <i class="icon-ellipsis font-medium-3"></i></a>
                                        <div class="card-body collapse in">
                                        <fieldset>
                                            <label class="custom-control custom-radio">
                                            <input id="radioStacked1" name="gender" value="male" type="radio"  class="custom-control-input" <?php if($arr->gender=='male') { ?> checked <?php } ?>>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Male</span>
                                            </label>
                                        </fieldset>
                                        <fieldset>
                                            <label class="custom-control custom-radio">
                                            <input id="radioStacked2" name="gender" value="female" type="radio"  class="custom-control-input" <?php if($arr->gender=='female')  { ?> checked <?php } ?>>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Female</span>
                                            </label>
                                        </fieldset>
                                        </div>
                                        </div>
                       <?php else: ?>
                          <?php echo e($arr->gender); ?>

                       <?php endif; ?>
                    </td>
                </tr>      
              </table>
             
            </div>
            </div>
            </div>

                            </div>
                        </div>
                      </div> 

                </div>
            </li>


                <li class="timeline-item mt-3" style="text-decoration: none;">
               <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header" id="office">
                        <h4 class="card-title">
                        <a href="#">Office Information</a></h4>
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
               
                <tr>
                  <td>Date Of Join:</td>
                    <td>
                      <?php if(isset($employeeid) && Auth::user()->r_id==3): ?>
                       <div class="form-group">
                         <input type="date" name="doj" value="<?php echo e($arr->doj); ?>" class="form-control">
                       </div>
                      <?php else: ?>
                          <?php echo e($arr->doj); ?>

                       <?php endif; ?>
                    </td>
                </tr>

                <tr>
                  <td>Empolyee Type:</td>
                    <td>
                      <?php if(isset($employeeid) && Auth::user()->r_id==3): ?>
                       <div class="form-group">
                                          
                                            <a class="heading-elements-toggle">
                                            <i class="icon-ellipsis font-medium-3"></i></a>
                                        <div class="card-body collapse in">
                                        <fieldset>
                                            <label class="custom-control custom-radio">
                                            <input id="radioStacked1" name="employee_type" value="temporary" type="radio"  class="custom-control-input" 
                                            <?php if($arr->employee_type=='temporary'){?>
                                             checked 
                                             <?php } ?>>
                                            
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description"><?php echo e($arr->employee_type); ?></span>
                                            </label>
                                        </fieldset>
                                        <fieldset>
                                            <label class="custom-control custom-radio">
                                            <input id="radioStacked1" name="employee_type" value="permanent" type="radio"  class="custom-control-input" 
                                            <?php if($arr->employee_type=='permanent'){ ?> checked <?php } ?>>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Permanent</span>
                                            </label>
                                        </fieldset>
                                        </div>
                                        </div>
                       <?php else: ?>
                          <?php echo e($arr->employee_type); ?>

                       <?php endif; ?>
                    </td>
                </tr>

                
                <tr>
                  <td>Reffered By:</td>
                   <td>
                      <?php if(isset($employeeid) && Auth::user()->r_id==3): ?>
                       <div class="form-group">
                         <input type="text" name="reffered_by" value="<?php echo e($arr->reffered_by); ?>" class="form-control">
                       </div>
                      <?php else: ?>
                          <?php echo e($arr->reffered_by); ?>

                       <?php endif; ?>
                    </td>
                </tr>

                 <tr>
                  <td>Department :</td>
                   <td>
                   
                    <?php if(isset($employeeid) && Auth::user()->r_id==3): ?>
                      <div class="form-group">
                    <select class="c-select form-control" id="department_id" name="department_id" class="form-control">
                     <?php if($department): ?>                      
                     <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                      <option value="<?php echo e($arr->dept_id); ?>"><?php echo e($arr->department_name); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php endif; ?>
                     </select>
                   </div>
                    <?php else: ?>
                    <?php echo e($arr->department_name); ?>

                    <?php endif; ?>
                  </td>
                  
                </tr>
                <tr>
                   <td>Designation :</td>
                   <td>
                    <?php if(isset($employeeid) && Auth::user()->r_id==3): ?>
                      <div class="form-group">
                    <select class="c-select form-control" id="designation_id" name="designation_id" class="form-control">
                     <?php if($designation): ?>                      
                     <?php $__currentLoopData = $designation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                      <option value="<?php echo e($arr->desig_id); ?>"><?php echo e($arr->designation_name); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php endif; ?>
                     </select>
                   </div>
                    <?php else: ?>
                    <?php echo e($arr->designation_name); ?>

                    <?php endif; ?>
                   
                   </td>
                </tr>


               
              </table>
               <?php if(isset($employeeid)): ?>
                   <button type="submit" class="btn btn-success">Update</button>
              <?php endif; ?>
            </div>
            </div>
            </div>

                            </div>
                        </div>
                    </div>

                </div>
            </li>
           <?php if(!isset($employeeid)): ?>

             <li class="timeline-item mt-3" style="text-decoration: none;">
               
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header" id="documents">
                        <h4 class="card-title">
                        <a href="#">Documents</a></h4>
                       <!--  <p class="card-subtitle text-muted mb-0 pt-1">
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
                <tr>
                  <td>Biodata:</td>
                  <?php if(!isset($arr->cv)): ?>
                  <td>
                    No Record found
                  </td>
                  <?php else: ?>
                  <td>
                  <a href="<?php echo e(url('/preview-biodata/'.$arr->id)); ?>"><button  class="btn btn-primary"> View </button></a>
                  </td>
                  <td> 
                    <a href="<?php echo e(url($arr->cv)); ?>" download=""><button  class="btn btn-primary"> Download </button></a>  -
                  </td>
                   <td> 
                   <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#update">
                   Update
                  </button>  
                  </td>
                  <?php endif; ?>
                </tr>

                <tr>
                  <td>Address Proof:</td>
                    <td><a href="<?php echo e(url('/address-proof/'.$arr->id)); ?>" ><button class="btn btn-primary">View All</button></a> 
                   </td>
                </tr>

                <tr>
                  <td>Certificates:</td>
                     <td><a href="<?php echo e(url('/certificates/'.$arr->id)); ?>" ><button class="btn btn-primary">View All</button></a> 
                   </td>
                </tr>

                <tr>
                  <td>Expirience Letters:</td>
                    <td><a href="<?php echo e(url('/expirience-letters/'.$arr->id)); ?>" ><button class="btn btn-primary">View All</button></a> 
                   </td>
                </tr>

                
                <tr>
                  <td>Pay-Slips:</td>
                   <td><a href="<?php echo e(url('/pay-slips/'.$arr->id)); ?>" ><button class="btn btn-primary">View All</button></a> 
                   </td>
                </tr>   
              </table>
        </div>
        </div>
         </div>

                            </div>
                        </div>
                    
                    </div>
                </div>
            </li>
<?php endif; ?>

           
         
          
        </ul>
       
    </section>
</div>

        </div>
      </div>
    </div>


      <!-- Modal -->
                  <div class="modal fade text-xs-left" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h3 class="modal-title" id="myModalLabel34">Update Biodata</h3>
                      </div>
                      <form action="<?php echo e(url('/update/biodata/')); ?>" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                       <label for="profile">Biodata :</label>
                        <div class="form-group position-relative has-icon-left">
                        
                          <input type="file" class="form-control" name="cv"  >
                       
                        </div>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="empid" value="<?php echo e($arr->id); ?>">
                        
                      <div class="modal-footer">
                        <input type="reset" class="btn btn-danger" data-dismiss="modal" value="close">
                        <input type="submit" class="btn btn-primary" value="Update">
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>

                 


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    

     


 
    <script src="<?php echo e(URL::asset('app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')); ?>" type="text/javascript"></script>
  
 <?php endif; ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>