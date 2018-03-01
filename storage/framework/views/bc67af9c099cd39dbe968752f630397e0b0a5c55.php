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
          <div class="content-header-right col-md-6 col-xs-12">
            <div class="media width-250 float-xs-right">
              <div class="media-left media-middle">
                <div id="sp-bar-total-sales"></div>
              </div>
              <div class="media-body media-right text-xs-right">
                <button type="button" class="btn btn-primary mr-1"><i class="icon-head"></i> Edit</button>
              </div>
            </div>
          </div>
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
                       <a href="<?php echo e(url('/myprofile/'.$u->id)); ?>" > 
                      <button type="button" class="btn btn-danger mr-1"><i class="icon-plus4"></i> Profile</button></a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
           
            
              <?php $i=1; ?>
              <?php if(isset($user)): ?>
              <div class="list-group list-group-flush">
              <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(url('upload/employee/'.$arr->emp_id.'/'.$arr->cv)); ?>" class="list-group-item" download="">  <?php echo e($arr->cv); ?></a>
                
                <?php $i++; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <?php endif; ?>

              <?php if(isset($address_proof)): ?>
              <?php $__currentLoopData = $address_proof; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(url('upload/employee/'.$arr->emp_id.'/'.$arr->address_proof_doc)); ?>" class="list-group-item" download="">  <?php echo e($arr->address_proof_doc); ?></a>
                
                <?php $i++; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>

              <?php if(isset($certificate)): ?>
              <div class="list-group list-group-flush">
              <?php $__currentLoopData = $certificate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(url('upload/employee/'.$arr->emp_id.'/'.$arr->certificate_doc)); ?>" class="list-group-item" download="">  <?php echo e($arr->certificate_doc); ?></a>
                
                <?php $i++; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <?php endif; ?>

              <?php if(isset($expirience_letter)): ?>
               <div class="list-group list-group-flush">
              <?php $__currentLoopData = $expirience_letter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(url('upload/employee/'.$arr->emp_id.'/'.$arr->expirience_doc)); ?>" class="list-group-item" download="">  <?php echo e($arr->expirience_doc); ?></a>
                
                <?php $i++; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <?php endif; ?>

              <?php if(isset($pay_slip)): ?>
                <div class="list-group list-group-flush">
              <?php $__currentLoopData = $pay_slip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(url('upload/employee/'.$arr->emp_id.'/'.$arr->payslip_doc)); ?>" class="list-group-item" download="">  <?php echo e($arr->payslip_doc); ?></a>
                
                <?php $i++; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              <?php endif; ?>

           
          </div>
          
        </div>
        </div>
    </div>
    
    
    
   
</section>
<!--/ User Profile Cards -->


        </div>
      </div>
    </div>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>