<?php $__env->startSection('content'); ?>

<div class="app-content content container-fluid">
    <div class="content-wrapper">
 		   <div class="content-header row">

          <?php if(session('status')): ?>
          <div class="alert alert-success">
          <?php echo e(session('status')); ?>

          </div>
          <?php endif; ?>

        </div>

      <div class="content-body">
			 <div class="row">
			   <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="card">
         			<div class="card-block">

 						   <h4 class="card-title">Add Department</h4></br>

                <div class="card-block border-top-blue-grey border-top-lighten-5">
              <div class="bug-list-search">
                <div class="bug-list-search-content">
                   <form action="/add_department" method="post">
                        <div class="position-relative">
                            <input type="text" name="department_name" id="search-contacts" class="form-control" placeholder="Department">

                            <div class="form-control-position" style="top: -3px;right: -10px;">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
 					     
                 


<div class="row">
<div class="col-xs-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header no-border-bottom">
                <h4 class="card-title">Departments</h4>
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
                                <th>Department Id</th>
                                <th>Department Name</th>
                                <th>Status</th>
                                <th>Action 1</th>
                                <th>Action 2</th>
                            </tr>

                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($arr->dept_id); ?></td>
                                <td>
                                  <?php if(isset($deptid) && $deptid==$arr->dept_id): ?>
                                  <form method="post" action="<?php echo e(url('/edit-department/submit/')); ?>">
                                  <input type="text" name="department_name" value="<?php echo e($arr->department_name); ?>">
                                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                  <input type="hidden" name="dept_id" value="<?php echo e($deptid); ?>">
                                 
                                  <?php else: ?>
                                  <?php echo e($arr->department_name); ?>

                                  <?php endif; ?>
                                </td>
                                <td><?php echo e($arr->status); ?></td>
                                <td>
                                    <?php if(isset($deptid) && $deptid==$arr->dept_id): ?>
                                    <button type="submit" class="btn btn-success">Update</button>
                                    </form>
                                    <?php else: ?>
                                      <a href="<?php echo e(url('/edit/department/'.$arr->dept_id)); ?>"><button class="btn btn-info">Edit</button></a>
                                    <?php endif; ?>
                                </td>
                                <td><a href="<?php echo e(url('')); ?>"><button class="btn btn-danger">Delete</button></a></td>
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