<?php

namespace App\Http\Controllers;

use App\Settings;
use App\role;
use App\department;
use App\designation;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function role()
    {

        $obj=new role;
        $rolecollection=$obj->get();
       
        return view('settings.roles',['role'=>$rolecollection]);

    }
     public function add_roles(Request $request)
     {

        $obj1=new role;
        $obj1->role_name=$request->role_name;
        $obj1->save();

        //code to redirect back to same page//
         return \Redirect::back()
        ->with('status','Role Successfully Added');

     }
     public function edit_role($id)
    {

        
        $roleid=$id;

        $obj=new role;
        $rolecollection=$obj->get();
       
       
        return view('settings.roles',['roleid'=>$roleid,'role'=>$rolecollection]);

    }
    public function edit_role_submit(Request $request)
    {
        
        $obj=new role;
        $roleupdate=$obj->where('role_id','=',$request->role_id)
           ->update(['role_name'=>$request->role_name]);

       return redirect('/roles')
        ->with('status','Role Successfully Updated');

    }

    // public function remove_role($id)
    // {

    //     $obj=new role;
    //     $roleupdate=$obj->get();
       
    //     //return view('settings.roles',['role'=>$rolecollection]);

    // }



   

     public function department()
    {   
        $obj=new department;
        $departmentcollection=$obj->get();
        return view('settings.departments',['department'=>$departmentcollection]);

    }

    public function add_departments(Request $request)
     {

        $obj=new department;
        $obj->department_name=$request->department_name;
        $obj->save();

         return \Redirect::back()
        ->with('status','Department Successfully Added');

     }

     public function edit_department($id)
    {

        
        $deptid=$id;

        $obj=new department;
        $departmentcollection=$obj->get();
       
       
        return view('settings.departments',['deptid'=>$deptid,'department'=>$departmentcollection]);

    }
    public function edit_department_submit(Request $request)
    {
        
       $obj=new department;
        $departmentupdate=$obj->where('dept_id','=',$request->dept_id)
           ->update(['department_name'=>$request->department_name]);

       return redirect('/departments')
        ->with('status','Department Successfully Updated');

    }


     public function designation()
    {
        $obj=new designation;
        $designationcollection=$obj->get();
        return view('settings.designations',['designation'=>$designationcollection]);

    }
    
     public function add_designations(Request $request)
     {

        $obj1=new designation;
        $obj1->designation_name=$request->designation_name;
        $obj1->save();

        return \Redirect::back()
        ->with('status','Designation Successfully Added');

     }

      public function edit_designation($id)
    {

        
        $desigid=$id;

        $obj=new designation;
        $designationcollection=$obj->get();
       
       
        return view('settings.designations',['desigid'=>$desigid,'designation'=>$designationcollection]);

    }
    public function edit_designation_submit(Request $request)
    {
        
       $obj=new designation;
        $departmentupdate=$obj->where('desig_id','=',$request->desig_id)
           ->update(['designation_name'=>$request->designation_name]);

       return redirect('/designations')
        ->with('status','Designation Successfully Updated');

    }

     
}