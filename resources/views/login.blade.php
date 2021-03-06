<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  
    <title>Highland Hospital</title>
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('app-assets/images/ico/apple-icon-60.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('app-assets/images/ico/apple-icon-76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('app-assets/images/ico/apple-icon-152.png') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/vendors/css/extensions/pace.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/vendors/css/forms/icheck/custom.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/app.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/core/menu/menu-types/horizontal-top-icon-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/core/menu/menu-types/vertical-overlay-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/pages/login-register.min.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
    <!-- END Custom CSS-->
  </head>
  <body data-open="hover" data-menu="horizontal-top-icon-menu" data-col="1-column" class="horizontal-layout horizontal-top-icon-menu 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header no-border">
                <div class="card-title text-xs-center">
                    <div class="p-1"><img src="{{ URL::asset('logo.png') }}" alt="branding logo" class="img-responsive" width="200px" hieght="90px"></div>
                </div>
                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Login with Highland</span></h6>
            </div>
            <div class="card-body collapse in">
                @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
                <div class="card-block">
                    <form class="form-horizontal form-simple" action="{{ url('/login-process') }}"  method="post" novalidate>
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <fieldset class="form-group position-relative has-icon-left mb-0">
                            <input type="text" class="form-control form-control-lg input-lg" id="user-name" name="emp_id" placeholder="Your EmploueeID" required>
                            <div class="form-control-position">
                                <i class="icon-head"></i>
                            </div>
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" class="form-control form-control-lg input-lg" id="user-password" name="password" placeholder="Enter Password" required>
                            <div class="form-control-position">
                                <i class="icon-key3"></i>
                            </div>
                        </fieldset>
                        <fieldset class="form-group row">
                            <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                <fieldset>
                                   <!--  <input type="checkbox" id="remember-me" class="chk-remember">
                                    <label for="remember-me"> Remember Me</label> -->
                                     <a href="="recover-password.html" class="card-link">Forgot Password?</a>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-xs-12 text-xs-center text-md-right">
                               <!--  <a href="="recover-password.html" class="card-link">Forgot Password?</a> -->
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> Login</button>
                    </form>
                </div>
            </div>
            <div class="card-footer">
                <div class="">
                    <p class="float-sm-left text-xs-center m-0"><a href="="recover-password.html" class="card-link">Recover password</a></p>
                   <!--  <p class="float-sm-right text-xs-center m-0">New to highland? <a href="="register-simple.html" class="card-link">Sign Up</a></p> -->
                </div>
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <!-- build:js app-assets/js/vendors.min.js-->
    <script src="{{ URL::asset('app-assets/js/core/libraries/jquery.min.js') }}" type="text/javascript"> </script>
    <script src="{{ URL::asset('app-assets/vendors/js/ui/tether.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/js/core/libraries/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/ui/unison.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/ui/blockUI.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/ui/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/ui/jquery-sliding-menu.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/sliders/slick/slick.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/ui/screenfull.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/extensions/pace.min.js') }}" type="text/javascript"></script>
    <!-- /build-->
    <!-- BEGIN VENDOR JS-->
    
    <!-- BEGIN PAGE VENDOR JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/vendors/js/charts/jquery.sparkline.min.js') }}"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/forms/icheck/icheck.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <!-- build:js app-assets/js/app.min.js-->
    <script src="{{ URL::asset('app-assets/js/core/app-menu.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/js/core/app.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('app-assets/js/scripts/ui/fullscreenSearch.min.js') }}" type="text/javascript"></script>
    <!-- /build-->
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/ui/breadcrumbs-with-stats.min.js') }}" ></script>
    <script src="{{ URL::asset('app-assets/js/scripts/forms/form-login-register.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-96096445-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>


</html>