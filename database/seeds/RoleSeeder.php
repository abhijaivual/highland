<?php

use Illuminate\Database\Seeder;
use App\role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $obj = new role;
        $obj->role_name="SUPER ADMIN";
        $obj->save();
         $obj2 = new role;
        $obj2->role_name="ADMIN";
        $obj2->save();
         $obj3 = new role;
        $obj3->role_name="HR";
        $obj3->save();
         $obj4 = new role;
        $obj4->role_name="HOD";
        $obj4->save();
         $obj5 = new role;
        $obj5->role_name="EMPLOYEE";
        $obj5->save();
       

       
    }
}
