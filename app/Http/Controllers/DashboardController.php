<?php

namespace App\Http\Controllers;


use App\attendance;
use Illuminate\Http\Request;
use Carbon\carbon;
use App\department;
use App\designation;
use App\user;
use Auth;



class DashboardController extends Controller
{
 public function dashboard()
    {
    	if(Auth::check())
    		{
    			$today=date('y-m-d');

    			  $end = strtotime("-7 day", strtotime( $today));
                  $newdate=date("Y-m-d", $end);


        $obj = new attendance;
        $all_records=$obj->leftjoin('users','users.id','=','attendances.empid')->orderby('att_date','desc')
        ->where('empid','=',Auth::user()->id)
        ->where('att_date','>=',$newdate)
        ->paginate(15);
        //return $all_records;
        //filter search select box data
         $obj2=new department;
        $departmentcollection=$obj2->get();
         $obj3=new designation;
        $designationcollection=$obj3->get();
       //return $newdate;
        //return $all_records;

         return view('dashboard',['attendance'=>$all_records]);
     }

       //return view('dashboard');
    }   
}
