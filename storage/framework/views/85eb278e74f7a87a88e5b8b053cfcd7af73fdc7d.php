<?php $__env->startSection('content'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('app-assets/custom.css')); ?>">


    


<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
<div class="content-body"><!--fitness stats-->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                            <div class="float-xs-left pl-2">
                                <span class="grey darken-1 block">Age</span>
                                <span class="font-large-3 line-height-1 text-bold-300">25</span>
                            </div>
                            <div class="float-xs-left mt-2">
                                <span class="grey darken-1 block">Years</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                            <div class="float-xs-left pl-2">
                                <span class="grey darken-1 block">Height</span>
                                <span class="font-large-3 line-height-1 text-bold-300">185</span>
                            </div>
                            <div class="float-xs-left mt-2">
                                <span class="grey darken-1 block">cm</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                            <div class="float-xs-left pl-2">
                                <span class="grey darken-1 block">Weight</span>
                                <span class="font-large-3 line-height-1 text-bold-300">64</span>
                            </div>
                            <div class="float-xs-left mt-2">
                                <span class="grey darken-1 block">Kg</span>
                                <span class="block"><i class="icon-arrow-down4 deep-orange accent-3"></i></span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 clearfix">
                            <div class="float-xs-left pl-2">
                                <span class="grey darken-1 block">Body mass index</span>
                                <span class="font-large-3 line-height-1 text-bold-300">22.3</span>
                            </div>
                            <div class="float-xs-left mt-2">
                                <span class="grey darken-1 block">Kg/m</span>
                                <span class="block"><i class="icon-arrow-up4 success"></i></span>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!--fitness stats-->



<!-- Displaying Attendnce -->
<section class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">My Task List</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
              
            <!-- search box ends here -->
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">

                    <?php if(isset($nodata)): ?>
                            <?php if(session('status')): ?>
                               <div class="alert alert-danger">
                                <?php echo e(session('status')); ?>

                               </div>
                            <?php endif; ?>
                    <div class="alert alert-danger">
                    <?php echo e($nodata); ?>

                    </div>
                    <?php else: ?>
                    <!-- Task List table -->
                    <table id="project-task-list" class="table table-white-space table-bordered row-grouping display table-responsive no-wrap icheck table-middle">
                        <thead>
                            <tr>
                               
                               
                                    <th>Employee</th>
                                    <th>status 1</th>
                                    <th>Date</th>
                                    <th>Shift</th>
                                    <th>Shift Start</th>
                                    <th>Shift End</th>
                                    <th>In-Time</th>
                                    <th>Out-Time</th>
                                    <th>Shift Hours</th>
                                    <th>Work Hours</th>
                                    <th>OT Hours</th>
                                    <th>Early Arrival</th>
                                    <th>Late Arrival</th>
                                     <th>Early Departure</th>
                                    <th>Late Departure</th>
                                    <th>Status 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- ABC Project -->
                               <?php $__currentLoopData = $attendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                 

                                  <td class="text-xs-center">
                                    <span class="avatar avatar-busy">
                                        <?php if(isset($arr->profile_image)): ?>
                                        <a href="<?php echo e(url('/employee/'.$arr->id)); ?>">
                                        <img src="<?php echo e(URL::asset($arr->profile_image)); ?>" alt="avatar" data-toggle="tooltip" data-placement="right" title="<?php echo e($arr->first_name); ?>"><i class=""><?php echo e($arr->id); ?></i>
                                        </a>
                                        <?php else: ?>
                                         <a href="<?php echo e(url('/employee/'.$arr->id)); ?>">
                                        <img src="<?php echo e(URL::asset('user.png')); ?>" alt="avatar" data-toggle="tooltip" data-placement="right" title="<?php echo e($arr->first_name); ?>"><i class=""><?php echo e($arr->id); ?></i>
                                        </a>
                                        <?php endif; ?>
                                    </span>
                                </td>

                                <td>
                                     <?php if(!isset($arr->in_time) && $arr->attendance_status!='a' && $arr->attendance_status!='A'): ?>
                                        <span class="tag tag-default tag-warning">Miss</span>
                                        </button>
                                       <?php elseif($arr->late_arival>=10): ?>
                                         <span class="tag tag-default tag-warning">Late</span>
                                        <?php elseif($arr->attendance_status=='p' || $arr->attendance_status=='P'): ?>
                                           <span class="tag tag-default tag-sucess">present</span>
                                      <?php elseif($arr->attendance_status=='a' || $arr->attendance_status=='A' && (!isset($arr->in_time) && (!isset($arr->out_time)))): ?>
                                        <span class="tag tag-default tag-danger">Absent</span>
                                      <?php endif; ?>
                                </td>
                                 <td><?php echo e($arr->att_date); ?></td>
                                    <td><?php echo e($arr->shift); ?></td>
                                    <td><?php echo e($arr->shift_start); ?></td>
                                    <td><?php echo e($arr->shift_end); ?></td>
                                    <td><?php echo e($arr->in_time); ?></td>
                                    <td><?php echo e($arr->out_time); ?></td>
                                    <td><?php echo e($arr->shift_hrs); ?></td>
                                    <td><?php echo e($arr->work_hrs); ?></td>
                                    <td><?php echo e($arr->ot_hrs); ?></td>
                                    <td><?php echo e($arr->early_arival); ?></td>
                                    <td><?php echo e($arr->late_arival); ?></td>
                                    <td><?php echo e($arr->early_departure); ?></td>
                                    <td><?php echo e($arr->late_departure); ?></td>
                                    <td><?php echo e($arr->attendance_status); ?></td>


                               
                            </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                    <th>Employee</th>
                                    <th>status 1</th>
                                    <th>Date</th>
                                    <th>Shift</th>
                                    <th>Shift Start</th>
                                    <th>Shift End</th>
                                    <th>In-Time</th>
                                    <th>Out-Time</th>
                                    <th>Shift Hours</th>
                                    <th>Work Hours</th>
                                    <th>OT Hours</th>
                                    <th>Early Arrival</th>
                                    <th>Late Arrival</th>
                                     <th>Early Departure</th>
                                    <th>Late Departure</th>
                                    <th>Status 2</th>
                            </tr>
                        </tfoot>
                    </table>
                    <?php endif; ?>
                    <!--/ Task List table -->

                    <center>
                       <?php if(Auth::check()): ?>

                <button class="btn btn-primary btn-sm">

              <a href="<?php echo e(url('/employee/'.Auth::user()->id)); ?>">
                  <i class="icon-plus4 black">View More</i>
              </a>
            </button>
            <?php endif; ?>
        </center>

                </div>
            </div>
        </div>
    </div>

    
</section>


<!-- Display Attendance Ends here -->

<!-- activity charts -->
<div class="row match-height">
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header no-border-bottom">
                <h4 class="card-title">Activity Chart <span class="text-muted text-bold-400">Weekly</span></h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <ul class="list-inline text-xs-right m-0">
                        <li>
                            <h6><i class="icon-circle primary"></i> Runnig</h6>
                        </li>
                        <li class="ml-1">
                            <h6><i class="icon-circle success"></i> Walking</h6>
                        </li>
                        <li class="ml-1">
                            <h6><i class="icon-circle warning"></i> Cycling</h6>
                        </li>
                    </ul>
                    <div id="weekly-activity-chart" class="height-250"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-body mt-2">
                <div class="card-block">
                    <div id="activity-division" class="height-250 echart-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ activity charts -->

<!-- fitness target -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                        <div class="my-1 text-xs-center">
                            <div class="card-header mb-2 pt-0">
                                <span class="info">Steps</span>
                                <h3 class="font-large-2 text-bold-200">3,261</h3>
                            </div>
                            <div class="card-body">
                                <input type="text" value="65" class="knob hide-value responsive angle-offset" data-angleOffset="40" data-thickness=".15" data-linecap="round" data-width="130" data-height="130" data-inputColor="#e1e1e1" data-readOnly="true" data-fgColor="#00BCD4" data-knob-icon="icon-feedback2">
                                <ul class="list-inline clearfix mt-1 mb-0">
                                    <li class="border-right-grey border-right-lighten-2 pr-2">
                                        <h2 class="grey darken-1 text-bold-400">65%</h2>
                                        <span class="success">Completed</span>
                                    </li>
                                    <li class="pl-2">
                                        <h2 class="grey darken-1 text-bold-400">35%</h2>
                                        <span class="danger">Remaining</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                        <div class="my-1 text-xs-center">
                            <div class="card-header mb-2 pt-0">
                                <span class="deep-orange">Distance</span>
                                <h3 class="font-large-2 text-bold-200">7.6 <span class="font-medium-1 grey darken-1 text-bold-400">mile</span></h3>
                            </div>
                            <div class="card-body">
                                <input type="text" value="70" class="knob hide-value responsive angle-offset" data-angleOffset="0" data-thickness=".15" data-linecap="round" data-width="130" data-height="130" data-inputColor="#e1e1e1" data-readOnly="true" data-fgColor="#FF5722" data-knob-icon="icon-user2">
                                <ul class="list-inline clearfix mt-1 mb-0">
                                    <li>
                                        <h2 class="grey darken-1 text-bold-400">10</h2>
                                        <span class="deep-orange">Miles Today's Target</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                        <div class="my-1 text-xs-center">
                            <div class="card-header mb-2 pt-0">
                                <span class="success">Calories</span>
                                <h3 class="font-large-2 text-bold-200">4,025 <span class="font-medium-1 grey darken-1 text-bold-400">kcal</span></h3>
                            </div>
                            <div class="card-body">
                                <input type="text" value="81" class="knob hide-value responsive angle-offset" data-angleOffset="20" data-thickness=".15" data-linecap="round" data-width="130" data-height="130" data-inputColor="#e1e1e1" data-readOnly="true" data-fgColor="#009688" data-knob-icon="icon-users">
                                <ul class="list-inline clearfix mt-1 mb-0">
                                    <li>
                                        <h2 class="grey darken-1 text-bold-400">5000</h2>
                                        <span class="success">kcla Today's Target</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12">
                        <div class="my-1 text-xs-center">
                            <div class="card-header mb-2 pt-0">
                                <span class="danger">Heart Rate</span>
                                <h3 class="font-large-2 text-bold-200">102 <span class="font-medium-1 grey darken-1 text-bold-400">BPM</span></h3>
                            </div>
                            <div class="card-body">
                                <input type="text" value="75" class="knob hide-value responsive angle-offset" data-angleOffset="20" data-thickness=".15" data-linecap="round" data-width="130" data-height="130" data-inputColor="#e1e1e1" data-readOnly="true" data-fgColor="#DA4453" data-knob-icon="icon-heart6">
                                <ul class="list-inline clearfix mt-1 mb-0">
                                    <li>
                                        <h2 class="grey darken-1 text-bold-400">125</h2>
                                        <span class="danger">BPM Highest</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ fitness target -->

<!-- friends & weather charts -->
<div class="row match-height">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <h4 class="card-title">Daily Diet</h4>
                    <p class="card-text">Some quick example text to build on the card.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-primary float-xs-right">4</span> Protein Milk
                    </li>
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-info float-xs-right">2</span> oz Water
                    </li>
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-danger float-xs-right">8</span> Vegetable Juice
                    </li>
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-warning float-xs-right">1</span> Sugar Free Jello-O
                    </li>
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-success float-xs-right">3</span> Protein Meal
                    </li>
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-danger float-xs-right">8</span> Fruit Juice
                    </li>
                </ul>
                <div class="card-block">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card no-border box-shadow-0">
            <div class="card-body collapse in">
                <div class="weather-date position-relative">
                    <div class="date-info position-absolute bg-light-blue bg-lighten-1 white mt-3 p-1 text-xs-center">
                        <span class="date block">14</span>
                        <span class="month">Nov</span>
                    </div>
                </div>
                <div class="card-block bg-light-blue bg-lighten-4">
                    <ul class="list-inline text-xs-right mb-0">
                        <li><a data-action="reload"><i class="icon-reload font-medium-4 light-blue"></i></a></li>
                    </ul>
                    <div class="animated-weather-icons text-xs-center">
                        <svg version="1.1" id="cloudDrizzleAlt" class="climacon climacon_cloudDrizzleAlt climacon-light-blue climacon-darken-2 height-200" viewBox="15 15 70 70">
                            <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleAlt">
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"></path>
                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="weather-details text-xs-center">
                        <span class="mt-2 block light-blue darken-2">Rain</span>
                        <span class="font-medium-4 text-bold-500 light-blue darken-4">Chicago, US</span>
                    </div>
                </div>
                <div class="card-footer bg-light-blue bg-darken-3 py-3 no-border">
                    <div class="row">
                        <div class="col-xs-4 text-xs-center display-table-cell">
                            <i class="icon-wind font-large-1 white lighten-3 valign-middle"></i> <span class="white valign-middle">2MPH</span>
                        </div>
                        <div class="col-xs-4 text-xs-center display-table-cell">
                            <i class="icon-sun2 font-large-1 white lighten-3 valign-middle"></i> <span class="white valign-middle">2%</span>
                        </div>
                        <div class="col-xs-4 text-xs-center display-table-cell">
                            <i class="icon-thermometer font-large-1 white lighten-3 valign-middle"></i> <span class="white valign-middle">13.0&deg;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Friends</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div id="friends-activity" class="list-group height-400 position-relative">
                    <a href="#" class="list-group-item list-group-item-action media active">
                        <div class="media-left">
                            <img class="media-object avatar avatar-sm rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="list-group-item-heading">Kristopher Candy <span class="font-medium-4 float-xs-right">1,0215</span></h5>
                            <p class="list-group-item-text"><span class="tag tag-success">Running</span><span class="tag tag-warning ml-1">Cycling</span></p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media">
                        <div class="media-left">
                            <img class="media-object avatar avatar-sm rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="list-group-item-heading">Lawrence Fowler <span class="font-medium-4 float-xs-right">2,0215</span></h5>
                            <p class="list-group-item-text"><span class="tag tag-danger">Dancing</span> <span class="tag tag-primary ml-1">Fitness</span></p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media">
                        <div class="media-left">
                            <img class="media-object avatar avatar-sm rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="list-group-item-heading">Linda Olson <span class="font-medium-4 float-xs-right">1,112</span></h5>
                            <p class="list-group-item-text"><span class="tag tag-success">Running</span> <span class="tag tag-warning ml-1">Cycling</span> <span class="tag bg-grey ml-1">Other</span></p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media">
                        <div class="media-left">
                            <img class="media-object avatar avatar-sm rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="list-group-item-heading">Roy Clark <span class="font-medium-4 float-xs-right">2,815</span></h5>
                            <p class="list-group-item-text"><span class="tag tag-warning">Fitness</span> <span class="tag tag-danger ml-1">Dancing</span></p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media">
                        <div class="media-left">
                            <img class="media-object avatar avatar-sm rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-11.png" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="list-group-item-heading">Tammy Gonzales <span class="font-medium-4 float-xs-right">3,226</span></h5>
                            <p class="list-group-item-text"><span class="tag tag-danger">Dancing</span> <span class="tag tag-success ml-1">Running</span></p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media">
                        <div class="media-left">
                            <img class="media-object avatar avatar-sm rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-12.png" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="list-group-item-heading">Justin Hawkins <span class="font-medium-4 float-xs-right">4,564</span></h5>
                            <p class="list-group-item-text"><span class="tag tag-success">Running</span> <span class="tag tag-primary ml-1">Fitness</span></p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media">
                        <div class="media-left">
                            <img class="media-object avatar avatar-sm rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <h5 class="list-group-item-heading">Roy Clark <span class="font-medium-4 float-xs-right">2,815</span></h5>
                            <p class="list-group-item-text"><span class="tag tag-warning">Fitness</span> <span class="tag tag-danger ml-1">Dancing</span></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- friends & weather charts -->

<!-- Running Routes & Daily Activities  -->
<div class="row">
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header no-border-bottom">
                <h4 class="card-title">Running Routes</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <div id="routes" class="height-300"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header no-border-bottom">
                <h4 class="card-title">Daily Activity</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
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
                                <th><input type="checkbox" id="icheck-input-all" class="icheck-activity"></th>
                                <th>Time</th>
                                <th>Activity</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-truncate"><input type="checkbox" id="icheck-input-1" class="icheck-activity" checked></td>
                                <td class="text-truncate">5.00 A.M</td>
                                <td class="text-truncate">Bricks Walking</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">Done</span></td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><input type="checkbox" id="icheck-input-2" class="icheck-activity" checked></td>
                                <td class="text-truncate">5.30 A.M</td>
                                <td class="text-truncate">Morning Exercise</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">Done</span></td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><input type="checkbox" id="icheck-input-3" class="icheck-activity"></td>
                                <td class="text-truncate">6.30 A.M</td>
                                <td class="text-truncate">Yoga</td>
                                <td class="text-truncate"><span class="tag tag-default tag-danger">Missed</span></td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><input type="checkbox" id="icheck-input-4" class="icheck-activity" checked></td>
                                <td class="text-truncate">7.00 A.M</td>
                                <td class="text-truncate">Gym</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">Done</span></td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><input type="checkbox" id="icheck-input-5" class="icheck-activity" checked></td>
                                <td class="text-truncate">8.00 A.M</td>
                                <td class="text-truncate">Steam Bath</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">Done</span></td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><input type="checkbox" id="icheck-input-6" class="icheck-activity"></td>
                                <td class="text-truncate">9.00 A.M</td>
                                <td class="text-truncate">Meditation</td>
                                <td class="text-truncate"><span class="tag tag-default tag-danger">Missed</span></td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><input type="checkbox" id="icheck-input-7" class="icheck-activity"></td>
                                <td class="text-truncate">8.00 P.M</td>
                                <td class="text-truncate">Bricks Walking</td>
                                <td class="text-truncate"><span class="tag tag-default tag-warning">Delayed</span></td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><input type="checkbox" id="icheck-input-8" class="icheck-activity"></td>
                                <td class="text-truncate">9.00 P.M</td>
                                <td class="text-truncate">Exercise</td>
                                <td class="text-truncate"><span class="tag tag-default tag-warning">Delayed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Running Routes & Daily Activities  -->

<!-- fitness info & twitter, facebook -->
<div class="row">
    <div class="col-xl-8 col-lg-12 col-md-12">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="../../../app-assets/images/pages/fitness-slide-1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="../../../app-assets/images/pages/fitness-slide-2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="../../../app-assets/images/pages/fitness-slide-3.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev">
                                <span class="icon-prev" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" role="button" data-slide="next">
                                <span class="icon-next" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="card-block">
                            <h5 class="card-title">Health News &amp; Fitness Advice</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                            <span class="float-xs-left">2 days ago</span>
                            <span class="tags float-xs-right">
                                <span class="tag tag-pill tag-primary">Branding</span>
                            <span class="tag tag-pill tag-danger">Design</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card profile-card-with-cover">
                    <div class="card-body">
                        <div class="card-img-top img-fluid bg-cover height-200" style="background: url('../../../app-assets/images/pages/fitness-profile.jpg') 0 40%;"></div>
                        <div class="card-profile-image">
                            <img src="../../../app-assets/images/portrait/small/avatar-s-8.png" class="rounded-circle img-border box-shadow-1" alt="Card image">
                        </div>
                        <div class="profile-card-with-cover-content text-xs-center">
                            <div class="my-2">
                                <h4 class="card-title">Susan Garrett</h4>
                                <ul class="list-inline clearfix mt-2">
                                    <li class="mr-2">
                                        <h2 class="block">-2.05 <span class="font-small-3 text-muted">KG</span></h2> Body Fat</li>
                                    <li class="mr-2">
                                        <h2 class="block">52 <span class="font-small-3 text-muted">KG</span></h2> Target</li>
                                    <li>
                                        <h2 class="block">-2.1 <span class="font-small-3 text-muted">KG</span></h2> Weight</li>
                                </ul>
                            </div>
                            <div class="card-block">
                                <a href="#" class="btn btn-social btn-min-width mr-1 mb-1 btn-linkedin"><span class="icon-ei-plus"></span> <span class="pl-1">Follow</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-md-12">
        <div class="row">
            <div class="col-xl-12 col-lg-6 col-md-12">
                <div class="card bg-twitter white">
                    <div class="card-body p-2">
                        <div class="card-block">
                            <div class="text-xs-center mb-1">
                                <i class="icon-twitter3 font-large-3"></i>
                            </div>
                            <div class="tweet-slider">
                                <ul class="text-xs-center">
                                    <li>Congratulations to Rob Jones in accounting for winning our <span class="yellow">#NFL</span> football pool!</li>
                                    <li>Contests are a great thing to partner on. Partnerships immediately <span class="yellow">#DOUBLE</span> the reach.</li>
                                    <li>Puns, humor, and quotes are great content on <span class="yellow">#Twitter</span>. Find some related to your business.</li>
                                    <li>Are there <span class="yellow">#common-sense</span> facts related to your business? Combine them with a great photo.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6 col-md-12">
                <div class="card bg-facebook white">
                    <div class="card-body p-2">
                        <div class="card-block">
                            <div class="text-xs-center mb-1">
                                <i class="icon-facebook3 font-large-3"></i>
                            </div>
                            <div class="fb-post-slider">
                                <ul class="text-xs-center">
                                    <li>Congratulations to Rob Jones in accounting for winning our #NFL football pool!</li>
                                    <li>Contests are a great thing to partner on. Partnerships immediately #DOUBLE the reach.</li>
                                    <li>Puns, humor, and quotes are great content on #Twitter. Find some related to your business.</li>
                                    <li>Are there #common-sense facts related to your business? Combine them with a great photo.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ fitness info & twitter, facebook -->

        </div>
      </div>
    </div>










<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>