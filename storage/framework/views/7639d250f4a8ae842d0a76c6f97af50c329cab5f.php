 
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('app-assets/custom.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('app-assets/css/bootstrap-extended.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('app-assets/css/colors.min.css')); ?>">
<div class="app-content content container-fluid">
    <div class="content-wrapper">
 		<div class="content-header row">
        </div>

        	<div class="content-body">
			<div class="row">

    		<div class="col-xs-12 col-md-12 col-lg-12">
       			<div class="card">
         
            	<div class="card-block">
            	<form method="post" action="<?php echo e(url('/import')); ?>" enctype="multipart/form-data">
                  <h4 class="card-title"><center>Attendance Sheet</center></h4>
                 <center>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="file" name="file" placeholder="Upload">
                      <button type="submit" class="btn btn-primary">Upload</button>
                 </center>
              </form>
                      
            	
            	</div>
              <?php if(session('status')): ?>
                  <div class="alert alert-success">
                    <?php echo session('status'); ?>

                  </div>
              <?php endif; ?>
         
        		</div>
    		</div>

			</div>
			</div>

    
    </div>
  </div>


<br /><br /> <br /><br /> <br /><br />
<br /><br /> <br /><br />

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>