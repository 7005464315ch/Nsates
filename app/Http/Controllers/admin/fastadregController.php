<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use Hash;
use App\Models\fastadmin;
use Illuminate\Http\Request;


class fastadregController extends Controller
{
    public function fastadreg() {
         
        return view('admin.fastadreg');
    }

    public function fadminreg(Request $request){
         $unique_no = fastadmin::orderBy('id', 'DESC')->pluck('id')->first();
        if($unique_no == null or $unique_no == ""){
        #If Table is Empty
        $unique_no = 1;
        }
        else{
        #If Table has Already some Data
        $unique_no = $unique_no + 1;
      }

       $staff = new fastadmin();
       $staff->fadmin_code = 'FADMIN00'.$unique_no;
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

          if ($request->hasFile('fadmin_pic')){
            $file = $request->file('fadmin_pic');
            $fileName = 'fadmin_pic'.rand(999,9999).'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('fadmin_pic',$fileName);

            $staff->fadmin_pic= $path;
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