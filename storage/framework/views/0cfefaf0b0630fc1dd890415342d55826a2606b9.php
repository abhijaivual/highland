    

<?php $__env->startSection('content'); ?>

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1">
    <div class="card-header bg-transparent no-border">
        <h2 class="error-code text-xs-center mb-2">404</h2>
        <h3 class="text-uppercase text-xs-center">Access Restrict</h3>
    </div>
    <div class="card-body collapse in">
        <fieldset class="row py-2">
            <div class="input-group col-xs-12">
                
            </div>
        </fieldset>
        <div class="row py-2">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <a href="<?php echo e(url('dashboard')); ?>" class="btn btn-primary btn-block font-small-3"><i class="icon-home3"></i> Back to Dashboard</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <a href="" class="btn btn-danger btn-block font-small-3"><i class="icon-help2"></i>  Support</a>
            </div>
            </div>
        </div>
       
    </div>
</section>

        </div>
      </div>
    </div>
     <br>
               <br>
                <br>
               <br>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>