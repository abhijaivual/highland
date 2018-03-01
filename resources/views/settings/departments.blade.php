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
                                
                            </tr>

                        </thead>
                        <tbody>

                            @foreach($department as $arr)
                              <tr>
                                <td>{{$arr->dept_id}}</td>
                                <td>
                                  @if(isset($deptid) && $deptid==$arr->dept_id)
                                  <form method="post" action="{{url('/edit-department/submit/')}}">
                                  <input type="text" name="department_name" value="{{$arr->department_name}}">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                                  <input type="hidden" name="dept_id" value="{{$deptid}}">
                                 
                                  @else
                                  {{$arr->department_name}}
                                  @endif
                                </td>
                                <td>{{$arr->status}}</td>
                                <td>
                                    @if(isset($deptid) && $deptid==$arr->dept_id)
                                    <button type="submit" class="btn btn-success">Update</button>
                                    </form>
                                    @else
                                      <a href="{{url('/edit/department/'.$arr->dept_id)}}"><button class="btn btn-info">Edit</button></a>
                                    @endif
                                </td>
                              <!--   <td><a href="{{url('/remove/department/'.$arr->dept_id)}}"><button class="btn btn-danger">Delete</button></a></td> -->
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