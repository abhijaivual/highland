<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\department;
use App\designation;
use Illuminate\Http\Response;
use App\Notifications\registration_process_2;
use Illuminate\Notifications\Notifiable;
use Auth;
use App\expirience_letter;
use App\address_proof;
use App\certificate;
use App\previous_payslip;
use File;
use Carbon\carbon;

use Redirect\redirect;

class ProfileController extends Controller
{

	//To view the list of all users in main profile
	public function view_profile()
	{

		$obj=new user;
		$profilecollection=$obj->leftjoin('departments','departments.dept_id','=',
		'users.department_id')
        ->leftjoin('designations','designations.desig_id','=','users.designation_id')
         ->leftjoin('roles','roles.role_id','=','users.r_id')
        ->where('users.r_id','!=',2)
         ->where('users.r_id','!=',1)
        ->paginate(9);


     	 $total=$obj->where('r_id','!=',1)->where('r_id','!=',2)->count('id');
     	 $created=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','created')->count('id');
     	 $not_completed=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','not_completed')->count('id');
     	  $processing=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','processing')->count('id');
     	 $activated=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','activated')->count('id');
     	 $deactivated=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','deactivated')->count('id');
     	 $removed=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','removed')->count('id');

		$obj4=new department;
       	$departmentcollection=$obj4->get();

       	$obj4=new designation;
       	$designationcollection=$obj4->get();

		return view('profile.profile',['profile'=>$profilecollection,'department'=> 
			$departmentcollection,'designation'=> $designationcollection,'total'=>$total,
			'created'=>$created,'not_completed'=>$not_completed,'processing'=>$processing,'activated'=>$activated,'deactivated'=>$deactivated,'removed'=>$removed]);

	}

	public function search_profile(Request $request)
	{
		if(isset($request->key))
		{
		$key=$request->key;
		$obj=new user;
		$profilecollection=$obj->leftjoin('departments','departments.dept_id','=',
		'users.department_id')
         ->leftjoin('designations','designations.desig_id','=','users.designation_id')
         ->where('id','=',$key)
         ->orwhere('first_name','like','%'.$key.'%')
         ->orwhere('email','like','%'.$key.'%')
         ->orwhere('phone','like','%'.$key.'%')
         ->orwhere('employee_type','like','%'.$key.'%')
         ->orwhere('departments.department_name','like','%'.$key.'%')
         ->orwhere('designations.designation_name','like','%'.$key.'%')
         ->paginate(9);


     	$total=$obj->where('r_id','!=',1)->where('r_id','!=',2)->count('id');
       $created=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','created')->count('id');
       $not_completed=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','not_completed')->count('id');
        $processing=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','processing')->count('id');
       $activated=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','activated')->count('id');
       $deactivated=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','deactivated')->count('id');
       $removed=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','removed')->count('id');

		$obj4=new department;
       	$departmentcollection=$obj4->get();

       	$obj4=new designation;
       	$designationcollection=$obj4->get();

		return view('profile.profile',['profile'=>$profilecollection,'department'=> 
			$departmentcollection,'designation'=> $designationcollection,'total'=>$total,
			'created'=>$created,'not_completed'=>$not_completed,'processing'=>$processing,'activated'=>$activated,'deactivated'=>$deactivated,'removed'=>$removed]);
	    }
	    else
	    {
	    	return \Redirect::back();
	    }


    }


	public function search2(request $request)
	{
		$dept=$request->department_id;
		$desig=$request->designation_id;
		$obj = new User;

		//filter option fetched data
		$obj2=new department;
        $departmentcollection=$obj2->get();
		$obj3=new designation;
        $designationcollection=$obj3->get();

         $total=$obj->where('r_id','!=',1)->where('r_id','!=',2)->count('id');
       $created=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','created')->count('id');
       $not_completed=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','not_completed')->count('id');
        $processing=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','processing')->count('id');
       $activated=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','activated')->count('id');
       $deactivated=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','deactivated')->count('id');
       $removed=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','removed')->count('id');


		if($dept!=0 && $desig!=0)
		{
			$profilecollection=$obj->leftjoin('departments','departments.dept_id','=','users.department_id')
            ->leftjoin('designations','designations.desig_id','=','users.designation_id')
			->where('department_id','=',$dept)
			->where('designation_id','=',$desig)
			->paginate(10);
			return view('profile.profile',['profile'=>$profilecollection,'department'=> $departmentcollection,'designation'=> $designationcollection,'total'=>$total,
			'created'=>$created,'not_completed'=>$not_completed,'processing'=>$processing,'activated'=>$activated,'deactivated'=>$deactivated,'removed'=>$removed]);

		}
		else if($dept!=0)
		{	
			 $profilecollection=$obj->leftjoin('departments','departments.dept_id','=','users.department_id')
            ->leftjoin('designations','designations.desig_id','=','users.designation_id')
			->where('department_id','=',$dept)
			
			->paginate(10);
			return view('profile.profile',['profile'=>$profilecollection,'department'=> $departmentcollection,'designation'=> $designationcollection,'total'=>$total,
			'created'=>$created,'not_completed'=>$not_completed,'processing'=>$processing,'activated'=>$activated,'deactivated'=>$deactivated,'removed'=>$removed]);

		}
		else if($desig!=0)
		{
			 $profilecollection=$obj->leftjoin('departments','departments.dept_id','=','users.department_id')
            ->leftjoin('designations','designations.desig_id','=','users.designation_id')
			->where('designation_id','=',$desig)
			->paginate(10);

			return view('profile.profile',['profile'=>$profilecollection,'department'=> $departmentcollection,'designation'=> $designationcollection,'total'=>$total,
			'created'=>$created,'not_completed'=>$not_completed,'processing'=>$processing,'activated'=>$activated,'deactivated'=>$deactivated,'removed'=>$removed]);
		}
		else
		{
			return "no result found";
		}

	}

	
	public function profile_status_profiles($id)
	{

		$status=$id;
		if($status=="created")
		{
			$obj=new user;
			$profilecollection=$obj->leftjoin('departments','departments.dept_id','=',
			'users.department_id')
	        ->leftjoin('designations','designations.desig_id','=','users.designation_id')
	        ->where('profile_status','=',$status)
	        ->paginate(10);

	        
         }
         else if($status=="not_completed")
		{
			$obj=new user;
			$profilecollection=$obj->leftjoin('departments','departments.dept_id','=',
			'users.department_id')
	        ->leftjoin('designations','designations.desig_id','=','users.designation_id')
	        ->where('profile_status','=',$status)
	        ->paginate(10);

	        
         }
         else if($status=="processing")
		{
			$obj=new user;
			$profilecollection=$obj->leftjoin('departments','departments.dept_id','=',
			'users.department_id')
	        ->leftjoin('designations','designations.desig_id','=','users.designation_id')
	        ->where('profile_status','=',$status)
	        ->paginate(10);

	        
         }
         else if($status=="activated")
		{
			$obj=new user;
			$profilecollection=$obj->leftjoin('departments','departments.dept_id','=',
			'users.department_id')
	        ->leftjoin('designations','designations.desig_id','=','users.designation_id')
	        ->where('profile_status','=',$status)
	        ->paginate(10);

	       
         }
         else if($status=="deactivated")
		{
			$obj=new user;
			$profilecollection=$obj->leftjoin('departments','departments.dept_id','=',
			'users.department_id')
	        ->leftjoin('designations','designations.desig_id','=','users.designation_id')
	        ->where('profile_status','=',$status)
	        ->paginate(10);

	       
         }
         else if($status=="removed")
		{
			$obj=new user;
			$profilecollection=$obj->leftjoin('departments','departments.dept_id','=',
			'users.department_id')
	        ->leftjoin('designations','designations.desig_id','=','users.designation_id')
	        ->where('profile_status','=',$status)
	        ->paginate(10);

	        
         }


     	 $total=$obj->where('r_id','!=',1)->where('r_id','!=',2)->count('id');
       $created=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','created')->count('id');
       $not_completed=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','not_completed')->count('id');
        $processing=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','processing')->count('id');
       $activated=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','activated')->count('id');
       $deactivated=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','deactivated')->count('id');
       $removed=$obj->where('r_id','!=',1)->where('r_id','!=',2)->where('profile_status','=','removed')->count('id');

			$obj4=new department;
	       	$departmentcollection=$obj4->get();

	       	$obj4=new designation;
	       	$designationcollection=$obj4->get();

	       

			return view('profile.profile',['profile'=>$profilecollection,'department'=> 
				$departmentcollection,'designation'=> $designationcollection,'total'=>$total,
				'created'=>$created,'not_completed'=>$not_completed,'processing'=>$processing,'activated'=>$activated,'deactivated'=>$deactivated,'removed'=>$removed]);

	}

	public function full_registration($id)
    {
      
        
            
            $userid=$id;

            $obj=new User;
            $usercollection=$obj->leftjoin('departments','departments.dept_id','=','users.department_id')
            ->leftjoin('designations','designations.desig_id','=','users.designation_id')
            ->where('users.id','=',$userid)
            ->get();

            return view('profile.registration_process_2',['user'=> $usercollection]);
        
       

  }

    public function full_registration_submit(Request $request)
    {
       
         
               
    	$id=$request->id;
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
        $profile_status="activated";
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
      
        /*  $reg_user= User::find($id);
          $user=User::where('r_id',3)->get();
         // $user->notify(new registration_process_2($reg_user));
          \Notification::send($user, new registration_process_2($reg_user));*/
  

        return redirect('/profile')->with('status','Profile successfully Registred.');
     
     
   
    }



	public function single_profile($id1,$id2)
	{
		
		//regisration notification mark as read
		 $uname='';
		 $uname= Auth::User();
		 $session_id=$uname->id;
		 $user=User::find($session_id);
		
		 //change profile status to processing when hr open the notification
		 	$obj1=new User;
		 	$status="processing";
		 	$update_profile_status=$obj1->where('id','=',$id2)->update(['profile_status'=>$status]);
		//$user->unreadNotifications->markAsRead();

		//reading notification after hr clicks either confirm or reject
		/*$obj2=new User;
		$usercollection=$obj2->where('id','=',$id2)->get();
		foreach($usercollection as $arr)
		{
			if($arr->profile_status=="activated")
			{	
				$user->unreadNotifications()->where('id',$id1)->update(['read_at' => now()]);
			}
	    }*/

		$obj=new User;
        $usercollection=$obj->leftjoin('departments','departments.dept_id','=','users.department_id')
        ->leftjoin('designations','designations.desig_id','=','users.designation_id')
        ->where('users.id','=',$id2)
        ->get();
		return view('profile.single_profile',['user'=>$usercollection,'not_id'=>$id1,'userid'=>$id2]);
	}


	public function confirm_profile_request($id,$id2)
	{
    if(Auth::check())
    {
      $userid=Auth::User()->id;
    
    
		$obj = new User;
		$status="activated";
		$updateprofilestatus=$obj->where('id','=',$id2)->update(['profile_status'=>$status]);
	 echo $updateprofilestatus;

    //read the notification here
    $user=User::find($userid);
    $notid=$id;
  
    $res=$user->notifications()->where('id',$notid)->update(['read_at' =>now()]);
   // echo $res;

     return redirect()->action(
    'ProfileController@single_profile_view', ['id' => $id2])
        ->with('status',$user->first_name.'&nbsp;Profile Activated successfully');

    /*return \Redirect('/profile')
    ->with('status',$user->first_name.'&nbsp;Profile Activated successfully');*/
    }
	}

public function reject_profile_request($id,$id2)
  {
    if(Auth::check())
    {
      $userid=Auth::User()->id;
    
    
   //change account status back to not_completed 
    $obj = new User;
    $status="not_completed";
    $updateprofilestatus=$obj->where('id','=',$id2)->update(['profile_status'=>$status]);

    //read the notification here
    $user=User::find($userid);
    $notid=$id;
  
    $res=$user->notifications()->where('id',$notid)->update(['read_at' =>now()]);
   // echo $res;

     return redirect()->action(
    'ProfileController@single_profile_view', ['id' => $id2])
        ->with('status','Profile Activated successfully');

    /*return \Redirect('/profile')
    ->with('status',$user->first_name.'&nbsp;Profile Activated successfully');*/
    }
  }

    
	


	//view profile of particular user

  public function single_profile_view($id)
  {
    if(Auth::check())
      {
        
            if(Auth::User()->r_id==3 || Auth::User()->r_id==2 || Auth::User()->r_id==1 || Auth::User()->id==$id)
            {

                $id=$id;
                $obj=new User;
                    $usercollection=$obj->leftjoin('departments','departments.dept_id','=','users.department_id')
                    ->leftjoin('designations','designations.desig_id','=','users.designation_id')

                 

                    ->where('users.id','=',$id)
                    ->get();
                return view('profile.single_profile',['user'=>$usercollection]);
            }
            else
            {
            return redirect('/error-404/');
            }
       
      }
       // return $usercollection;
  }








	//Profile Status(enable/disable)
	public function change_disable($id)
	{
		$userid=$id;
	    $status="deactivated";
	  	
	  	$obj=new User;
	  	$update_status=$obj->where('id',$userid)->update(['profile_status'=>$status]);

		return \Redirect::back()
		->with('status','Account is Disabled');
	}
	public function change_enable($id)
	{
		$userid=$id;
	    $status="activated";
	  	
	  	$obj=new User;
	  	$update_status=$obj->where('id',$userid)->update(['profile_status'=>$status]);

		return \Redirect::back()
		->with('status','Account is Enabled');
	}




  //documents view methods goes here
  public function address_proof($id)
 {
         //return user collection to display image and name
        $obj=new User;
        $usercollection=$obj->leftjoin('departments','departments.dept_id','=','users.department_id')
        ->leftjoin('designations','designations.desig_id','=','users.designation_id')
        ->where('users.id','=',$id)
        ->get();

       //return address proof all documents
        $obj1= new address_proof;
        $address_proof=$obj1->where('emp_id','=',$id)->get();

    return view('profile.documents_view',['user'=>$usercollection,'address_proof'=>$address_proof]);
 }


  public function certificates($id)
 {
         //return user collection to display image and name
        $obj=new User;
        $usercollection=$obj->leftjoin('departments','departments.dept_id','=','users.department_id')
        ->leftjoin('designations','designations.desig_id','=','users.designation_id')
        ->where('users.id','=',$id)
        ->get();

       //return certificates all documents
      $obj1= new certificate;
        $certificate=$obj1->where('emp_id','=',$id)->get();

    return view('profile.documents_view',['user'=>$usercollection,'certificate'=>$certificate]);
 }

  public function experience_letters($id)
 {
         //return user collection to display image and name
        $obj=new User;
        $usercollection=$obj->leftjoin('departments','departments.dept_id','=','users.department_id')
        ->leftjoin('designations','designations.desig_id','=','users.designation_id')
        ->where('users.id','=',$id)
        ->get();

       //return experience  all documents
       $obj1= new expirience_letter;
        $expirience_letter=$obj1->where('emp_id','=',$id)->get();

    return view('profile.documents_view',['user'=>$usercollection,'expirience_letter'=>$expirience_letter]);
 }

 public function pay_slips($id)
 {
         //return user collection to display image and name
        $obj=new User;
        $usercollection=$obj->leftjoin('departments','departments.dept_id','=','users.department_id')
        ->leftjoin('designations','designations.desig_id','=','users.designation_id')
        ->where('users.id','=',$id)
        ->get();

       //return pay slip all documents
       $obj1= new previous_payslip;
        $pay_slip=$obj1->where('emp_id','=',$id)->get();

    return view('profile.documents_view',['user'=>$usercollection,'pay_slip'=>$pay_slip]);
 }






	//to preview pdf 
 //cv
	public function preview_pdf_cv($id)
	{
		$obj1=new User;
		$pdf=$obj1->where('id','=',$id)->get();
 	 
		foreach($pdf as $p)
		{
 	 return response()->file($p->cv, [

         'Content-Type' => 'application/pdf'

       ]);
    }
}

//certificates
  public function preview_pdf_certificates(Request $request)
  {
     //return $request->address_proof;
    $obj1=new User;
    $pdf=$obj1->where('id','=',$request->empid)->get();
   
    foreach($pdf as $p)
    {
   return response()->file($request->certificate_doc, [

         'Content-Type' => 'application/pdf'

       ]);
    }

}
//experience letter
  public function preview_pdf_expirience_letter(Request $request)
  {
     //return $request->address_proof;
    $obj1=new User;
    $pdf=$obj1->where('id','=',$request->empid)->get();
   
    foreach($pdf as $p)
    {
   return response()->file($request->expirience_doc, [

         'Content-Type' => 'application/pdf'

       ]);
    }

}
//address proof
  public function preview_pdf_address_proof(Request $request)
  {
     //return $request->address_proof;
    $obj1=new User;
    $pdf=$obj1->where('id','=',$request->empid)->get();
   
    foreach($pdf as $p)
    {
   return response()->file($request->address_proof, [

         'Content-Type' => 'application/pdf'

       ]);
    }

}
//payslip
  public function preview_pdf_pay_slip(Request $request)
  {
     //return $request->address_proof;
    $obj1=new User;
    $pdf=$obj1->where('id','=',$request->empid)->get();
   
    foreach($pdf as $p)
    {
   return response()->file($request->payslip_doc, [

         'Content-Type' => 'application/pdf'

       ]);
    }

}
  	


//upload more documents


public function upload_document_panel($id)
  {
   
           
            $id=$id;
            $obj=new User;
            $usercollection=$obj->leftjoin('departments','departments.dept_id','=','users.department_id')
            ->leftjoin('designations','designations.desig_id','=','users.designation_id')
            ->where('users.id','=',$id)
            ->get();
      return view('profile.upload_doc',['user'=> $usercollection]);
        
       
  }
  public function upload_document_submit(Request $request)
  { 
    $id=$request->id;
   
    

    $path = 'upload/employee/'.$id;
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

       


   
        return \Redirect::back()
        ->with('status','uploaded successfully!');
      //  return "true";
  

}

//update documents methods

public function upload_biodata(Request $request)
{
   $id=$request->empid;
   $path = 'upload/employee/'.$id;
     //cv
         if($request->file('cv'))
        {
          //delete old cv
          $obj1= new User;
          $getoldcvname=$obj1->where('id','=',$id)->get();
          foreach($getoldcvname as $arr)
          {
             $oldcv=$arr->cv;
             File::delete($oldcv);
          }

          $image1 = $request->file('cv');
          $cv = time().'.'.$image1->getClientOriginalExtension();
          
          $image1->move($path, $cv);
           $obj = new User;
            $withpath=$path.'/'.$cv;
           $updateuser=$obj->where('id','=',$id)
           ->update(['cv'=>$withpath]);
        }

        return \Redirect::back()
        ->with('status','Biodata updated successfully.');


}
public function update_document_panel(Request $request)
{
  $id=$request->empid;
  $doc=$request->doc;
  $doctype=$request->doc_type;
  $cid=$request->autoid;

  //single user data to display image and firstname etc
    $obj=new User;
        $usercollection=$obj->leftjoin('departments','departments.dept_id','=','users.department_id')
        ->leftjoin('designations','designations.desig_id','=','users.designation_id')
        ->where('users.id','=',$id)
        ->get();
       // return $doctype;
  return view('profile.update_doc',['empid'=>$id,'doc'=>$doc,'doctype'=>$doctype,'id'=>$cid,'user'=>$usercollection]);
}

public function update_certificate_submit(Request $request)
{
   $id=$request->empid;
   $certificate_record=$request->certificate_record;
   $cid=$request->cid;

   $path = 'upload/employee/'.$id;
     //cv
         if($request->file('certificate'))
        {
          //delete old cv
          $obj1= new certificate;
          $getoldcertificatename=$obj1->where('cid','=',$cid)->get();
          foreach($getoldcertificatename as $arr)
          {
             $old=$arr->certificate_doc;
             File::delete($old);
          }

          $doc = $request->file('certificate');
          $docname = time().'.'.$doc->getClientOriginalExtension();
          
          $doc->move($path, $docname);
           $obj = new certificate;
            $withpath=$path.'/'.$docname;
           $updatedoc=$obj->where('cid','=',$cid)
           ->update(['certificate_doc'=>$withpath]);
    

         
        }

       return redirect()->action(
    'ProfileController@single_profile_view', ['id' => $id])
        ->with('status','certificate updated successfully.');



}

public function update_address_proof_submit(Request $request)
{
   $id=$request->empid;
   $address_proof=$request->address_proof;
   $aid=$request->aid;

   $path = 'upload/employee/'.$id;
     //cv
         if($request->file('address_proof'))
        {
          //delete old cv
          $obj1= new address_proof;
          $getoldaddress_proofname=$obj1->where('aid','=',$aid)->get();
          foreach($getoldaddress_proofname as $arr)
          {
             $old=$arr->certificate_doc;
             File::delete($old);
          }

          $doc = $request->file('address_proof');
          $docname = time().'.'.$doc->getClientOriginalExtension();
          
          $doc->move($path, $docname);
           $obj = new address_proof;
            $withpath=$path.'/'.$docname;
           $updatedoc=$obj->where('aid','=',$aid)
           ->update(['address_proof_doc '=>$withpath]);

          
          
        }

         return redirect()->action(
    'ProfileController@single_profile_view', ['id' => $id])
      ->with('status','Address Proof  updated successfully.');



}


public function update_expirience_letter_submit(Request $request)
{
   $id=$request->empid;
   $expirience_doc=$request->expirience_doc;
   $eid=$request->eid;

   $path = 'upload/employee/'.$id;
     //cv
         if($request->file('expirience_letter_doc'))
        {
          //delete old cv
          $obj1= new expirience_letter;
          $getoldexpirience_lettername=$obj1->where('eid','=',$eid)->get();
          foreach($getoldexpirience_lettername as $arr)
          {
             $old=$arr->expirience_doc;
             File::delete($old);
          }

          $doc = $request->file('expirience_letter_doc');
          $docname = time().'.'.$doc->getClientOriginalExtension();
          
          $doc->move($path, $docname);
           $obj = new expirience_letter;
            $withpath=$path.'/'.$docname;
           $updatedoc=$obj->where('eid','=',$eid)
           ->update(['expirience_doc'=>$withpath]);

       
      
        }
        return redirect()->action(
    'ProfileController@single_profile_view', ['id' => $id])
        ->with('status','Experience Letter updated successfully');

         



}

public function update_payslip_submit(Request $request)
{
   $id=$request->empid;
   $payslip_doc=$request->payslip_doc;
   $pid=$request->pid;

   $path = 'upload/employee/'.$id;
     //cv
         if($request->file('payslip'))
        {
          //delete old cv
          $obj1= new previous_payslip;
          $getoldpaysliprname=$obj1->where('pid','=',$pid)->get();
          foreach($getoldpaysliprname as $arr)
          {
             $old=$arr->payslip_doc;
             File::delete($old);
          }

          $doc = $request->file('payslip');
          $docname = time().'.'.$doc->getClientOriginalExtension();
          
          $doc->move($path, $docname);
           $obj = new previous_payslip;
            $withpath=$path.'/'.$docname;
           $updatedoc=$obj->where('pid','=',$pid)
           ->update(['payslip_doc '=>$withpath]);

            

          
        }

        return redirect()->action(
    'ProfileController@single_profile_view', ['id' => $id])
        ->with('status',' Payslip updated successfully.');


}


//my profile Edit

public function profile_edit_panel($id)
  {
    if(Auth::check())
      {
        
            if(Auth::User()->r_id==3 || Auth::User()->r_id==2 || Auth::User()->r_id==1 || Auth::User()->id==$id)
            {
    
                $id=$id;

                $obj=new User;
                    $usercollection=$obj->leftjoin('departments','departments.dept_id','=','users.department_id')
                    ->leftjoin('designations','designations.desig_id','=','users.designation_id')
                    ->where('users.id','=',$id)
                    ->get();

                    $obj2=new department;
                       $departmentcollection=$obj2->get();

                        $obj3=new designation;
                       $designationcollection=$obj3->get();

                return view('profile.single_profile',['user'=>$usercollection,'employeeid'=>$id,'department'=>$departmentcollection,'designation'=>$designationcollection]);
             }
            else
            {
            return redirect('/error-404/');
            }

  }
}




public function profile_edit_submit(Request $request)
  { 
    if(Auth::check())
    {
        $id=$request->eid;
        if(Auth::user()->r_id==3)
          {
                $obj1 =new user();
            $usercollection=$obj1->where('id','=',$request->eid)
          ->update(['first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'dob'=>$request->dob,
                'city'=>$request->city,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'age'=>$request->age,
                'doj'=>$request->doj,
                'employee_type'=>$request->employee_type,
                'reffered_by'=>$request->reffered_by,
                'department_id'=>$request->department_id,
                'designation_id'=>$request->designation_id
                
               
              ]);

           return redirect()->action(
          'ProfileController@single_profile_view', ['id' => $id])
          ->with('status','Profile updated successfully!');

          }
          else
          {
              $obj2 =new user();
            $usercollection=$obj2->where('id','=',$request->eid)
          ->update(['email'=>$request->email,
                'dob'=>$request->dob,
                'city'=>$request->city,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'age'=>$request->age,
               ]);

         // single profile view is in post methos so ur getting no message error 
           return redirect()->action(
          'ProfileController@single_profile_view', ['id' => $id])
          ->with('status','Profile updated successfully!');
          }

    
   
       
  }
}


public function profile_image_edit_submit(Request $request)
{
  $id=$request->eid;
  $path = 'upload/employee/'.$id;
        
        if($request->file('image'))
        {

          //delete old image
          $obj1= new User;
          $getoldimagename=$obj1->where('id','=',$id)->get();
          foreach($getoldimagename as $arr)
          {
             $oldimage=$arr->profile_image;
             File::delete($oldimage);
          }
         

          $image = $request->file('image');
           $img= time().'.'.$image->getClientOriginalExtension();
          
          $image->move($path,$img);
           $obj = new User;
           //store image name with path in db
           $imagewithpath=$path.'/'.$img;
           $updateuser=$obj->where('id','=',$id)
           ->update(['profile_image'=>$imagewithpath]);
        }
           return redirect()->action(
          'ProfileController@single_profile_view', ['id' => $id]);
         
  }

}
