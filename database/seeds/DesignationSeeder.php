<?php

use Illuminate\Database\Seeder;
use App\designation;
class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          $obj = new designation;
        $obj->designation_name="Accountant";
        $obj->save();
         $obj2 = new designation;
        $obj2->designation_name="Reciptionist";
        $obj2->save();
         $obj3 = new designation;
        $obj3->designation_name="Manager";
        $obj3->save();
       
         $obj4 = new designation;
        $obj4->designation_name="Nurse";
        $obj4->save();
        
        
    }
}
