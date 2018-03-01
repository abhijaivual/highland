@extends('layout.layout1')
@section('content')

<div class="app-content content container-fluid">
  <div class="content-wrapper">
 		<div class="content-header row">

        @if (session('status'))
        <div class="alert alert-success">
        {{ session('status') }}
        </div>
        @endif

      </div>

        <div class="content-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
       			<div class="card">
         			<div class="card-block">
 						<h4 class="card-title">Add Designation</h4></br>
 					
              <div class="card-block border-top-blue-grey border-top-lighten-5">
              <div class="bug-list-search">
                <div class="bug-list-search-content">
                  <form action="/add_designation" method="post">
                        <div class="position-relative">
                            <input type="text" name="designation_name" id="search-contacts" class="form-control" placeholder="Designation">

                            <div class="form-control-position" style="top: -3px;right: -10px;">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
 						



  
 						
<div class="row">
 <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header no-border-bottom">
                <h4 class="card-title">Designations</h4>
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
                                <th>Designation Id</th>
                                <th>Designation Name</th>
                                <th>Status</th>
                                <th>Action 1</th>
                               
                            </tr>

                        </thead>
                        <tbody>

                            @foreach($designation as $arr)
                             <tr>
                                <td>{{$arr->desig_id}}</td>
                                <td>
                                  @if(isset($desigid) && $desigid==$arr->desig_id)
                                  <form method="post" action="{{url('/edit-designation/submit/')}}">
                                  <input type="text" name="designation_name" value="{{$arr->designation_name}}">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                                  <input type="hidden" name="desig_id" value="{{$desigid}}">
                                 
                                  @else
                                  {{$arr->designation_name}}
                                  @endif
                                </td>
                                <td>{{$arr->status}}</td>
                                <td>
                                    @if(isset($desigid) && $desigid==$arr->desig_id)
                                    <button type="submit" class="btn btn-success">Update</button>
                                    </form>
                                    @else
                                      <a href="{{url('/edit/designation/'.$arr->desig_id)}}"><button class="btn btn-info">Edit</button></a>
                                    @endif
                                </td>
                              <!--   <td><a href="{{url('/remove/designation/'.$arr->desig_id)}}"><button class="btn btn-danger">Delete</button></a></td> -->
                              </tr>
                              </tr>
                           @endforeach

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


@endsection