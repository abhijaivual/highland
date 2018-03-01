 
<?php $__env->startSection('content'); ?>

   



    <div class="app-content content container-fluid">
      <div class="content-wrapper">
      <div class="content-body">
      <!-- Form wizard with number tabs section start -->
<section id="number-tabs">
    <div class="row">
        <?php if(session('status')): ?>
          <div class="alert alert-success">
          <?php echo e(session('status')); ?>

          </div>
          <?php endif; ?>
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Upload More Documents</h4>
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
                        <form action="<?php echo e(url('/upload/document/submit/')); ?>" method="post" class="number-tab-steps wizard-notification" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                             <input type="hidden" name="id" value="<?php echo e($arr->id); ?>">
                            <!-- Step 1 -->
                          
                            <fieldset>
                           

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


                                <button type="submit" class="btn btn-primary" >Upload</button>
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