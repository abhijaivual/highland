<?php

use Illuminate\Database\Seeder;
use App\User;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $obj = new user;
        $obj->id="1";
        $obj->password="vual123321";
        $obj->first_name="Vual";
        $obj->email="support@vual.in";
         $obj->department_id="1";
        $obj->designation_id="2";
         $obj->doj="2017-02-10";
            $obj->employee_type="temporary";
        $obj->r_id="1";
        $obj->profile_status="activated";
        $obj->save();

        //admin
        $obj = new user;
        $obj->id="2";
        $obj->password="admin123321";
        $obj->first_name="Admin";
        $obj->email="admin@highlandhospital.in";
         $obj->department_id="1";
        $obj->designation_id="2";
         $obj->doj="2017-02-10";
            $obj->employee_type="temporary";
        $obj->r_id="2";
        $obj->profile_status="activated";
        $obj->save();

         //other employees
        //HR
        $obj = new user;
        $obj->id="100";
        $obj->password="12345";
        $obj->first_name="John";
        $obj->last_name="S";
        $obj->email="john@vual.in";
        $obj->department_id="1";
        $obj->designation_id="2";
        $obj->doj="2017-02-10";
         $obj->employee_type="temporary";
        $obj->r_id="3";
        $obj->profile_status="activated";
        $obj->save();

        
         $obj = new user;
        $obj->id="101";
        $obj->password="12345";
        $obj->first_name="Mark";
        $obj->last_name="A";
        $obj->email="mark@vual.in";
        $obj->department_id="2";
        $obj->designation_id="3";
        $obj->doj="2017-05-10";
         $obj->employee_type="temporary";
        $obj->r_id="3";
        $obj->profile_status="not_completed";
        $obj->save();
        //profile status for hod and employee is not_completed



        //HOD
        $obj = new user;
        $obj->id="102";
        $obj->password="12345";
        $obj->first_name="Alister";
        $obj->last_name="B";
        $obj->email="alister@vual.in";
        $obj->department_id="4";
        $obj->designation_id="2";
        $obj->doj="2017-12-10";
         $obj->employee_type="permanent";
        $obj->r_id="4";
        $obj->profile_status="activated";
        $obj->save();

        
         $obj = new user;
        $obj->id="103";
        $obj->password="12345";
        $obj->first_name="Priyanka";
        $obj->last_name="C";
        $obj->email="priyanka@vual.in";
        $obj->department_id="3";
        $obj->designation_id="4";
        $obj->doj="2017-08-10";
         $obj->employee_type="temporary";
        $obj->r_id="4";
        $obj->profile_status="not_completed";
        $obj->save();


         //Employee
        $obj = new user;
        $obj->id="104";
        $obj->password="12345";
        $obj->first_name="Preethi";
        $obj->last_name="D";
        $obj->email="preethi@vual.in";
        $obj->department_id="2";
        $obj->designation_id="1";
        $obj->doj="2017-03-10";
         $obj->employee_type="permanent";
        $obj->r_id="5";
        $obj->profile_status="activated";
        $obj->save();

        
         $obj = new user;
        $obj->id="105";
        $obj->password="12345";
        $obj->first_name="Denzil";
        $obj->last_name="C";
        $obj->email="denzil@vual.in";
        $obj->department_id="3";
        $obj->designation_id="3";
        $obj->doj="2017-04-10";
        $obj->employee_type="temporary";
        $obj->r_id="5";
        $obj->profile_status="not_completed";
        $obj->save();
    }
}
