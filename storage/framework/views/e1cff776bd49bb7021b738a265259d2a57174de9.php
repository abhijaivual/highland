 
<?php $__env->startSection('content'); ?>




    <div class="app-content content container-fluid">
      <div class="content-wrapper">
     <!--    <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12">
            <h2 class="content-header-title mb-0">Horizontal Forms</h2>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Horizontal Forms</a>
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
            <p class="lead">Horizontal Forms labels have inline styling where form controls are in the same line as its label. Add .form-horizontal class to the form tag to have horizontal form styling. You can always add more stuff like form sections, form control borders, tooltips, icons, round form controls, square form controls.</p>
          </div>
        </div> -->
        <div class="content-body"><!-- Basic form layout section start -->
<section id="horizontal-form-layouts">

	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            <div class="card-header">
	                <h4 class="card-title" id="horz-layout-basic">Project Info</h4>
	                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
        			<div class="heading-elements">
	                    <ul class="list-inline mb-0">
	                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
	                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
	                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
	                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
	                    </ul>
	                </div>
	            </div>
	            <div class="card-body collapse in">
	                <div class="card-block">
						<div class="card-text">
							<p>This is the basic horizontal form with labels on left and form controls on right in one line. Add <code>.form-horizontal</code> class to the form tag to have horizontal form styling. To define form sections use <code>form-section</code> class with any heading tags.</p>
						</div>
	                       <form class="form form-horizontal" method="post" action="<?php echo e(url('/registration-1/submit')); ?>">
	                    	<div class="form-body">
	                    	
	                    		<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">First Name</label>
		                            <div class="col-md-9">
		                            	<input type="text"  value="<?php echo e(old('first_name')); ?>" class="form-control" placeholder="First Name" name="first_name">
		                            </div>
		                        </div>
                              <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput3">Last Name</label>
                                <div class="col-md-9">
                                  <input type="text"  value="<?php echo e(old('last_name')); ?>" class="form-control" placeholder="Last Name" name="last_name">
                                </div>
                            </div>
	                    		<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
		                            <div class="col-md-9">
		                            	<input type="email" id="email" value="<?php echo e(old('email')); ?>" class="form-control" placeholder="E-mail" name="email">
		                            </div>
		                        </div>

			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Employee-Id</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="emp_id" value="<?php echo e(old('emp_id')); ?>" class="form-control" placeholder="Employee-Id" name="emp_id">
		                            </div>
								 </div>



		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Password</label>
									<div class="col-md-9">
	                            		<input type="password" id="password" value="<?php echo e(old('password')); ?>" class="form-control" placeholder="Password" name="password">
	                            	</div>
		                        </div>


		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Confirm Password</label>
									<div class="col-md-9">
	                            		<input type="password" id="confirm_password" value="<?php echo e(old('confirm_password')); ?>" class="form-control" placeholder="Confirm Password" name="password_confirmation">
	                            	</div>
		                        </div>
		                        

		                      <h4 class="form-section"><i class="icon-clipboard4"></i> Office Info</h4>
						

										<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Department</label>
	                            	<div class="col-md-9">
                                            <select class="c-select form-control" id="department_id" name="department_id">
                                            
                                             
                                                <?php foreach($department as $arr)
                 								 {
                								  ?>
                 								 <option value="<?php echo e($arr->dept_id); ?>"><?php echo e($arr->department_name); ?></option>
                								  <?php
                 								 }
                 								 ?>

                                            </select>
                                        </div>
                                        </div>


                                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Designation</label>
	                            	<div class="col-md-9">
                                            <select class="c-select form-control" id="designation_id" name="designation_id">
                                               
                                              <?php foreach($designation as $arr)
                 								 {
                								  ?>
                 								 <option value="<?php echo e($arr->desig_id); ?>"><?php echo e($arr->designation_name); ?></option>
                								  <?php
                 								 }
                 								 ?>
                                            </select>
                                        </div>
                                        </div>


                                         <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Date Of Join</label>
	                            	<div class="col-md-9">
                                            <input type="date" class="form-control" name="doj" id="doj" value="<?php echo e(old('doj')); ?>" >
                                        </div>
                                    </div>


       <div class="form-group row">

	  <label class="col-md-3 label-control" for="projectinput2">Employee Type</label>
	  	<div class="col-md-9">
            <a class="heading-elements-toggle">
            	<i class="icon-ellipsis font-medium-3"></i></a>
             <div class="card-body collapse in">
             <fieldset>
                <label class="custom-control custom-radio">
                  <input id="radioStacked1" name="employee_type" value="Permanent" type="radio" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Permanent</span>
                </label>

              </fieldset>
              <fieldset>
                <label class="custom-control custom-radio">
                  <input id="radioStacked2" name="employee_type" value="Temporary" type="radio" checked class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Temporary</span>
                </label>
              </fieldset>
                 </div>
        </div>
    </div>


								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Role-Id</label>
	                            	<div class="col-md-9">
                                            <select class="c-select form-control" id="r_id" name="r_id">
                                              
                                               <?php foreach($role as $r)
                  {
                  ?>
                  <option value="<?php echo e($r->role_id); ?>"><?php echo e($r->role_name); ?></option>
                  <?php
                  }
                  ?>
                                            </select>
                                        </div>
                                        </div>
 


		                       

		                       

		                        
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
								
								
							</div>

	                        <div class="form-actions">
	                            <button type="button" class="btn btn-warning mr-1">
	                            	<i class="icon-cross2"></i> Cancel
	                            </button>
	                          

	                            <button type="submit" class="btn btn-primary">
	                                <i class="icon-check2"></i> register
	                            </button>
	                        </div>
	                    </form>
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