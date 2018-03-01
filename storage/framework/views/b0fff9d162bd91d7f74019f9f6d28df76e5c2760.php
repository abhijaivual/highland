 
<?php $__env->startSection('content'); ?>

   



    <div class="app-content content container-fluid">
      <div class="content-wrapper">
      <div class="content-body">
      <!-- Form wizard with number tabs section start -->
<section id="number-tabs">
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Profile</h4>
                    <a class="heading-elements-toggle">
                      <i class="icon-ellipsis font-medium-3"></i></a>
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
                        <form action="<?php echo e(url('/edit')); ?>" method="post" class="number-tab-steps wizard-notification" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                             <input type="hidden" name="id" value="<?php echo e($arr->id); ?>">
                            <!-- Step 1 -->
                          
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName1">First Name :</label>
                                           
                                            <input type="text" name="first_name" value="<?php echo e($arr->first_name); ?>" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="lastName1">Last Name :</label>
                                         
                                          <input type="text" class="form-control" value="<?php echo e($arr->last_name); ?>" name="last_name" name="last_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="emailAddress1">Email Address :</label>
                                        
                                          <input type="email" class="form-control" value="<?php echo e($arr->email); ?>" name="email" >
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="date1">Date of Birth :</label>
                                         
                                          <input type="date" name="dob" value="<?php echo e($arr->dob); ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                 
                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="date1">Phone :</label>
                                         
                                          <input type="tel" name="phone" value="<?php echo e($arr->phone); ?>" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <?php if(isset($arr->profile_image)): ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="profile">Profile Image :</label>
                                        
                                            <img src="<?php echo e(URL::asset($arr->profile_image)); ?>" width="100" height="70">
                                        </div>
                                    </div>
                                    <?php else: ?>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="profile">Profile Image :</label>
                                               <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date1">Age :</label>
                                           
                                            <input type="text" name="age" value="<?php echo e($arr->age); ?>" class="form-control">
                                        </div>
                                    </div>
                                   
                                  
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date1">City :</label>
                                           
                                            <input type="text" name="city" value="<?php echo e($arr->city); ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shortDescription1">Address :</label>
                                            
                                            <textarea name="address"   rows="4" class="form-control"><?php echo e($arr->address); ?></textarea>
                                        </div>
                                    </div>
                                  </div>
                            </fieldset>


                       
 

                            <button type="submit" class="btn btn-primary" >Update</button>
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


 
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layout.layout1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>