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
                      @if(isset($arr->profile_image))
                        <a href="#" class="profile-image">
                            <img src="{{URL::asset($arr->profile_image)}}" class="rounded-circle img-border height-100" alt="Card image">
                        </a>
                        @else
                         <a href="#" class="profile-image">
                            <img src="{{URL::asset('user.png')}}" class="rounded-circle img-border height-100" alt="Card image">
                        </a>
                        @endif
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
    <section id="timeline" class="timeline-center timeline-wrapper">
        <ul class="timeline" style="    list-style-type: none;">
       


            @if(isset($address_proof))
          

             <li class="timeline-item mt-3" style="text-decoration: none;">
               
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header" id="documents">
                        <h4 class="card-title">
                        <a href="#">Address Proof</a></h4>
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
            <div class="box-body table-responsive no-padding">
                
              <table class="table table-hover">
               <tr>
                <td>
                     <a href="{{ url('/upload/document/panel/'.$arr->id) }}" class="dropdown-item"><button class="btn-primary"> Add More </button></a>
                </td>
               </tr>
                <?php $i=1; ?>

                @foreach($address_proof as $arr)
                    <tr>
                      <td>Address proof {{$i}}:</td>
                      <td>
                        <form method="post" action="{{url('/preview-address-proof/')}}">
                            <input type="hidden" name="address_proof" value="{{$arr->address_proof_doc}}">
                            <input type="hidden" name="empid" value="{{$arr->emp_id}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-primary"> View </button>
                        </form> 
                    </td>
                    <td>
                        <a href="{{url($arr->address_proof_doc)}}" download="">
                            <button  class="btn btn-primary"> Download </button></a>  -
                      </td>
                       <td>
                           <form method="post" action="{{url('/update-document/')}}">
                            <input type="hidden" name="doc" value="{{$arr->address_proof_doc}}">
                            <input type="hidden" name="empid" value="{{$arr->emp_id}}">
                             <input type="hidden" name="doc_type" value="address-proof">
                             <input type="hidden" name="autoid" value="{{$arr->aid}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-primary"> Update </button>
                        </form>
                        

                      </td>
                    </tr>
                    <?php $i++; ?>



                     
                @endforeach
               
              </table>
        </div>
        </div>
         </div>

                            </div>
                        </div>
                    
                    </div>
                </div>
            </li>

        @endif
        @if(isset($certificate))

            <li class="timeline-item mt-3" style="text-decoration: none;">
               
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header" id="documents">
                        <h4 class="card-title">
                        <a href="#">certificates</a></h4>
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
            <div class="box-body table-responsive no-padding">

              <table class="table table-hover">
                 <tr>
                <td>
                     <a href="{{ url('/upload/document/panel/'.$arr->id) }}" class="dropdown-item"><button class="btn-primary"> Add More </button></a>
                </td>
               </tr>
                <?php $i=1; ?>

                @foreach($certificate as $arr)
                    <tr>
                      <td>certificate {{$i}}:</td>
                      <td>
                      <form method="post" action="{{url('/preview-certificates/')}}">
                            <input type="hidden" name="certificate_doc" value="{{$arr->certificate_doc}}">
                            <input type="hidden" name="empid" value="{{$arr->emp_id}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-primary"> View </button>
                        </form>
                        </td>
                        <td> 
                        <a href="{{url($arr->certificate_doc)}}" download="">
                            <button  class="btn btn-primary"> Download </button></a>  
                      </td>
                      <td>
                           <form method="post" action="{{url('/update-document/')}}">
                            <input type="hidden" name="doc" value="{{$arr->certificate_doc}}">
                            <input type="hidden" name="empid" value="{{$arr->emp_id}}">
                             <input type="hidden" name="doc_type" value="certificate">
                             <input type="hidden" name="autoid" value="{{$arr->cid}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-primary"> Update </button>
                        </form>
                        

                      </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
               
              </table>
        </div>
        </div>
         </div>

                            </div>
                        </div>
                    
                    </div>
                </div>
            </li>

           @endif
          
        

         @if(isset($expirience_letter))

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
            <div class="box-body table-responsive no-padding">

              <table class="table table-hover">
                 <tr>
                <td>
                     <a href="{{ url('/upload/document/panel/'.$arr->id) }}" class="dropdown-item"><button class="btn-primary"> Add More </button></a>
                </td>
               </tr>
                <?php $i=1; ?>

                @foreach($expirience_letter as $arr)
                    <tr>
                      <td>Expirience Letter {{$i}}:</td>
                      <td>
                      <form method="post" action="{{url('/preview-expirience-letter/')}}">
                            <input type="hidden" name="expirience_doc" value="{{$arr->expirience_doc}}">
                            <input type="hidden" name="empid" value="{{$arr->emp_id}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-primary"> View </button>
                        </form>
                    </td>
                    <td>
                        <a href="{{url($arr->expirience_doc)}}" download="">
                            <button  class="btn btn-primary"> Download </button></a>  -
                      </td>
                       <td>
                           <form method="post" action="{{url('/update-document/')}}">
                            <input type="hidden" name="doc" value="{{$arr->expirience_doc}}">
                            <input type="hidden" name="empid" value="{{$arr->emp_id}}">
                             <input type="hidden" name="doc_type" value="expirience-doc">
                             <input type="hidden" name="autoid" value="{{$arr->eid}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-primary"> Update </button>
                        </form>
                        

                      </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
               
              </table>
        </div>
        </div>
         </div>

                            </div>
                        </div>
                    
                    </div>
                </div>
            </li>

           @endif


            @if(isset($pay_slip))

            <li class="timeline-item mt-3" style="text-decoration: none;">
               
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header" id="documents">
                        <h4 class="card-title">
                        <a href="#">Pay slips</a></h4>
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
            <div class="box-body table-responsive no-padding">

              <table class="table table-hover">
                 <tr>
                <td>
                     <a href="{{ url('/upload/document/panel/'.$arr->id) }}" class="dropdown-item"><button class="btn-primary"> Add More </button></a>
                </td>
               </tr>
                <?php $i=1; ?>

                @foreach($pay_slip as $arr)
                    <tr>
                      <td>Pay Slip {{$i}}:</td>
                      <td>
                      <form method="post" action="{{url('/preview-pay-slip/')}}">
                            <input type="hidden" name="payslip_doc" value="{{$arr->payslip_doc}}">
                            <input type="hidden" name="empid" value="{{$arr->emp_id}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-primary"> View </button>
                        </form> 
                    </td>
                    <td>
                        <a href="{{url($arr->payslip_doc)}}" download="">
                            <button  class="btn btn-primary"> Download </button></a>  -
                      </td>
                       <td>
                           <form method="post" action="{{url('/update-document/')}}">
                            <input type="hidden" name="doc" value="{{$arr->payslip_doc}}">
                            <input type="hidden" name="empid" value="{{$arr->emp_id}}">
                             <input type="hidden" name="doc_type" value="payslip-doc">
                             <input type="hidden" name="autoid" value="{{$arr->pid}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-primary"> Update </button>
                        </form>
                        

                      </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
               
              </table>
        </div>
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