<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use Hash;
use App\Models\superadmin;
use Illuminate\Http\Request;

class cadminlogController extends Controller
{
    public function cadminlog() {
         
        return view('admin.cadminlog');
    }

     public function cadassetlog(Request $request){
      $cuser = superadmin::where('employee_no','=',$request->employee_no)->first();
      if($cuser){
         if(hash::check($request->password,$cuser->password)){
            $request->session()->put('superid',$cuser->id);
            $request->session()->put('current_code',$cuser->staff_code);
            return redirect('/caddeshbord');
         }else{
            return back()->with('failed','This Password Not Match');
         }
      }else{
         return back()->with('failed','This Username not Registered');
      }
    }

}