<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Session;
use Hash;
use App\Models\staff;
use Illuminate\Http\Request;


class staffregadController extends Controller
{
    public function staffregad() {
         
        return view('admin.staffregad');
    }

     public function staffad(Request $request){
         $unique_no = staff::orderBy('id', 'DESC')->pluck('id')->first();
        if($unique_no == null or $unique_no == ""){
        #If Table is Empty
        $unique_no = 1;
        }
        else{
        #If Table has Already some Data
        $unique_no = $unique_no + 1;
      }

       $staff = new staff();
       $staff->staff_code = 'STAFF00'.$unique_no;
       $staff ->employee_no = $request->employee_no;
       $staff ->post = $request->post;
       $staff ->department_name = $request->department_name;
       $staff ->first_name = $request->first_name;
       $staff ->middle_name = $request->middle_name;
       $staff ->last_name = $request->last_name;
       $staff ->gender = $request->gender;
       $staff ->years = $request->years;
       $staff ->month = $request->month;
       $staff ->date = $request->date;
       $staff ->email = $request->email;
       $staff ->phone_no = $request->phone_no;
       $staff ->password = Hash::make ($request->password);
       $staff ->address_one = $request->address_one;
       $staff ->address_two = $request->address_two;
       $staff ->city = $request->city;
       $staff ->state = $request->state;
       $staff ->country = $request->country;
       $staff ->zipcode = $request->zipcode;
       $staff ->other_info = $request->other_info;

          if ($request->hasFile('picture')){
            $file = $request->file('picture');
            $fileName = 'picture'.rand(999,9999).'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('staff_pic',$fileName);

            $staff->picture= $path;
        }

       $res = $staff -> save();
        if($res){
           return back() -> with('success','you have registered sucessfully');

       }
        else{
             return back() -> with ('faill','something worong');
        }
    }

}