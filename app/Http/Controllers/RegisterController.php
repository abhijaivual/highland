<?php

namespace App\Http\Controllers;
use App\role;
use App\department;
use App\designation;
use App\User;
use App\address_proof;
use App\certificate;
use App\expirience_letter;
use App\previous_payslip;
use App\Notifications\registration_process_2;

use File;
use Carbon\Carbon;
use Auth;
use Illuminate\Notifications\Notifiable;



use Illuminate\Http\Request;
use Mail;

class RegisterController extends Controller
{
    public function simple_rigisterattion()
    {
      if(Auth::check())
        {
            if(Auth::user()->r_id==1)
              {
                 $obj1=new role;
                 $rolecollection=$obj1->get();
              }
              else if(Auth::user()->r_id==2)
                {
                  $obj1=new role;
                  $rolecollection=$obj1->where('role_id','!=',1)->get();
                }
                else if(Auth::user()->r_id==3)
                {
                  $obj1=new role;
                  $rolecollection=$obj1->where('role_id','!=',1)->where('role_id','!=',2)->where('role_id','!=',3)->get();
                }
         
                

           $obj2=new department;
           $departmentcollection=$obj2->get();

            $obj3=new designation;
           $designationcollection=$obj3->get();
           

   return view('registration.registration_admin_hr',['role'=> $rolecollection,'department'=> $departmentcollection,'designation'=> $designationcollection]);
     
      }
    }

    public function check_for_duplicate_employee($id)
  {
     // $request = Request::all();
      $empid = User::where('id', $id)->get();
     
           if($empid->count()>0)
          {
          $html = "Employee Id is already Exists";
          $check="1";
          }
          else
          {
            $html = "Employee Id available";
            $check="0";
          }
      
      
      return response()->json(['success' => true, 'html' => $html,'check'=>$check]);
  }

    public function register_process1(Request $request)
    {
    	
        


        $profile_status="created";
        $obj = new User;
        $obj->id=$request->emp_id;
        $obj->password=$request->password;
        $obj->first_name=$request->first_name;
         $obj->last_name=$request->last_name;
        $obj->email=$request->email;
         $obj->doj=$request->doj;
        $obj->department_id=$request->department_id;
        $obj->designation_id=$request->designation_id;
        $obj->employee_type=$request->employee_type;
        $obj->r_id=$request->r_id;
        $obj->profile_status=$profile_status;
        $obj->save();
        $id=$obj->id;
       
    	

    $data=array(
    'first_name'=>$request->first_name,
    'from'=>$request->email,
    'emp_id'=>$request->emp_id,
    'password'=>$request->password,
    );

 

    Mail::send('email.registration', $data, function($message) use ($data) {
    $message->from('highlandsupport@gmail.com');
    $message->to('abhijai.connectia@gmail.com');
     $message->subject('welcome to highland hospital');
    });

     return \Redirect::back()
     ->with('status','Registration Process one is Complete.Employee ID and Password will sent to Email.');

}




     


    public function full_rigisterattion()
    {
      
         $uname='';
        if(Auth::user())
        {
            $uname= Auth::user();
            $id=$uname->id;

            $obj=new User;
            $usercollection=$obj->leftjoin('departments','departments.dept_id','=','users.department_id')
            ->leftjoin('designations','designations.desig_id','=','users.designation_id')
            ->where('users.id','=',$id)
            ->get();

            return view('registration.registration_emp',['user'=> $usercollection]);
        
        }
        else
        {
          return redirect('/login');
        }

    }


     public function register_process2(Request $request)
    {
       
         $uname='';
        if(Auth::user())
        {
            $uname= Auth::user();
            $id=$uname->id;
               

        // Upload  profile image and CV  
        $path = 'upload/employee/'.$id;
        $result = File::makeDirectory($path,$mode = 0777, true, true);
        if($request->file('image'))
        {

          $image = $request->file('image');
           $img= time().'.'.$image->getClientOriginalExtension();
          
          $image->move($path,$img);
           $obj = new User;
           //store image name with path in db
           $imagewithpath=$path.'/'.$img;
           $updateuser=$obj->where('id','=',$id)
           ->update(['profile_image'=>$imagewithpath]);
        }

        if($request->file('cv'))
        {

          $image1 = $request->file('cv');
          $cv = time().'.'.$image1->getClientOriginalExtension();
          
          $image1->move($path, $cv);
           $obj = new User;
            $withpath=$path.'/'.$cv;
           $updateuser=$obj->where('id','=',$id)
           ->update(['cv'=>$withpath]);
        }

       
        //address proof upload
        if($request->file('addressproof'))
        {
            $files=$request->file('addressproof');
            $i=1;
           foreach($files as $file)
           {
               $filename=str_random(10).'.'.$file->getClientOriginalExtension();
              // $filenamewithpath=$id."/".$filename;
               $file->move( $path,$filename);
               $obj1=new address_proof;
                 $withpath=$path.'/'.$filename;
               $obj1->emp_id=$id;
               $obj1->address_proof_doc= $withpath;
               $obj1->save();
               $i++;
            }
           
        }
        //Experience letters upload
        if($request->file('expirience_letter'))
        {
            $files=$request->file('expirience_letter');
            $i=1;
           foreach($files as $file)
           {
                $filename=str_random(10).'.'.$file->getClientOriginalExtension();
               //$filenamewithpath=$id."/".$filename;
               $file->move( $path,$filename);
               $obj2=new expirience_letter;
                $withpath=$path.'/'.$filename;
               $obj2->emp_id=$id;
               $obj2->expirience_doc= $withpath;
               $obj2->save();
               $i++;
            }
            
        }
        //Pay slips upload
        if($request->file('payslip'))
        {
            $files=$request->file('payslip');
            $i=1;
           foreach($files as $file)
           {
                $filename=str_random(10).'.'.$file->getClientOriginalExtension();
              // $filenamewithpath=$id."/".$filename;
               $file->move( $path,$filename);
               $obj3=new previous_payslip;
                $withpath=$path.'/'.$filename;
               $obj3->emp_id=$id;
               $obj3->payslip_doc= $withpath;
               $obj3->save();
               $i++;
            }
           
        }
        //certificates upload
        if($request->file('certificate'))
        {
            $files=$request->file('certificate');
            $i=1;
           foreach($files as $file)
           {
                $filename=str_random(10).'.'.$file->getClientOriginalExtension();
               //$filenamewithpath=$id."/".$filename;
               $file->move( $path,$filename);
               $obj4=new certificate;
                $withpath=$path.'/'.$filename;
               $obj4->emp_id=$id;
               $obj4->certificate_doc= $withpath;
               $obj4->save();
               $i++;
            }
          
        }



     

        $dob=Carbon::parse($request->dob)->format('Y-m-d');
        $profile_status="not_completed";
        $obj = new User;
        $updateuser=$obj->where('id','=',$id)
        ->update(['dob'=>$dob,
          'phone'=>$request->phone,
          'address'=>$request->address,
          'city'=>$request->city,
          'age'=>$request->age,
          'gender'=>$request->gender,
          'reffered_by'=>$request->reffered_by,
          'profile_status'=>$profile_status
       
         
      ]);
      
          $reg_user= User::find($id);
          $user=User::where('r_id',3)->get();
         // $user->notify(new registration_process_2($reg_user));
          \Notification::send($user, new registration_process_2($reg_user));

          //send hr account verification to Admin
            $obj1 = new User;
            $getcurrentuserrole=$obj1->where('id','=',$id)->get();
            foreach($getcurrentuserrole as $arr)
            {
              if($arr->r_id==3)
              {
                  $reg_user= User::find($id);
                  $user=User::where('r_id',2)->get();
                  \Notification::send($user, new registration_process_2($reg_user));
              }
            } 

        return redirect('/sucessfull-registration');
      }
      else
      {
        return redirect('/login');
      }
     
   
}
public function successful_registration()
{
   return view('registration.success_reg_process_2');
}

}
