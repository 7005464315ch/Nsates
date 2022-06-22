<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Session;
use Storage;
use App\Models\staff;
use App\Models\guestentry;
use Illuminate\Http\Request;

class staffguestenController extends Controller
{
    public function staffguesten() {
          $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }
        return view('staff.staffguesten',compact('datao'));
    }



     public function staffgueston(Request $request) {

       $unique_no = guestentry::orderBy('id', 'DESC')->pluck('id')->first();
        if($unique_no == null or $unique_no == ""){
        #If Table is Empty
        $unique_no = 1;
        }
        else{
        #If Table has Already some Data
        $unique_no = $unique_no + 1;
      }
        //store
       $guesten = new guestentry();
       $guesten->entry_code = 'GUASTENT00'.$unique_no;
       $guesten ->reference_code = $request->input('reference_code');
       $guesten ->reference_name = $request->input('reference_name');
       $guesten ->guest_name = $request->input('guest_name');
       $guesten ->guest_desc = $request->input('guest_desc');
       $guesten ->email = $request->input('email');
       $guesten ->phone_no = $request->input('phone_no');
       $guesten ->guest_gender = $request->input('guest_gender');
       $guesten ->guest_addhaar = $request->input('guest_addhaar');
       $guesten ->pancard_no = $request->input('pancard_no');
       $guesten ->address = $request->input('address');
       $guesten ->city = $request->input('city');
       $guesten ->state = $request->input('state');
       $guesten ->country = $request->input('country');
       $guesten ->zipcode = $request->input('zipcode');
       $guesten ->member_no = $request->input('member_no');
       $guesten ->member_name = $request->input('member_name');
       $guesten ->member_gender = $request->input('member_gender');
       $guesten ->member_doc_no = $request->input('member_doc_no');
       $guesten ->guest_otherinfo = $request->input('guest_otherinfo');

        //  Guest picture code fuction

        $imget = $request->guest_pic;
        $folderPath = "guest_pic/";
        $image_parts = explode(";base64,", $imget);
        // $image_type_aux = explode("image/", $image_parts[0]);
        // $image_type = $image_type_aux[1];
        
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';
        
        $filex = $folderPath . $fileName;
        Storage::put($filex, $image_base64);


        $guesten->guest_pic =$filex;

      

        //  Group picture code fuction

       
      

        $imgeta = $request->group_pic;
        $folderPath = "group_pic/";
        $image_parts = explode(";base64,", $imgeta);
        // $image_type_aux = explode("image/", $image_parts[0]);
        // $image_type = $image_type_aux[1];
        
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';
        
        $filexa = $folderPath . $fileName;
        Storage::put($filexa, $image_base64);

        
        $guesten->group_pic =$filexa;


          if ($request->hasFile('addhaar_pic')){
            $file = $request->file('addhaar_pic');
            $fileName = 'addhaar_pic'.rand(999,9999).'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('addhaar_pic',$fileName);

            $guesten->addhaar_pic = $path;
        }

          if ($request->hasFile('pancard_pic')){
            $file = $request->file('pancard_pic');
            $fileName = 'pancard_pic'.rand(999,9999).'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('pancard_pic',$fileName);

            $guesten->pancard_pic = $path;
        }
       $res = $guesten -> save();

       if($res){
           return back() -> with('success','you have registered sucessfully');

       }
        else{
             return back() -> with ('faill','something worong');
        }

     }

}