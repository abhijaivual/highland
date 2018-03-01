<?php $__env->startSection('content'); ?>

<div class="app-content content container-fluid">
  <div class="content-wrapper">
 		<div class="content-header row">
     <!-- code to redirect back to same page -->
      <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
      <?php endif; ?>
      <!-- Code ends -->

    </div>

      <div class="content-body">
			 <div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
       	  <div class="card">
         		<div class="card-block">
 						<h4 class="card-title">Add Role</h4></br>
 					 
            <div class="card-block border-top-blue-grey border-top-lighten-5">
              <div class="bug-list-search">
                <div class="bug-list-search-content">
                    <form action="/add_role" method="post">
                        <div class="position-relative">
                            <input type="text" name="role_name" id="search-contacts" class="form-control" placeholder="Role">

                            <div class="form-control-position" style="top: -3px;right: -10px;">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>

 						

 					
 						
 					</form>



   
    
<div class="row">
<div class="col-xs-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header no-border-bottom">
                <h4 class="card-title">Roles</h4>
                <a class="heading-elements-toggle">
                  <i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div id="daily-activity" class="table-responsive height-350">
                    <table class="table table-hover mb-0">
                        <thead>
                           <tr>
                                <th>Role Id</th>
                                <th>Role Name</th>
                                <th>Status</th>
                                <th>Action 1</th>
                               
                            </tr>

                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($arr->role_id); ?></td>
                                <td>
                                  <?php if(isset($roleid) && $roleid==$arr->role_id): ?>
                                  <form method="post" action="<?php echo e(url('/edit-role/submit/')); ?>">
                                  <input type="text" name="role_name" value="<?php echo e($arr->role_name); ?>">
                                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                  <input type="hidden" name="role_id" value="<?php echo e($roleid); ?>">
                                 
                                  <?php else: ?>
                                  <?php echo e($arr->role_name); ?>

                                  <?php endif; ?>
                                </td>
                                <td><?php echo e($arr->status); ?></td>
                                <td>
                                    <?php if(isset($roleid) && $roleid==$arr->role_id): ?>
                                    <button type="submit" class="btn btn-success">Update</button>
                                    </form>
                                    <?php else: ?>
                                      <a href="<?php echo e(url('/edit/role/'.$arr->role_id)); ?>"><button class="btn btn-info">Edit</button></a>
                                    <?php endif; ?>
                                </td>
                                <!-- <td><a href="<?php echo e(url('/remove/role/'.$arr->role_id)); ?>"><button class="btn btn-danger">Delete</button></a></td> -->
                              </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
</div>
</div>
</div>
</div>
</div>
</div>

 						

<br /><br /> 
<br /><br /> <br /><br /> 
<br /><br /> <br /><br />


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>