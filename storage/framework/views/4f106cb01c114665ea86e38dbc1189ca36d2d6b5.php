 
<?php $__env->startSection('content'); ?>

 <!-- <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('app-assets/css/bootstrap.min.css')); ?>"> -->



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
                        <a href="#" class="profile-image">
                            <img src="<?php echo e(URL::asset($arr->profile_image)); ?>" class="rounded-circle img-border height-100" alt="Card image">
                        </a>
                    </div>

                    <div class="media-body media-middle row">
                        <div class="col-xs-6">
                             <h3 class="card-title"><?php echo e($arr->id); ?></h3>
                            <h3 class="card-title"><?php echo e($arr->first_name); ?>&nbsp;<?php echo e($arr->last_name); ?></h3>

                        </div>

                        <div class="col-xs-6 text-xs-right">
                            <!-- edit profile for hr and user -->
                            <form method="get" action="<?php echo e(url('/edit/profile/')); ?>">
                          <input type="hidden" name="employeeid" value="<?php echo e($arr->id); ?>">
                          <input type="hidden" name="_token" value="csrf_token()">
                          <button type="submit" class="btn btn-primary">Edit</button>
                          </form> 

                            <?php if($arr->profile_status!="activated" && $arr->profile_status!="deactivated"): ?>
                            <a href="<?php echo e(url('/confirm/profile/request/'.$arr->id)); ?>"> 
                            <button type="button" class="btn btn-primary hidden-xs-down">
                            <i class="icon-plus4"></i> Confirm</button>
                            </a>
                         
                             <?php endif; ?>


                            <div class="float-xs-right">
                               
                            </div>

                        </div>
                    </div>
                </div>
                
                <nav class="navbar navbar-light navbar-profile">
                    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation"></button>
                    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
                        <ul class="nav navbar-nav float-xs-right">
                            <li class="nav-item active">
                                <a class="nav-link" href="#personal"><i class="icon-content-left"></i> Personal <span class="sr-only">(current)</span></a>
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
                                
            <?php if(isset($employeeid)): ?>
                       <form method="post" action="">
                      <input type="text" name="eid" value="<?php echo e($arr->id); ?>">
                       <input type="hidden" name="_token" val="<?php echo e(csrf_token()); ?>">
            <?php endif; ?>

            <div class="box box-primary">
            <div class="box-body box-profile">
            <div class="box-body table-responsive no-padding">

              <table class="table table-hover">
                <tr>
                  <td>First Name:</td>
                  <td>
                    <?php if(isset($employeeid) ): ?>
                     
                    <input type="text" name="first_name" value="<?php echo e($arr->first_name); ?>">
                  </form>
                    <?php else: ?>
                    <?php echo e($arr->first_name); ?>

                    <?php endif; ?>
                  </td>
                </tr>

                <tr>
                  <td>Last Name:</td>
                    <td><?php echo e($arr->last_name); ?></td>
                </tr>

                <tr>
                  <td>Date Of Birth:</td>
                    <td><?php echo e($arr->dob); ?></td>
                </tr>

                <tr>
                  <td>E-mail:</td>
                    <td><?php echo e($arr->email); ?></td>
                </tr>

                
                <tr>
                  <td>Contact No:</td>
                    <td><?php echo e($arr->phone); ?></td>
                </tr>

                <tr>
                  <td>Address:</td>
                    <td><?php echo e($arr->address); ?></td>
                </tr>

                <tr>
                  <td>City:</td>
                   <td><?php echo e($arr->city); ?></td>
                </tr>   
                 <tr>
                  <td>Age:</td>
                    <td><?php echo e($arr->age); ?></td>
                </tr> 

                 <tr>
                  <td>Gender:</td>
                    <td><?php echo e($arr->gender); ?></td>
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
                  <td>Department :</td>
                  <td><?php echo e($arr->department_name); ?></td>
                </tr>

                <tr>
                  <td>Designation :</td>
                    <td><?php echo e($arr->designation_name); ?></td>
                </tr>

                <tr>
                  <td>Date Of Join:</td>
                    <td><?php echo e($arr->doj); ?></td>
                </tr>

                <tr>
                  <td>Empolyee Type:</td>
                    <td><?php echo e($arr->employee_type); ?></td>
                </tr>

                
                <tr>
                  <td>Reffered By:</td>
                    <td><?php echo e($arr->reffered_by); ?></td>
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
          

           


           
          <!--  <li class="timeline-item mt-3" style="text-decoration: none;">
               
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header" id="leave">
                        <h4 class="card-title"><a href="#">Leave Detail</a></h4>
                        <p class="card-subtitle text-muted mb-0 pt-1">
                            <span class="font-small-3">18 June, 2016 at 4.50 P.M</span>
                        </p>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
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
                                <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula. Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                                <ul class="list-group icheck-task">
                                    <li class="list-group-item">
                                        <input type="checkbox" id="input-1"> Cras justo odio</li>
                                    <li class="list-group-item">
                                        <input type="checkbox" id="input-2" checked> Dapibus ac facilisis in</li>
                                    <li class="list-group-item">
                                        <input type="checkbox" id="input-3"> Morbi leo risus</li>
                                    <li class="list-group-item">
                                        <input type="checkbox" id="input-4" disabled checked> Porta ac consectetur ac</li>
                                    <li class="list-group-item">
                                        <input type="checkbox" id="input-5"> Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer px-0 py-0">
                            <div class="card-block ">
                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                    <input type="text" class="form-control" placeholder="Write comments...">
                                    <div class="form-control-position">
                                        <i class="icon-speech-bubble"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
           -->

          
        </ul>
       
    </section>
</div>

        </div>
      </div>
    </div>


    

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    

     


 
    <script src="<?php echo e(URL::asset('app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')); ?>" type="text/javascript"></script>
  
 

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>