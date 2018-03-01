<?php $__env->startSection('content'); ?>



 <div class="app-content content container-fluid">
      <div class="content-wrapper">
       <!--  <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12">
            <h2 class="content-header-title mb-0">Profile</h2>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Users</a>
                  </li>
                 
                </ol>
              </div>
            </div>
          </div>
        -->
          <!-- <div class="content-header-right col-md-6 col-xs-12">
            <div class="media width-250 float-xs-right">
              <div class="media-left media-middle">
                <div id="sp-bar-total-sales"></div>
              </div>
              <div class="media-body media-right text-xs-right">
              
              </div>
            </div>
          </div> -->
          <div class="content-header-lead col-xs-12 mt-2">
            <p class="lead"></p>
          </div>
        </div> 
        <div class="content-body">
            

<!-- User Profile Cards -->
<section id="user-profile-cards" >
   <!--  <div class="col-xs-12">
        <h4>Employee Profile Cards</h4>
        <p>User profile cards with border & shadow variant.</p>
    </div> -->
    <!--  <div class="col-xl-1  col-md-1 ">
     </div> -->
     <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xl-12  col-md-12  col-xs-12">
        <div class="card">
            <div class="text-xs-center">
                <div class="card-block">
                    <img src="<?php echo e(url($u->profile_image)); ?>" class="rounded-circle  height-150" alt="Card image">
                </div>
                <div class="card-block">
                    <h4 class="card-title"> <?php echo e($u->first_name); ?><?php echo e($u->last_name); ?></h4>
                    <h6 class="card-subtitle text-muted"><?php echo e($u->designation_name); ?></h6>
                      <button type="button" class="btn btn-primary mr-1"><i class="icon-head"></i> Edit</button>
                </div>
                <div class="card-block">
                   <a href="<?php echo e(url('/my-resume/'.$u->id)); ?>" >
                    <button type="button" class="btn btn-danger mr-1"><i class="icon-plus4"></i> Resume</button></a>
                    <a href="<?php echo e(url('/my-address-proof/'.$u->id)); ?>" > 
                      <button type="button" class="btn btn-primary mr-1"><i class="icon-head"></i> Address-Proof</button></a>
                     <a href="<?php echo e(url('/my-certificates/'.$u->id)); ?>" > 
                      <button type="button" class="btn btn-danger mr-1"><i class="icon-plus4"></i> Certificates</button></a>
                     <a href="<?php echo e(url('/my-experience/'.$u->id)); ?>" >
                      <button type="button" class="btn btn-primary mr-1"><i class="icon-head"></i> Experience </button></a>
                     <a href="<?php echo e(url('/my-pay-slips/'.$u->id)); ?>" > 
                      <button type="button" class="btn btn-danger mr-1"><i class="icon-plus4"></i> Pay Slips</button></a>
                   
                </div>
            </div>
            <div class="row">
            <div class="col-md-6">
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item"> Full Name&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo e($u->first_name); ?>&nbsp;&nbsp;<?php echo e($u->last_name); ?></a>
                <a href="#" class="list-group-item">DOB&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo e($u->dob); ?></a>
                <a href="#" class="list-group-item">Email&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo e($u->email); ?></a>
                <a href="#" class="list-group-item">Contact Number&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo e($u->phone); ?></a>
                 <a href="#" class="list-group-item">City&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo e($u->city); ?></a>
                <a href="#" class="list-group-item">Age&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo e($u->age); ?></a>
                <a href="#" class="list-group-item">Gender&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo e($u->gender); ?></a>
                <a href="#" class="list-group-item">Address&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo e($u->address); ?></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="list-group list-group-flush">
               <a href="#" class="list-group-item">Department Name&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo e($u->department_name); ?></a>
                <a href="#" class="list-group-item">Designation&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo e($u->designation_name); ?></a>
                <a href="#" class="list-group-item">Date Of Join&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo e($u->doj); ?></a>
                 <a href="#" class="list-group-item">Employee Type&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo e($u->employee_type); ?></a>
                <a href="#" class="list-group-item">Reffered By&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo e($u->reffered_by); ?></a>
               
            </div>
          </div>
        </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- <div class="col-xl-1  col-md-1">
     </div> -->
    
   
</section>
<!--/ User Profile Cards -->


        </div>
      </div>
    </div>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>