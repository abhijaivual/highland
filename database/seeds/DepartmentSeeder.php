<?php

use Illuminate\Database\Seeder;
use App\department;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $obj = new department;
        $obj->department_name="Accounts";
        $obj->save();
         $obj2 = new department;
        $obj2->department_name="Administration";
        $obj2->save();
         $obj3 = new department;
        $obj3->department_name="Front Office";
        $obj3->save();
         $obj4 = new department;
        $obj4->department_name="Dialsis";
        $obj4->save();
        
     
    }
}
