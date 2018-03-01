 @extends('layout.layout1')
@section('content')

 <!-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('app-assets/css/bootstrap.min.css') }}"> -->

    

 <script src="{{ URL::asset('app-assets/js/core/libraries/jquery.min.js') }}" type="text/javascript"></script>

 <div class="app-content content container-fluid">
      <div class="content-wrapper">
      
@foreach($user as $arr)
<div class="content-body">
   <div id="user-profile">
      <div class="row">
        <div class="col-xs-12">
            <div class="card profile-with-cover">
                <div class="card-img-top img-fluid bg-cover height-300" style="background-color:#81c784e6;"></div>
                <div class="media profil-cover-details">
                    <div class="media-left pl-2 pt-2">
                        <a href="#" class="profile-image">
                            <img src="{{URL::asset($arr->profile_image)}}" class="rounded-circle img-border height-100" alt="Card image">
                        </a>
                    </div>

                    <div class="media-body media-middle row">
                        <div class="col-xs-6">
                             <h3 class="card-title">{{$arr->id}}</h3>
                            <h3 class="card-title">{{$arr->first_name}}&nbsp;{{$arr->last_name}}</h3>
                        </div>

                        <div class="col-xs-6 text-xs-right">
                           


                            <div class="float-xs-right">
                               
                            </div>

                        </div>
                    </div>
                </div>
    
                
                <nav class="navbar navbar-light navbar-profile">
                    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation"></button>
                    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
                        <ul class="nav navbar-nav float-xs-right">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/address-proof/'.$arr->id)}}"><i class="icon-content-left"></i> Address-proof <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/certificates/'.$arr->id)}}"><i class="icon-head"></i> Certificates</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/expirience-letters/'.$arr->id)}}"><i class="icon-briefcase4"></i> Experience Letters</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/pay-slips/'.$arr->id)}}"><i class="icon-heart6"></i> Pay slips</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('view-profile/'.$arr->id)}}"><i class="icon-bell4"></i> Profile</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>


 @endforeach


          @if (session('status'))
              <div class="alert alert-success">
              {{ session('status') }}
              </div>
          @endif



    <section id="timeline" class="timeline-center timeline-wrapper">
        <ul class="timeline" style="    list-style-type: none;">
       


            @if($doctype=="address-proof")
          

             <li class="timeline-item mt-3" style="text-decoration: none;">
               
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header" id="documents">
                        <h4 class="card-title">
                        <a href="#">Address Proof update</a></h4>
                       <!--  <p class="card-subtitle text-muted mb-0 pt-1">
                            <span class="font-small-3">18 June, 2016 at 4.50 P.M</span>
                        </p> -->
                        <a class="heading-elements-toggle">
                            <i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                           <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="icon-repeat2"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            </ul>
                        </div>
                    </div>


                   <div class="card-body collapse in">
                        <div class="card-body collapse in">
                            <div class="card-block">
                             
                                
                         
            <div class="box box-primary">
            <div class="box-body box-profile">
             <form action="{{url('/update/address-proof/')}}" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                       <label for="profile">Update your Address Proof :</label>
                        <div class="form-group position-relative has-icon-left">
                        
                          <input type="file" class="form-control" name="address_proof"  >
                       
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="empid" value="{{$empid}}">
                          <input type="hidden" name="address_proof" value="{{$doc}}">
                          <input type="hidden" name="aid" value="{{$id}}">
                        
                      <div class="modal-footer">
                        <input type="reset" class="btn btn-danger" data-dismiss="modal" value="close">
                        <input type="submit" class="btn btn-primary" value="Update">
                      </div>
                      </form>
        </div>
         </div>

                            </div>
                        </div>
                    
                    </div>
                </div>
            </li>

        @endif

        @if($doctype=="certificate")

            <li class="timeline-item mt-3" style="text-decoration: none;">
               
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header" id="documents">
                        <h4 class="card-title">
                        <a href="#">certificate Update</a></h4>
                       <!--  <p class="card-subtitle text-muted mb-0 pt-1">
                            <span class="font-small-3">18 June, 2016 at 4.50 P.M</span>
                        </p> -->
                        <a class="heading-elements-toggle">
                            <i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                           <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="icon-repeat2"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            </ul>
                        </div>
                    </div>


                   <div class="card-body collapse in">
                        <div class="card-body collapse in">
                            <div class="card-block">
                             
                                
                         
            <div class="box box-primary">
            <div class="box-body box-profile">
                     <form action="{{url('/update/certificate/')}}" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                       <label for="profile">Update your certificate :</label>
                        <div class="form-group position-relative has-icon-left">
                        
                          <input type="file" class="form-control" name="certificate"  >
                       
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="empid" value="{{$empid}}">
                          <input type="hidden" name="certificate_record" value="{{$doc}}">
                          <input type="hidden" name="cid" value="{{$id}}">
                        
                      <div class="modal-footer">
                        <input type="reset" class="btn btn-danger" data-dismiss="modal" value="close">
                        <input type="submit" class="btn btn-primary" value="Update">
                      </div>
                      </form>
            </div>
            </div>

                            </div>
                        </div>
                    
                    </div>
                </div>
            </li>

           @endif
          
        

         @if($doctype=="expirience-doc")

            <li class="timeline-item mt-3" style="text-decoration: none;">
               
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header" id="documents">
                        <h4 class="card-title">
                        <a href="#">Experience Letters</a></h4>
                       <!--  <p class="card-subtitle text-muted mb-0 pt-1">
                            <span class="font-small-3">18 June, 2016 at 4.50 P.M</span>
                        </p> -->
                        <a class="heading-elements-toggle">
                            <i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                           <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="icon-repeat2"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            </ul>
                        </div>
                    </div>


                   <div class="card-body collapse in">
                        <div class="card-body collapse in">
                            <div class="card-block">
                             
                                
                         
            <div class="box box-primary">
            <div class="box-body box-profile">
             <form action="{{url('/update/expirience-letter/')}}" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                       <label for="profile">Update your Expirience Letter :</label>
                        <div class="form-group position-relative has-icon-left">
                        
                          <input type="file" class="form-control" name="expirience_letter_doc"  >
                       
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="empid" value="{{$empid}}">
                          <input type="hidden" name="expirience_doc" value="{{$doc}}">
                          <input type="hidden" name="eid" value="{{$id}}">
                        
                      <div class="modal-footer">
                        <input type="reset" class="btn btn-danger" data-dismiss="modal" value="close">
                        <input type="submit" class="btn btn-primary" value="Update">
                      </div>
                      </form>
        </div>
         </div>

                            </div>
                        </div>
                    
                    </div>
                </div>
            </li>

           @endif


            @if($doctype=="payslip-doc")

            <li class="timeline-item mt-3" style="text-decoration: none;">
               
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header" id="documents">
                        <h4 class="card-title">
                        <a href="#">Pay slips Update</a></h4>
                       <!--  <p class="card-subtitle text-muted mb-0 pt-1">
                            <span class="font-small-3">18 June, 2016 at 4.50 P.M</span>
                        </p> -->
                        <a class="heading-elements-toggle">
                            <i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                           <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="icon-repeat2"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            </ul>
                        </div>
                    </div>


                   <div class="card-body collapse in">
                        <div class="card-body collapse in">
                            <div class="card-block">
                             
                                
                         
            <div class="box box-primary">
            <div class="box-body box-profile">

             <form action="{{url('/update/payslip/')}}" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                       <label for="profile">Update your Pay slip  :</label>
                        <div class="form-group position-relative has-icon-left">
                        
                          <input type="file" class="form-control" name="payslip"  >
                       
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="empid" value="{{$empid}}">
                          <input type="hidden" name="payslip_doc" value="{{$doc}}">
                          <input type="hidden" name="pid" value="{{$id}}">
                        
                      <div class="modal-footer">
                        <input type="reset" class="btn btn-danger" data-dismiss="modal" value="close">
                        <input type="submit" class="btn btn-primary" value="Update">
                      </div>
                      </form>
        </div>
         </div>

                            </div>
                        </div>
                    
                    </div>
                </div>
            </li>

           @endif

          
        </ul>
       
    </section>
</div>

        </div>
      </div>
    </div>
   


    

     


 
    <script src="{{ URL::asset('app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js') }}" type="text/javascript"></script>
  
 <script>
    $('#switchBootstrap1').change(function() 
    {
        alert("in");
    //$('.ck').each(function() {
    var userid=$(this).attr('data_src');
    alert(userid);
    if($(this).is(":checked"))
        {
            val='1';
            //alert(val);
        }
        else
        {
            val='0';
            //alert(val);
        }

        $.ajax({
        url: '/profile_status',
        type: 'get',
        data: { val : val, id : userid },
        success: function(data) 
        {
        msg="Sucess";
        $('#msg').html(msg)
        }
            });
    });

    </script>

    @endsection