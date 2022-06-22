<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Session;
use App\Models\staff;
use App\Models\staffentry;
use Illuminate\Http\Request;

class staffstofentryController extends Controller
{
    public function staffstofentry() {
          $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }
        
        return view('staff.staffstofentry',compact('datao'));
    }

    public function sstaffen(Request $ssearch){
         $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }

        if($registrations=staff::whereemployee_no( $ssearch->ssearch)->first())
{
    //dd($registrations);
return view('staff.staffstofentry',compact('datao'))->with('registrations', $registrations);


}
else
{
$stuff_notfound= array(
"success" => false,
"mesg" => " Not Found"
);
return view('staff.staffstofentry',compact('datao'))->with('stuff_notfound','No Data Found');

}
    
    }


    public function sstaffonenx(Request $request){
        $unique_no = staffentry::orderBy('id', 'DESC')->pluck('id')->first();
        if($unique_no == null or $unique_no == ""){
        #If Table is Empty
        $unique_no = 1;
        }
        else{
        #If Table has Already some Data
        $unique_no = $unique_no + 1;
      }
        //store
       $staff = new staffentry();
       $staff->entry_code = 'STAFFEN00'.$unique_no;
       $staff ->reference_code = $request->reference_code;
       $staff ->reference_name = $request->reference_name;
       $staff ->gate_no = $request->gate_no;
       $staff ->staff_code = $request->staff_code;
       $staff ->employee_no = $request->employee_no;
       $staff ->post = $request->post;
       $staff ->dsecp = $request->dsecp;
       $staff ->full_name = $request->full_name;
       $staff ->department_name = $request->department_name;
       $staff ->gender = $request->gender;
       $staff ->dob = $request->dob;
       $staff ->email = $request->email;
       $staff ->phone_no = $request->phone_no;
       $staff ->address = $request->address;
       $staff ->address_two = $request->address_two;
       $staff ->city = $request->city;
       $staff ->state = $request->state;
       $staff ->country = $request->country;
       $staff ->zipcode = $request->zipcode;
       $staff ->other_info = $request->other_info;
       $res = $staff -> save();

       
       if($res){
           return back() -> with('success','you have registered sucessfully');

       }
        else{
             return back() -> with ('faill','something worong');
        }
                 
     
}

}

//     public function sstaffonenx(Request $request){
//         $unique_no = staffentry::orderBy('id', 'DESC')->pluck('id')->first();
//         if($unique_no == null or $unique_no == ""){
//         #If Table is Empty
//         $unique_no = 1;
//         }
//         else{
//         #If Table has Already some Data
//         $unique_no = $unique_no + 1;
//       }
//         //store
//        $staff = new staffentry();
//        $staff->entry_code = 'STAFFEN00'.$unique_no;
//        $staff ->reference_code = $request->reference_code;
//        $staff ->reference_name = $request->reference_name;
//        $staff ->gate_no = $request->gate_no;
//        $staff ->staff_code = $request->staff_code;
//        $staff ->employee_no = $request->employee_no;
//        $staff ->post = $request->post;
//        $staff ->dsecp = $request->dsecp;
//        $staff ->full_name = $request->full_name;
//        $staff ->department_name = $request->department_name;
//        $staff ->gender = $request->gender;
//        $staff ->dob = $request->dob;
//        $staff ->email = $request->email;
//        $staff ->phone_no = $request->phone_no;
//        $staff ->address = $request->address;
//        $staff ->address_two = $request->address_two;
//        $staff ->city = $request->city;
//        $staff ->state = $request->state;
//        $staff ->country = $request->country;
//        $staff ->zipcode = $request->zipcode;
//        $staff ->other_info = $request->other_info;
//        $res = $staff -> save();

//        if($res){
//            return back() -> with('success','you have registered sucessfully');

//        }
//         else{
//              return back() -> with ('faill','something worong');
//         }
                 
     
// }
   

