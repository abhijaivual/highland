<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\department;
use App\designation;

use App\attendance;

class AuthController extends Controller
{
    public function login()
    {
    	return view('login');
    }

        public function login_process(Request $request)
    {
        $logged="false";
        $auth = user::where('id',$request->input('emp_id'))
        ->first();
        if($auth){
                    Auth::login($auth);
                    $password = Auth::user()->password;
                    $emp_id = Auth::user()->emp_id;
                    $profile= Auth::user()->profile_status;
                    if($request->input('password'))
                    {
                        if ($request->input('password')==$password)
                           {
                                if($profile!="activated")
                                 {

                                        $logged="incomplete";
                                        echo "user";

                                 }
                                 else if($profile=="activated")
                                 {
                                         $logged="complete";
                                         echo"superuser";
                                       
                                 }
                                 else if($profile=="deactivated")
                                 {
                                     $logged="deactivated";
                                 }
                            }
                             else
                            {
                                $logged="false";
                                echo"invalid password";
                                
                            }
                    }
                    
               }
               else
               {
                    $logged="false";
                    echo"invalid Id and password";
               }
             
               
            if($logged=="incomplete")
            {
            
            return redirect('/registration/process-2/');
            
            }
             else if($logged=="complete")
            {
               return redirect('/dashboard');
               
            }
             else if($logged=="deactivated")
            {
               return \Redirect::back()
               ->withSuccess('status','This Account is deactivated.Kindly contact Hr.');
               
            }
            else if($logged=="false")
            {
                return \Redirect::back()
               ->withSuccess('status','User name and password do not match. try again ');
            }

    }

    public function dashboard()
    {
       return view('dashboard');
    }

    public function logout()
        {
            if(Auth::check())
            {
               Auth::logout();
               return view('login');
            }
            else
            {
              return view('login');
            }
        }

        public function error_404()
        {
            return view('error_404');
        }
}
