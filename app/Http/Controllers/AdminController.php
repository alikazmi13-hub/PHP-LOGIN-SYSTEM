<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Auth;
class AdminController extends Controller
{
    public function authenticate(Request $request){
        // echo "Hello i am Admin Authenticate Function From Admin Controller ";

        $this->Validate($request,[
            'email'=> 'required| email',
            'password'=> 'required'
        ]);

        if (Auth::guard('admin')->attempt(['email'=> $request->email,'password'=>$request-> password],
        $request->get('remember'))){
            // if Admin Logged in true
            return redirect()->route('admin.dashboard');
            
        }else{
            // if not logged in false
            session()->flash('error','Either Email / Password is Incorrect');
            return back()->withinput($request->only('email'));
        }
   
    }


    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

};
