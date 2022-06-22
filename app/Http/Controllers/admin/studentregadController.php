<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use Hash;
use App\Models\student;
use Illuminate\Http\Request;


class studentregadController extends Controller
{
    public function studentregad() {
         
        return view('admin.studentregad');
    }

     public function studentad(Request $request){
         $unique_no = student::orderBy('id', 'DESC')->pluck('id')->first();
        if($unique_no == null or $unique_no == ""){
        #If Table is Empty
        $unique_no = 1;
        }
        else{
        #If Table has Already some Data
        $unique_no = $unique_no + 1;
      }

       $stus = new student();
       $stus->student_code = 'STUDENT00'.$unique_no;
       $stus ->student_no = $request->student_no;
       $stus ->reg_no = $request->reg_no;
       $stus ->hostel_no = $request->hostel_no;
       $stus ->room_no = $request->room_no;
       $stus ->admission_year = $request->admission_year;
       $stus ->department_name = $request->department_name;
       $stus ->first_name = $request->first_name;
       $stus ->middle_name = $request->middle_name;
       $stus ->last_name = $request->last_name;
       $stus ->gender = $request->gender;
       $stus ->years = $request->years;
       $stus ->month = $request->month;
       $stus ->date = $request->date;
       $stus ->email = $request->email;
       $stus ->phone_no = $request->phone_no;
       $stus ->password = Hash::make ($request->password);
       $stus ->address_one = $request->address_one;
       $stus ->address_two = $request->address_two;
       $stus ->city = $request->city;
       $stus ->state = $request->state;
       $stus ->country = $request->country;
       $stus ->zipcode = $request->zipcode;
       $stus ->other_info = $request->other_info;

          if ($request->hasFile('picture')){
            $file = $request->file('picture');
            $fileName = 'picture'.rand(999,9999).'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('student_pic',$fileName);

            $stus->picture= $path;
        }

       $res = $stus -> save();
        if($res){
           return back() -> with('success','you have registered sucessfully');

       }
        else{
             return back() -> with ('faill','something worong');
        }
    }

}