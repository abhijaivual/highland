<?php $__env->startSection('content'); ?>



<!--    css is for wizard form-->
    
   <!--  -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('app-assets/css/plugins/forms/wizard.min.css')); ?>">
     <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('app-assets/css/plugins/calendars/clndr.min.css')); ?>">
      

<!-- Wizard css end here -->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12">
            <h2 class="content-header-title mb-0">Notification Style</h2>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Page</a>
                  </li>
                  <li class="breadcrumb-item active">Form Wizard Notification Steps
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-xs-12">
            <div class="media width-250 float-xs-right">
              <div class="media-left media-middle">
                <div id="sp-bar-total-sales"></div>
              </div>
              <div class="media-body media-right text-xs-right">
                <h3 class="m-0">$5,668</h3><span class="text-muted">Sales</span>
              </div>
            </div>
          </div>
          <div class="content-header-lead col-xs-12 mt-2">
            <p class="lead">Add .wizard-notification class to form tag to apply notification style wizard steps. There are two styles to display wizard tabs horizontal and vertical. You can display numbers or icons as wizard steps. You can also validate form fields on each wizard step.</p>
          </div>
        </div>
        <div class="content-body"><!-- Form wizard with number tabs section start -->
<section id="number-tabs">
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form wizard with number tabs</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <!-- <li><a data-action="close"><i class="icon-cross2"></i></a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                      <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form action="<?php echo e(url('/registration-2/submit')); ?>" method="post" class="number-tab-steps wizard-notification" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <!-- Step 1 -->
                            <h6>Personnel Info</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName1">First Name :</label>
                                            <input type="text" value="<?php echo e($arr->first_name); ?>" class="form-control"  readonly="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName1">Last Name :</label>
                                            <input type="text" class="form-control" value="<?php echo e($arr->last_name); ?>" name="last_name" placeholder="Last Name" readonly="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress1">Email Address :</label>
                                            <input type="email" class="form-control" value="<?php echo e($arr->email); ?>" readonly="" >
                                        </div>
                                    </div>
                                   <!--  if dob is already exist  -->
                                   <?php if(isset($arr->dob)): ?>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date1">Date of Birth :</label>
                                                 <input type="text" value="<?php echo e($arr->dob); ?>" readonly="" class="form-control">
                                             </div>
                                    </div>
                                   <?php else: ?>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date1">Date of Birth :</label>
                                            <input type="date" class="form-control" name="dob"  >
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber1">Phone Number :</label>
                                            <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="profile">Profile Image :</label>
                                            <input type="file" class="form-control" name="image" >
                                        </div>
                                    </div>
                                 </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shortDescription1">Age :</label>
                                            <input type="text" class="form-control" name="age" placeholder="age">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber1">City :</label>
                                            <input type="text" class="form-control" name="city" placeholder="city">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber1">Gender :</label>
                                            <a class="heading-elements-toggle">
                                            <i class="icon-ellipsis font-medium-3"></i></a>
                                        <div class="card-body collapse in">
                                        <fieldset>
                                            <label class="custom-control custom-radio">
                                            <input id="radioStacked1" name="gender" value="male" type="radio" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Male</span>
                                            </label>
                                        </fieldset>
                                        <fieldset>
                                            <label class="custom-control custom-radio">
                                            <input id="radioStacked2" name="gender" value="female" type="radio" checked class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Female</span>
                                            </label>
                                        </fieldset>
                                        </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shortDescription1">Address :</label>
                                            <textarea name="address"  rows="4" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>




                            <!-- Step 2 -->
                    <h6>Office Info</h6>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="proposalTitle1">Department :</label>
                                    <input type="text" class="form-control" value="<?php echo e($arr->department_name); ?>" readonly="">
                                    </div>

                                    <div class="form-group">
                                    <label for="emailAddress2">Designation :</label>
                                    <input type="email" class="form-control" value="<?php echo e($arr->designation_name); ?>" readonly="" >
                                    </div>

                                    <div class="form-group">
                                    <label for="videoUrl1">Date Of Joining :</label>
                                    <input type="url" class="form-control" value="<?php echo e($arr->doj); ?>" readonly="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="jobTitle1">Employee Type :</label>
                                    <input type="text" class="form-control" value="<?php echo e($arr->employee_type); ?>" readonly="" >
                                    </div>

                                    <div class="form-group">
                                    <label for="jobTitle1">Reffered By :</label>
                                    <input type="text" class="form-control" name="reffered_by" >
                                    </div>
                                </div>
                            </div>
                        </fieldset>



                            <!-- Step 3 -->
                    <h6>Upload Documents</h6>
                        <fieldset>
                            <div class="row">
                                 <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="profile">Biodata :</label>
                                            <input type="file" class="form-control" name="cv"  >
                                        </div>
                                    </div>

                                   <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="profile">Address Proof :</label>
                                            <input type="file" class="form-control" name="addressproof[]" multiple=""  >
                                        </div>
                                    </div>
                            </div>


                            <div class="row">
                                 <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="profile">Expirience Letter :</label>
                                            <input type="file" class="form-control" name="expirience_letter[]" multiple="">
                                        </div>
                                </div>

                                 <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="profile">Pay-Slips :</label>
                                            <input type="file" class="form-control" name="payslip[]" multiple="">
                                        </div>
                                </div>
                            </div>


                            <div class="row">
                                 <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="profile">Certificates :</label>
                                            <input type="file" class="form-control" name="certificate[]" multiple="" >
                                        </div>
                                </div>
                            </div>


                                <button type="submit" class="btn btn-primary" >Submit</button>
                            </fieldset>

                         
                        </form>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>
</div>

<!-- Form wizard with number tabs section end -->
 <script src="<?php echo e(URL::asset('app-assets/js/core/libraries/jquery.min.js')); ?>" type="text/javascript"></script>
<!-- form wizard js files -->
    <script type="text/javascript" src="<?php echo e(URL::asset('app-assets/vendors/js/extensions/jquery.steps.min.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(URL::asset('app-assets/js/scripts/ui/breadcrumbs-with-stats.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('app-assets/js/scripts/forms/wizard-steps.min.js')); ?>"></script>
<!-- form wizard js files -->
<!-- upload multiple buttons -->
 
<!-- upload multiple buttons end -->  




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>