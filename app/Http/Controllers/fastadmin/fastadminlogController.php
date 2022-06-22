<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\student;
use Hash;
use App\Models\fastadmin;
use Illuminate\Http\Request;

class fastadminlogController extends Controller
{
    public function fastadminlog() {
       
        return view('fastadmin.fastadminlog');
    }

    public function fastassetlog(Request $request){
        $cuser = fastadmin::where('employee_no','=',$request->employee_no)->first();
      if($cuser){
         if(hash::check($request->password,$cuser->password)){
            $request->session()->put('fadminid',$cuser->id);
            $request->session()->put('current_code',$cuser->fadmin_code);
            return redirect('/fastadmin');
         }else{
            return back()->with('failed','this password not match');
         }
      }else{
         return back()->with('failed','this user name not registered');
      }
    }
    

}