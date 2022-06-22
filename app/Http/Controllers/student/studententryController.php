<?php

namespace App\Http\Controllers\student;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\studententry;


class studententryController extends Controller
{
    public function studententry() {
         $datao = array();
        if (session::has('sloginid')) {
            $datao = student::where('id','=',session::get('sloginid'))->first();
            
        }
         
        return view('student.studententry',compact('datao'));
    }


     public function studenters(Request $request){

       
        // if($request->file('user_File')) {
        //         $req_file = time().'_'.$request->file('user_File')->getClientOriginalName();
        //         $filePath = $request->file('user_File')->storeAs('uploads',  $req_file, 'public');
        //           }
     //end file upload
       
       $unique_no = studententry::orderBy('id', 'DESC')->pluck('id')->first();
        if($unique_no == null or $unique_no == ""){
        #If Table is Empty
        $unique_no = 1;
        }
        else{
        #If Table has Already some Data
        $unique_no = $unique_no + 1;
      }
        //store
       $stunen = new studententry();
       $stunen->student_entry_code = 'GAENT00'.$unique_no;
       $stunen ->student_code = $request->student_code;
       $stunen ->reference_code = $request->reference_code;
       $stunen ->reference_name = $request->reference_name;
       $stunen ->student_no = $request->student_no;
       $stunen ->reg_no = $request->reg_no;
       $stunen ->dsecp = $request->dsecp;
       $stunen ->full_name = $request->full_name;
       $stunen ->department_name = $request->department_name;
       $stunen ->hostel_no = $request->hostel_no;
       $stunen ->room_no = $request->room_no;
       $stunen ->admission_years = $request->admission_years;
       $stunen ->gender = $request->gender;
       $stunen ->dob = $request->dob;
       $stunen ->email = $request->email;
       $stunen ->phone_no = $request->phone_no;
       $stunen ->state = $request->state;
       $stunen ->country = $request->country;
       $stunen ->zipcode = $request->zipcode;
       $stunen ->other_info = $request->other_info;
       $res = $stunen -> save();

       if($res){
           return back() -> with('success','you have registered sucessfully');

       }
        else{
             return back() -> with ('faill','something worong');
        }
                 

}

}