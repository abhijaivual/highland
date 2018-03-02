<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  
<?php use Carbon\carbon; ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   
   
    <title>Highland Hospital</title>
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('app-assets/images/ico/apple-icon-60.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('app-assets/images/ico/apple-icon-76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('app-assets/images/ico/apple-icon-152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/bootstrap-admin-template/robust/app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="{{ URL::asset('app-assets/images/ico/favicon-32.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/bootstrap.min.css') }}">
      <!-- custom css link -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/custom.css') }}">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/fonts/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/fonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/vendors/css/sliders/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/vendors/css/extensions/pace.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/vendors/css/extensions/unslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/core/menu/menu-types/horizontal-top-icon-menu.min.css') }}">
    <!-- END VENDOR CSS-->

    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/app.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
    <!-- END ROBUST CSS-->

    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/app.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/core/colors/palette-climacon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/pages/users.min.css') }}">
    <!-- END Page Level CSS-->


    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
    <!-- END Custom CSS-->

  </head>

  <body data-open="hover" data-menu="horizontal-top-icon-menu" data-col="2-columns" class="horizontal-layout horizontal-top-icon-menu 2-columns ">
  <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu undefined navbar-dark navbar-border">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left">
              <a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            <li class="nav-item"><a href="index-2.html" class="navbar-brand nav-link">
             <!--  <img alt="branding logo" src="../../../app-assets/images/logo/robust-logo-light.png" data-expand="../../../app-assets/images/logo/robust-logo-light.png" data-collapse="../../../app-assets/images/logo/robust-logo-small.png" class="brand-logo"></a>-->
                  <h4 >Highland Hospital </h4></li>
            <li class="nav-item hidden-md-up float-xs-right">
              <a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container">
                <i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5"></i></a></li>
              <li class="nav-item nav-search"><a href="#" class="nav-link nav-link-search fullscreen-search-btn"><i class="ficon icon-search7"></i></a></li>
              <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand">
                <i class="ficon icon-expand2"></i></a></li>
              <li class="dropdown nav-item mega-dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link">Mega</a>
                <ul class="mega-dropdown-menu dropdown-menu row">
                  <li class="col-md-8">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="icon-paper">
                      
                    </i> News</h6>
                    <div id="mega-menu-carousel-example" class="responsive-slick">
                      <div><img src="../../../app-assets/images/slider/slider-2.png" alt="First slide" class="rounded img-fluid mb-1"><a href="#" class="news-title mb-0">Poster Frame PSD</a>
                        <p class="news-content"><span class="font-small-2">January 26, 2016</span></p>
                      </div>
                      <div><img src="../../../app-assets/images/slider/slider-5.png" alt="First slide" class="rounded img-fluid mb-1"><a href="#" class="news-title mt-1 mb-0">Header MockUp</a>
                        <p class="news-content"><span class="font-small-2">January 15, 2016</span></p>
                      </div>
                      <div><img src="../../../app-assets/images/slider/slider-6.png" alt="First slide" class="rounded img-fluid mb-1"><a href="#" class="news-title mt-1 mb-0">2 Poster PSD</a>
                        <p class="news-content"><span class="font-small-2">January 15, 2016</span></p>
                      </div>
                    </div>
                  </li>



                  <!-- <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="icon-shuffle3"></i> Drill down menu</h6>
                    <ul class="drilldown-menu">
                      <li class="menu-list">
                        <ul>
                          <li><a href="layout-2-columns.html" class="dropdown-item"><i class="icon-layout"></i> Page layouts & Templates</a></li>
                          <li><a href="#"><i class="icon-layers"></i> Multi level menu</a>
                            <ul>
                              <li><a href="#" class="dropdown-item"><i class="icon-share4"></i>  Second level</a></li>
                              <li><a href="#"><i class="icon-umbrella3"></i> Second level menu</a>
                                <ul>
                                  <li><a href="#" class="dropdown-item"><i class="icon-microphone2"></i>  Third level</a></li>
                                  <li><a href="#" class="dropdown-item"><i class="icon-head"></i> Third level</a></li>
                                  <li><a href="#" class="dropdown-item"><i class="icon-signal2"></i> Third level</a></li>
                                  <li><a href="#" class="dropdown-item"><i class="icon-camera8"></i> Third level</a></li>
                                </ul>
                              </li>
                              <li><a href="#" class="dropdown-item"><i class="icon-flag4"></i> Second level, third link</a></li>
                              <li><a href="#" class="dropdown-item"><i class="icon-box"></i> Second level, fourth link</a></li>
                            </ul>
                          </li>
                          <li><a href="color-palette-primary.html" class="dropdown-item"><i class="icon-marquee-plus"></i> Color pallet system</a></li>
                          <li><a href="sk-2-columns.html" class="dropdown-item"><i class="icon-edit2"></i> Page starter kit</a></li>
                          <li><a href="changelog.html" class="dropdown-item"><i class="icon-files-empty"></i> Change log</a></li>
                          <li><a href="http://support.pixinvent.com/" class="dropdown-item"><i class="icon-tencent-weibo"></i> Customer support center</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li> -->


                <!--   <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="icon-list2"></i> Accordion</h6>
                    <div id="accordionWrap" role="tablist" aria-multiselectable="true">
                      <div class="card no-border box-shadow-0 collapse-icon accordion-icon-rotate">
                        <div id="headingOne" role="tab" class="card-header p-0 pb-1 no-border"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionOne" aria-expanded="true" aria-controls="accordionOne" class="card-title">Accordion Group Item #1</a></div>
                        <div id="accordionOne" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" class="card-collapse collapse in">
                          <div class="card-body">
                            <p class="accordion-text">Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels chocolate cake liquorice cake wafer jelly beans croissant apple pie.</p>
                          </div>
                        </div>
                        <div id="headingTwo" role="tab" class="card-header p-0 pb-1 no-border"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo" class="card-title collapsed">Accordion Group Item #2</a></div>
                        <div id="accordionTwo" role="tabpanel" aria-labelledby="headingTwo"   aria-expanded="false" class="card-collapse collapse">
                          <div class="card-body">
                            <p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly marshmallow cake. Pastry oat cake chupa chups.</p>
                          </div>
                        </div>
                        <div id="headingThree" role="tab" class="card-header p-0 pb-1 no-border"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionThree" aria-expanded="false" aria-controls="accordionThree" class="card-title collapsed">Accordion Group Item #3</a></div>
                        <div id="accordionThree" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" class="card-collapse collapse">
                          <div class="card-body">
                            <p class="accordion-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut chocolate bar chocolate cake cupcake chocolate topping.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li> -->

                  <li class="col-md-4">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="icon-mail6"></i> Contact Us</h6>
                    <form>
                      <fieldset class="form-group position-relative has-icon-left">
                        <label for="inputName1" class="col-sm-3 form-control-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" id="inputName1" placeholder="John Doe" class="form-control">
                          <div class="form-control-position"><i class="icon-head"></i></div>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <label for="inputEmail1" class="col-sm-3 form-control-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" id="inputEmail1" placeholder="john@example.com" class="form-control">
                          <div class="form-control-position"><i class="icon-mail6"></i></div>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <label for="inputMessage1" class="col-sm-3 form-control-label">Message</label>
                        <div class="col-sm-9">
                          <textarea id="inputMessage1" rows="2" placeholder="Simple Textarea" class="form-control"></textarea>
                          <div class="form-control-position"><i class="icon-file-text"></i></div>
                        </div>
                      </fieldset>
                      <div class="col-sm-12 mb-1">
                        <button type="button" class="btn btn-primary float-xs-right"><i class="icon-send-o"></i> Send</button>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>

              <li>
              jhvd
            </li>

            </ul>
             @guest
                            <li><a href="{{ url('login') }}">Login</a></li>
                            <li><a href="{{ url('register') }}">Register</a></li>
                        @else
            <ul class="nav navbar-nav float-xs-right">
                
           <!--    <li class="dropdown dropdown-language nav-item"><a id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link"><i class="flag-icon flag-icon-gb"></i><span class="selected-language">English</span></a>
                <div aria-labelledby="dropdown-flag" class="dropdown-menu"><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-gb"></i> English</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-fr"></i> French</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-de"></i> German</a></div>
              </li> -->
              <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">{{count(auth()->user()->unreadNotifications)}} </span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">{{count(auth()->user()->unreadNotifications)}} New</span></h6>
                  </li>
                  <li class="list-group scrollable-container">
                     @foreach(json_decode(auth()->user()->unreadNotifications,true) as $notification)
                    <a href="{{ url('/profile/'.$notification['id'].'/'.$notification['data']['user']['id'])}}" class="list-group-item">

                      <div class="media">
                        <div class="media-left valign-middle">
                          @if(isset($notification['data']['user']['profile_image']))
                          <img src="{{URL::asset($notification['data']['user']['profile_image']) }}" width="50px" height="50px">
                          @else
                          <img src="{{URL::asset('user.png') }}" width="50px" height="50px">
                          @endif
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Pending for Verifcation!</h6>
                          <p class="notification-text font-small-3 text-muted"> {{ $notification['data']['user']['id'] }}</p>
                            <p class="notification-text font-small-3 text-muted"> {{ $notification['data']['user']['first_name'] }} &nbsp; 
                            {{ $notification['data']['user']['last_name'] }} </p>
                           <small> <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">
                            <?php
                             $now=carbon::now();
                            $created_at=$notification['created_at'];
                           //$diff=$created_at->diffForHumans($now);
                            ?>
                          {{$created_at}} Notifiyed

                         </time></small>
                        </div>
                      </div></a>
                      @endforeach
                   </li>
                  <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li>
                </ul>
              </li>

             <!--  <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-mail6"></i><span class="tag tag-pill tag-default tag-info tag-default tag-up">8</span></a>


                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag tag tag-default tag-info float-xs-right m-0">4 New</span></h6>
                  </li>
                  <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Margaret Govan</h6>
                          <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start the project.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Bret Lezama</h6>
                          <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Tuesday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Carie Berra</h6>
                          <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Friday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Eric Alsobrook</h6>
                          <p class="notification-text font-small-3 text-muted">We have project party this saturday night.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">last month</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
                </ul>
              </li> -->

               <?php
               
               $profileimage = Auth::user()->profile_image;
               $firstname= Auth::user()->first_name;
               ?>
              <li class="dropdown dropdown-user nav-item">
                @if(isset($profileimage))

                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="{{URL::asset($profileimage) }}" alt=""><i></i></span><span class="user-name">{{$firstname}}</span></a>

                @else

                 <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="{{URL::asset('user.png') }}" alt=""><i></i></span><span class="user-name">{{$firstname}}</span></a>

                @endif

                <div class="dropdown-menu dropdown-menu-right"><a href="{{url('/profile/edit/'.Auth::user()->id)}}" class="dropdown-item"><i class="icon-head"></i> Edit Profile</a>
                  <a href="{{url('/my/attendance/list/'.Auth::user()->id)}}" class="dropdown-item"><i class="icon-mail6"></i> My Attendance</a>
                  <div class="dropdown-divider"></div><a href="{{ url('/logout') }}" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
              </li>

            </ul>
            @endif
          </div>
        </div>
      </div>
    </nav>
  <!--   <div id="fullscreen-search" class="fullscreen-search">
      <form class="fullscreen-search-form">
        <input type="search" placeholder="Search..." class="fullscreen-search-input">
        <button type="submit" class="fullscreen-search-submit">Search</button>
      </form>
      <div class="fullscreen-search-content">
        <div class="fullscreen-search-options">
           <div class="row">
            <div class="col-sm-12">
              <fieldset>
                <label class="custom-control custom-checkbox display-inline">
                  <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description m-0">All</span>
                </label>
                <label class="custom-control custom-checkbox display-inline">
                  <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description m-0">People</span>
                </label>
                <label class="custom-control custom-checkbox display-inline">
                  <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description m-0">Project</span>
                </label>
                <label class="custom-control custom-checkbox display-inline">
                  <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description m-0">Task</span>
                </label>
              </fieldset>
            </div>
          </div>
        </div> 
         <div class="fullscreen-search-result mt-2">
          <div class="row">
            <div class="col-lg-4">
              <h3>People</h3>
              <div class="media"><a href="#" class="media-left"><img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="Generic placeholder image" class="media-object rounded-circle"></a>
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">Karmen Dartez</a></h5>
                  <p class="mb-0"><span class="tag tag-pill mr-1 tag-danger">JavaScript</span><span class="tag tag-pill mr-1 tag-primary">HTML</span></p>
                  <p><span class="font-weight-bold">Sr. Developer - </span><a href="mailto:john@example.com">karmen@example.com</a></p>
                </div>
              </div>
              <div class="media"><a href="#" class="media-left"><img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="Generic placeholder image" class="media-object rounded-circle"></a>
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">Scot Loh</a></h5>
                  <p class="mb-0"><span class="tag tag-pill mr-1 tag-danger">PhotoShop</span><span class="tag tag-pill mr-1 tag-warning">UX</span></p>
                  <p><span class="font-weight-bold">Sr. UI/UX Desugner - </span><a href="mailto:john@example.com">scot@example.com</a></p>
                </div>
              </div>
              <div class="media"><a href="#" class="media-left"><img src="../../../app-assets/images/portrait/small/avatar-s-5.png" alt="Generic placeholder image" class="media-object rounded-circle"></a>
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">Kim Willmore</a></h5>
                  <p class="mb-0"><span class="tag tag-pill mr-1 tag-warning">CSS</span><span class="tag tag-pill mr-1 tag-danger">HTML</span></p>
                  <p><span class="font-weight-bold">UI Developer - </span><a href="mailto:john@example.com">kim@example.com</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h3>Project</h3>
              <div class="media">
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">WordPress Template Support</a></h5>
                  <progress value="25" max="100" class="progress progress-xs progress-success mb-0">25%</progress>
                  <p class="mb-0">Collicitudin vel metus scelerisque ante  commodo.</p>
                  <p><span class="tag tag-pill tag-success">In Progress</span><span class="tag tag-default tag-default float-sm-right">25% Completed</span></p>
                </div>
              </div>
              <div class="media">
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">Application UI/UX</a></h5>
                  <progress value="100" max="100" class="progress progress-xs progress-info mb-0">100%</progress>
                  <p class="mb-0">Cetus scelerisque ante sollicitudin commodo.</p>
                  <p><span class="tag tag-pill tag-info">Completed</span><span class="tag tag-default tag-default float-sm-right">100% Completed</span></p>
                </div>
              </div>
              <div class="media">
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">SEO Project</a></h5>
                  <progress value="65" max="100" class="progress progress-xs progress-warning mb-0">65%</progress>
                  <p class="mb-0">Notifications scelerisque ante sollicitudin commodo.</p>
                  <p><span class="tag tag-pill tag-warning">Delayed</span><span class="tag tag-default tag-default float-sm-right">65% Completed</span></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h3>Task</h3>
              <div class="media">
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">Create the new layout for menu</a></h5>
                  <p class="mb-0">Pcelerisque ulla vel metus  ante sollicitudin commodo.</p>
                  <p><span class="tag tag-pill tag-danger">Open</span><span class="tag tag-default tag-default tag-default tag-icon float-sm-right"><i class="icon-calendar5"></i> 22 January, 16</span></p>
                </div>
              </div>
              <div class="media">
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">Addition features on footer</a></h5>
                  <p class="mb-0">Tuaiulla vel metus scelerisque ante sollicitudin commodo.</p>
                  <p><span class="tag tag-pill tag-warning">On hold</span><span class="tag tag-default tag-default tag-default tag-icon float-sm-right"><i class="icon-calendar5"></i> 24 January, 16</span></p>
                </div>
              </div>
              <div class="media">
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">Remove TODO comments</a></h5>
                  <p class="mb-0">Mulullametu vel  scelerisque ante sollicitudin commodo.</p>
                  <p><span class="tag tag-pill tag-info">Resolved</span><span class="tag tag-default tag-default tag-default tag-icon float-sm-right"><i class="icon-calendar5"></i> 25 January, 16</span></p>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div><span class="fullscreen-search-close"></span>
    </div> -->
    <div class="fullscreen-search-overlay"></div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- Horizontal navigation-->
    <div role="navigation" data-menu="menu-wrapper" class="header-navbar navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-bordered navbar-shadow">
      <!-- Horizontal menu content-->
      <div data-menu="menu-container" class="navbar-container main-menu-content">
        <!-- include ../../../includes/mixins-->
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="nav navbar-nav">
          <li class="dropdown nav-item" ><a href="/dashboard"  class="toggle nav-link"><i class="icon-home3"></i><span data-i18n="nav.dash.main">Dashboard</span></a>
          
          </li>

         


            @if(Auth::check())
          @if(Auth::user()->r_id==2 || Auth::user()->r_id==3 || Auth::user()->r_id==1)
            <li  class="dropdown nav-item"><a href="/registration/process-1/"  class="toggle nav-link"><i class="icon-list-alt"></i><span data-i18n="nav.dash.main">Registration</span></a>
          
          </li>
           @endif
           @endif
           



           <!-- <li  class="dropdown nav-item"><a href="/registration/process-2/"  class="toggle nav-link"><i class="icon-home3"></i><span data-i18n="nav.dash.main">Self-Registration</span></a>
          
          </li> -->
          @if(Auth::check())
          @if(Auth::user()->r_id==3 || Auth::user()->r_id==2)
          <li  class="dropdown nav-item"><a href="{{url('/profile')}}"  class="toggle nav-link">
          <i class="icon-group"></i><span data-i18n="nav.dash.main">Employee Profiles</span></a>
           </li>
           @endif
           @endif

            @if(Auth::check())
           <!-- <li  class="dropdown nav-item"><a href="{{ url('/myprofile/'.Auth::user()->id)}}"  class="toggle nav-link">
          <i class="icon-home3"></i><span data-i18n="nav.dash.main">My Profile</span></a>
           </li> -->
           <li  class="dropdown nav-item">
            
            <a href="{{ url('/view-profile/'.Auth::User()->id)}}"  class="toggle nav-link" >
          <i class="icon-user4"></i><span data-i18n="nav.dash.main">My Profile</span>
            </a>
      
           </li>
        
           @endif





            @if(Auth::check())
          @if(Auth::user()->r_id==3 || Auth::user()->r_id==2)
        <li data-menu="dropdown" class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="icon-clock-o"></i><span data-i18n="nav.templates.main">Attendance</span></a>
            <ul class="dropdown-menu">
               <li data-menu="">
               <a href="{{url('/upload-attendance')}}" data-toggle="dropdown" class="dropdown-item">Upload</a>
             </li>
              <li data-menu="">
               <a href="{{url('attendance/table')}}" data-toggle="dropdown" class="dropdown-item">All Attendance</a>
             </li>
              <li data-menu="">
               <a href="{{url('today/attendance/table')}}" data-toggle="dropdown" class="dropdown-item">Todays Attendance</a>
             </li>
              
            </ul>
          </li>
          @endif
          @endif
          
           @if(Auth::check())
          @if(Auth::user()->r_id==1 || Auth::user()->r_id==2 || Auth::user()->r_id==3)
        <li data-menu="dropdown" class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="icon-gear"></i><span data-i18n="nav.templates.main">Settings</span></a>
            <ul class="dropdown-menu">
              @if(Auth::user()->r_id==1)
               <li data-menu="">
               <a href="{{url('/roles')}}" data-toggle="dropdown" class="dropdown-item">New Roles</a>
             </li>
             @endif
             <li data-menu="">
               <a href="{{url('/departments')}}" data-toggle="dropdown" class="dropdown-item">New Departments</a>
             </li>
             <li data-menu="">
               <a href="{{url('/designations')}}" data-toggle="dropdown" class="dropdown-item">New Designations</a>
             </li>
               
              </li>
            </ul>
          </li>
          @endif
          @endif


          
            
             
          
            
           
          <li data-menu="dropdown" class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="icon-help2"></i><span data-i18n="nav.category.support">Support</span></a>
            <ul class="dropdown-menu">
              <li data-menu=""><a href="http://support.pixinvent.com/" data-toggle="dropdown" class="dropdown-item">Raise Support</a>
              </li>
              <li data-menu=""><a href="https://pixinvent.com/bootstrap-admin-template/robust/documentation" data-toggle="dropdown" class="dropdown-item">Documentation</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /horizontal menu content-->
    </div>
    <!-- Horizontal navigation-->

    <!-- ////////////////////////////////////////////////////////////////////////////-->







@yield('content')





    <footer class="footer undefined footer-dark">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; Highland Hospital 2018 All rights reserved <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">Powered By </a>Vual. </span><span class="float-md-right d-xs-block d-md-inline-block"> </span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <!-- build:js app-assets/js/vendors.min.js-->
    <script src="{{ URL::asset('app-assets/js/core/libraries/jquery.min.js') }}" type="text/javascript"></script>

    



    <script src="{{ URL::asset('app-assets/vendors/js/ui/tether.min.js ') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/js/core/libraries/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/ui/unison.min.js ') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/ui/blockUI.min.js ') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/ui/jquery.matchHeight-min.js ') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/ui/jquery-sliding-menu.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/sliders/slick/slick.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/ui/screenfull.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/extensions/pace.min.js') }}" type="text/javascript"></script>
    <!-- /build-->
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/vendors/js/charts/jquery.sparkline.min.js') }}"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/extensions/jquery.knob.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/js/scripts/extensions/knob.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/charts/raphael-min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/charts/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/data/jvector/visitor-data.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/charts/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/extensions/unslider-min.js') }}" type="text/javascript"></script>



    


    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->


    <!-- build:js app-assets/js/app.min.js-->
    <script src="{{ URL::asset('app-assets/js/core/app-menu.min.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/js/core/app.min.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/js/scripts/ui/fullscreenSearch.min.js')}}" type="text/javascript"></script>
    <!-- /build-->



    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    

   

  <!--   <script src="{{ URL::asset('app-assets/js/scripts/pages/dashboard-analytics.min.js')}}" type="text/javascript"></script> -->
    <!-- END PAGE LEVEL JS-->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-96096445-1', 'auto');
    ga('send', 'pageview');

  </script>
</body>


</html>