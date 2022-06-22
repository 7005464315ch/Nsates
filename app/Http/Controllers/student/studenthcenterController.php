<?php

namespace App\Http\Controllers\student;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\studenthelpreview;

class studenthcenterController extends Controller
{
    public function studenthcenter() {
         $datao = array();
        if (session::has('sloginid')) {
            $datao = student::where('id','=',session::get('sloginid'))->first();
            
        }
         
        return view('student.studenthcenter',compact('datao'));
    }

    public function studenthelpenx(Request $request){
         $unique_no = studenthelpreview::orderBy('id', 'DESC')->pluck('id')->first();
        if($unique_no == null or $unique_no == ""){
        #If Table is Empty
        $unique_no = 1;
        }
        else{
        #If Table has Already some Data
        $unique_no = $unique_no + 1;
      }

      $helpr = new studenthelpreview();
       $helpr ->entry_code = 'STHELP00'.$unique_no;
       $helpr ->student_code = $request->student_code;
       $helpr ->student_name = $request->student_name;
       $helpr ->email = $request->email;
       $helpr ->subject = $request->subject;
       $helpr ->description = $request->description;

       if ($request->hasFile('attechment_one')){
            $file = $request->file('attechment_one');
            $fileName = 'attechment_one'.rand(999,9999).'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('stuhelpandreview',$fileName);

            $helpr->attechment_one = $path;
        }

        if ($request->hasFile('attechment_two')){
            $file = $request->file('attechment_two');
            $fileName = 'attechment_two'.rand(999,9999).'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('stuhelpandreview',$fileName);

            $helpr->attechment_two = $path;
        }

        $res = $helpr -> save();

       if($res){
           return back() -> with('success','you have registered sucessfully');

       }
        else{
             return back() -> with ('faill','something worong');
    }

}

}