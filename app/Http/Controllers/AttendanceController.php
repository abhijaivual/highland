<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Carbon\carbon;
use App\department;
use App\designation;
use App\user;

use App\attendance;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload_attendance()
    {
      


        return view('attendance.attendance_upload');

    }
    
    public function import_my_excel(Request $request)
    {
        if($request->hasFile('file')){
            $path = $request->file('file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                $created=carbon::now();

                foreach ($data as $key => $value) {
                     $att_date=date("Y-m-d", strtotime($value->att_date));
                    $arr[] = ['empid' => $value->empid, 'fname' => $value->first_name, 'att_date' => $att_date, 'shift' => $value->shift, 'shift_start' => $value->shift_start, 'shift_end' => $value->shift_end, 'in_time' => $value->in_time, 'out_time' => $value->out_time, 'shift_hrs' => $value->shift_hrs, 'work_hrs' => $value->work_hrs,'ot_hrs' => $value->ot_hrs,'early_arival' => $value->early_arival,'late_arival' => $value->late_arival,'late_departure' => $value->late_departure,'early_departure' => $value->early_departure,'attendance_status' => $value->status,'created_at'=>$created];
                }
                if(!empty($arr)){
                    \DB::table('attendances')->insert($arr);
                   /* $obj = new attendance;
                    $uploaded_records=$obj->where('created_at','=', $created)->get();
                   return view('dashboard',['attendance'=>$uploaded_records]);*/
                   $obj = new attendance;
                   $uploaded_records=$obj->where('created_at','=', $created)->count('empid');
                   return \Redirect::back()
                    ->with('status','Succesfully Uploaded!&nbsp;&nbsp;'.$uploaded_records.'&nbsp;records uploaded.');
                }
            }
        }
        dd('Request data does not have any files to import.');  
    }

    public function view_all_attendance()
    {
        $obj = new attendance;
        $all_records=$obj->leftjoin('users','users.id','=','attendances.empid')->orderby('att_date','desc')->paginate(15);
        //return $all_records;
        //filter search select box data
         $obj2=new department;
        $departmentcollection=$obj2->get();
        $obj3=new designation;
        $designationcollection=$obj3->get();
       

         return view('attendance.all_attendance',['attendance'=>$all_records,'department'=>$departmentcollection,'designation'=>$designationcollection]);
    }

    public function search2(request $request)
    {
        $dept=$request->department_id;
        $desig=$request->designation_id;
        $obj4 =new attendance;
        $obj = new User;

        //filter option fetched data
        $obj2=new department;
        $departmentcollection=$obj2->get();
        $obj3=new designation;
        $designationcollection=$obj3->get();


        if($dept!=0 && $desig!=0)
        {
            $flag=0;
            $all_records=$obj4->leftjoin('users','users.id','=','attendances.empid')
            ->leftjoin('departments','departments.dept_id','=','users.department_id')
            ->leftjoin('designations','designations.desig_id','=','users.designation_id')
            ->where('department_id','=',$dept)
            ->where('designation_id','=',$desig)
            ->paginate(100);
            foreach($all_records as $arr)
            {
                if(isset($arr->id))
                {
                   $flag=1; 
                }
                else
                {
                    $flag=0;
                }
            }
           // return $arr->id;
            if($flag==1)
            {
                return view('attendance.all_attendance',['attendance'=>$all_records,'department'=>$departmentcollection,'designation'=>$designationcollection]);
            }
            else
            {
                $nodata="No result found";
                return view('attendance.all_attendance',['nodata'=>$nodata,'attendance'=>$all_records,'department'=>$departmentcollection,'designation'=>$designationcollection]);
            }
           

        }
        else if($dept!=0)
        {   
             $all_records=$obj4->leftjoin('users','users.id','=','attendances.empid')
             ->leftjoin('departments','departments.dept_id','=','users.department_id')
            ->leftjoin('designations','designations.desig_id','=','users.designation_id')
            ->where('department_id','=',$dept)
            
            ->paginate(10);
             foreach($all_records as $arr)
            {
                if(isset($arr->id))
                {
                   $flag=1; 
                }
                else
                {
                    $flag=0;
                }
            }
           // return $arr->id;
            if($flag==1)
            {
                return view('attendance.all_attendance',['attendance'=>$all_records,'department'=>$departmentcollection,'designation'=>$designationcollection]);
            }
            else
            {
                $nodata="No result found";
                return view('attendance.all_attendance',['nodata'=>$nodata,'attendance'=>$all_records,'department'=>$departmentcollection,'designation'=>$designationcollection]);
            }
           

        }
        else if($desig!=0)
        {
             $all_records=$obj4->leftjoin('users','users.id','=','attendances.empid')
             ->leftjoin('departments','departments.dept_id','=','users.department_id')
            ->leftjoin('designations','designations.desig_id','=','users.designation_id')
            ->where('designation_id','=',$desig)
            ->paginate(10);
            foreach($all_records as $arr)
            {
                if(isset($arr->id))
                {
                   $flag=1; 
                }
                else
                {
                    $flag=0;
                }
            }
           // return $arr->id;
            if($flag==1)
            {
                return view('attendance.all_attendance',['attendance'=>$all_records,'department'=>$departmentcollection,'designation'=>$designationcollection]);
            }
            else
            {
                $nodata="No result found";
                return view('attendance.all_attendance',['nodata'=>$nodata,'attendance'=>$all_records,'department'=>$departmentcollection,'designation'=>$designationcollection]);
            }
        }
        else
        {
            return \Redirect::back()
            ->with('status','No result Found');
        }

    }

    public function view_todays_attendance()
    {
         $today=date('y-m-d');
        $obj = new attendance;
        $all_records=$obj->where('att_date','=',$today)
        ->leftjoin('users','users.id','=','attendances.empid')->get();
        //return $all_records;
        //filter search select box data
         $obj2=new department;
        $departmentcollection=$obj2->get();
        $obj3=new designation;
        $designationcollection=$obj3->get();
        //return $all_records;
         return view('attendance.todays_attendance',['attendance'=>$all_records,'department'=>$departmentcollection,'designation'=>$designationcollection]);
    }

    public function single_employee($id)
    {
        $empid=$id;
        $obj = new attendance;
        $all_records=$obj->leftjoin('users','users.id','=','attendances.empid')->orderby('att_date','desc')
        ->where('id','=',$empid)
        ->paginate(15);
        //return $all_records;
        //filter search select box data
         $obj2=new department;
        $departmentcollection=$obj2->get();
        $obj3=new designation;
        $designationcollection=$obj3->get();
       

         return view('attendance.single_employee_attendance',['attendance'=>$all_records,'department'=>$departmentcollection,'designation'=>$designationcollection]);

    }


     public function view_attendance($id1,$id2)
    {

        
        $attendance_empid=$id1;
        $att_id=$id2;

        $obj=new attendance;
        $attendancecollection=$obj->where('empid','=',$attendance_empid)
        ->where('attid','=',$id2)->get();
       
     return view('attendance.view_single_attendance',['att_id'=>$att_id,'attendance'=>$attendancecollection]);

    }


     public function edit_attendance_intime_submit(Request $request)
    {
      
       
         $obj=new attendance;
      
        $in_time = Carbon::parse($request->in_time);
        $out_time = Carbon::parse($request->out_time);
        $shift_start=Carbon::parse($request->shift_start);

        $shift_end=Carbon::parse($request->shift_end);

        //work hour calculation part
        $work_hrs = $out_time->diffInMinutes($in_time);
        //converting back to hours
        $new_work_hrs=date('H:i', mktime(0,$work_hrs));



        if($in_time>$shift_start)
        {
             //late arrival calculation
             $late_arival = $in_time->diffInMinutes($shift_start);
               $late=$obj->where('attid','=',$request->attid)
             ->update(['late_arival'=>$late_arival,
                        'early_arival'=>0
         ]);
        }
        else
        {
            //early arrival calculation
             $early_arival = $shift_start->diffInMinutes($in_time);
           
               $early=$obj->where('attid','=',$request->attid)
             ->update(['early_arival'=>$early_arival,
                        'late_arival'=>0
         ]);
        }



        if($out_time>$shift_end)
        {
            //late Departure 
            

            $late_departure = $out_time->diffInMinutes($shift_end);
               $late_dep=$obj->where('attid','=',$request->attid)
             ->update(['late_departure'=>$late_departure,
                        'early_departure'=>0
         ]);

        }
        else
        {
            //eraly Departure
           

            $early_departure = $shift_end->diffInMinutes($out_time);
            $early_dep=$obj->where('attid','=',$request->attid)
             ->update(['early_departure'=>$early_departure,
                        'late_departure'=>0
         ]);
        }


        // if($in_time || $out_time) 
        // {
        //      $update_status=$obj->where('attid','=',$request->attid)
        //      ->update($attendance_status=='p');
        // }
        // else
        // {
        //      $update_statuss=$obj->where('attid','=',$request->attid)
        //      ->update($attendance_status=='a');

        // }

       
        

       
        $attendanceupdate=$obj->where('attid','=',$request->attid)
           ->update(['in_time'=>$request->in_time,
            'out_time'=>$request->out_time,
            'work_hrs'=>$new_work_hrs,
            
        ]);

       


        return \Redirect::back()
        ->with('status','updated succesfull!');
           
    }


}
