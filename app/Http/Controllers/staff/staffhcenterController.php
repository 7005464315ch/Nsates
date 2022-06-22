<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Session;
use App\Models\staff;
use App\Models\helpandreview;
use Illuminate\Http\Request;

class staffhcenterController extends Controller
{
    public function staffhcenter() {
            $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }
        return view('staff.staffhcenter',compact('datao'));
    }

    public function staffhelp(Request $request){

        $unique_no = helpandreview::orderBy('id', 'DESC')->pluck('id')->first();
        if($unique_no == null or $unique_no == ""){
        #If Table is Empty
        $unique_no = 1;
        }
        else{
        #If Table has Already some Data
        $unique_no = $unique_no + 1;
      }

      $helpr = new helpandreview();
       $helpr ->entry_code = 'HELP00'.$unique_no;
       $helpr ->staff_code = $request->staff_code;
       $helpr ->staff_name = $request->staff_name;
       $helpr ->email = $request->email;
       $helpr ->subject = $request->subject;
       $helpr ->description = $request->description;

       if ($request->hasFile('attechment_one')){
            $file = $request->file('attechment_one');
            $fileName = 'attechment_one'.rand(999,9999).'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('helpandreview',$fileName);

            $helpr->attechment_one = $path;
        }

        if ($request->hasFile('attechment_two')){
            $file = $request->file('attechment_two');
            $fileName = 'attechment_two'.rand(999,9999).'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('helpandreview',$fileName);

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