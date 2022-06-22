<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use Storage;
use App\Models\fastadmin;
use App\Models\staff;
use App\Models\vehicalentry;
use Illuminate\Http\Request;

class fastvehicalentryController extends Controller
{
    public function fastvehicalentry() {
            $datao = array();
        if (session::has('fadminid')) {
            $datao = fastadmin::where('id','=',session::get('fadminid'))->first();
            
        }
        return view('fastadmin.fastvehicalentry',compact('datao'));
    }

    public function fastvehicalon(Request $request) {

       $unique_no = vehicalentry::orderBy('id', 'DESC')->pluck('id')->first();
        if($unique_no == null or $unique_no == ""){
        #If Table is Empty
        $unique_no = 1;
        }
        else{
        #If Table has Already some Data
        $unique_no = $unique_no + 1;
      }
        //store
       $vehien = new vehicalentry();
       $vehien->entry_code = 'VEHICALENT00'.$unique_no;
       $vehien ->reference_code = $request->input('reference_code');
       $vehien ->reference_name = $request->input('reference_name');
       $vehien ->vehical_reg_no = $request->input('vehical_reg_no');
       $vehien ->vehical_type = $request->input('vehical_type');
       $vehien ->owner_name = $request->input('owner_name');
       $vehien ->vehical_md_comp = $request->input('vehical_md_comp');
       $vehien ->vehical_model = $request->input('vehical_model');
       $vehien ->vehical_trans_comp = $request->input('vehical_trans_comp');
       $vehien ->passenger_no = $request->input('passenger_no');
       $vehien ->dsecp = $request->input('dsecp');
       $vehien ->driver_rc_no = $request->input('driver_rc_no');
       $vehien ->driver_name = $request->input('driver_name');
       $vehien ->driver_phone_no = $request->input('driver_phone_no');
       $vehien ->owner_phone_no = $request->input('owner_phone_no');
       $vehien ->driver_gender = $request->input('driver_gender');
       $vehien ->address = $request->input('address');
       $vehien ->city = $request->input('city');
       $vehien ->state = $request->input('state');
       $vehien ->country = $request->input('country');
       $vehien ->zipcode = $request->input('zipcode');
       $vehien ->other_info = $request->input('other_info');

        //  Guest picture code fuction

        $imget = $request->vehical_pic;
        $folderPath = "vehical_pic/";
        $image_parts = explode(";base64,", $imget);
        // $image_type_aux = explode("image/", $image_parts[0]);
        // $image_type = $image_type_aux[1];
        
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';
        
        $filex = $folderPath . $fileName;
        Storage::put($filex, $image_base64);


        $vehien->vehical_pic =$filex;

      

        //  Group picture code fuction

       
      

        $imgeta = $request->driver_pic;
        $folderPath = "vehical_pic/";
        $image_parts = explode(";base64,", $imgeta);
        // $image_type_aux = explode("image/", $image_parts[0]);
        // $image_type = $image_type_aux[1];
        
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';
        
        $filexa = $folderPath . $fileName;
        Storage::put($filexa, $image_base64);

        
        $vehien->driver_pic =$filexa;


          if ($request->hasFile('licence_pic')){
            $file = $request->file('licence_pic');
            $fileName = 'licence_pic'.rand(999,9999).'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('vehical_pic',$fileName);

            $vehien->licence_pic = $path;
        }

         
       $res = $vehien -> save();

       if($res){
           return back() -> with('success','you have registered sucessfully');

       }
        else{
             return back() -> with ('faill','something worong');
        }

     }

}