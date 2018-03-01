<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //superadmin	
        $obj = new user;
        $obj->id="1";
        $obj->password="vual123321";
        $obj->first_name="Vual";
        $obj->email="support@vual.in";
        $obj->r_id="1";
        $obj->doj="2017-01-01";
        $obj->employee_type="permanent";
        $obj->profile_status="activated";
        $obj->save();

        //admin
        $obj = new user;
        $obj->id="2";
        $obj->password="admin123321";
        $obj->first_name="Admin";
        $obj->email="admin@highlandhospital.in";
        $obj->r_id="2";
        $obj->employee_type="permanent";
        $obj->doj="2017-01-01";
        $obj->profile_status="activated";
        $obj->save();

        
    }
}
