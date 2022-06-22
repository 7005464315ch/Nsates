<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Session;
use App\Models\staff;
use App\Models\staffinbox;
use Illuminate\Http\Request;

class staffinboxController extends Controller
{
    public function staffinbox() {
            $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }
         $staffo= staffinbox::where('staff_code',session::get('current_codeo'))->get(); 
        return view('staff.staffinbox',compact('datao','staffo'));
    }

     public function staffoafencode(Request $request){
         $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }
      
        $studi = ['studin'=>staffinbox::where('staff_code', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('staff.staffinbox',$studi,compact('datao'));
    }


     public function staffoafendate(Request $request){
         $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
        }
        
        $studi = ['studin'=>staffinbox::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('staff.staffinbox',$studi,compact('datao'));
    }


}