<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Session;
use Hash;
use Illuminate\Http\Request;
use App\Models\staff;

class staffloginController extends Controller
{
    public function stafflogin() {
         
        return view('staff.stafflogin');
    }

    public function stafflog(Request $request){
      $cuser = staff::where('employee_no','=',$request->employee_no)->first();
      if($cuser){
         if(hash::check($request->password,$cuser->password)){
            $request->session()->put('staffaid',$cuser->id);
            $request->session()->put('current_codeo',$cuser->staff_code);
            return redirect('/staffdeshbord');
         }else{
            return back()->with('failed','this password not match');
         }
      }else{
         return back()->with('failed','this user name not registered');
      }
    }

}