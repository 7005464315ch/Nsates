<?php

namespace App\Http\Controllers\student;
use App\Http\Controllers\Controller;
use Session;
use Hash;
use Illuminate\Http\Request;
use App\Models\student;
class studentlogController extends Controller
{
    public function studentlog() {
         
        return view('student.studentlog');
    }

    public function studentlogin(Request $request){
      $cuser = student::where('student_no','=',$request->student_no)->first();
      if($cuser){
         if(hash::check($request->password,$cuser->password)){
            $request->session()->put('sloginid',$cuser->id);
            $request->session()->put('current_code',$cuser->student_code);
            return redirect('/studentdeshbord');
         }else{
            return back()->with('failed','this password not match');
         }
      }else{
         return back()->with('failed','this user name not registered');
      }
    }

}