<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Session;
use App\Models\staff;
use App\Models\student;
use App\Models\studententry;
use Illuminate\Http\Request;

class staffstudentenController extends Controller
{
    public function staffstudenten() {
            $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }
        
        return view('staff.staffstudenten',compact('datao'));
    }


    // public function sstudentenare(Request $request){
    //      $datao = array();
    //     if (session::has('staffaid')) {
    //         $datao = staff::where('id','=',session::get('staffaid'))->first();
            
    //     }
        
    //     $reporty = ['reporty'=>student::find('student_no', 'Like', '%' . request('ssearch') . '%')->get()];
    //      // $stusr = ['sostudents'=>student::OrderBy('id','asc')->paginate(3)];
    //     return view('staff.staffstudenten',$reporty,compact('datao'));
    // }


    public function sstudentenare(Request $ssearch){
        $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }

        if($registrations=student::wherestudent_no( $ssearch->ssearch)->first())
        {
    //dd($registrations);
      return view('staff.staffstudenten',compact('datao'))->with('registrations', $registrations);


      }else
           {
     $stuff_notfound= array(
     "success" => false,
     "mesg" => " Not Found");


return view('staff.staffstudenten',compact('datao'))->with('stuff_notfound','No Data Found');

}

}


     public function sstudenten(Request $request){

       
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
       $stunen ->reference_code = $request->reference_code;
       $stunen ->reference_name = $request->reference_name;
       $stunen ->gate_no = $request->gate_no;
       $stunen ->student_code = $request->student_code;
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
       $stunen ->address = $request->address;
       $stunen ->city = $request->city;
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