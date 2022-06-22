<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Session;
use App\Models\staff;
use App\Models\helpandreview;
use Illuminate\Http\Request;

class staffhreportController extends Controller
{
    public function staffhreport() {
            $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }
        $helpoo = helpandreview::where('staff_code',session::get('current_codeo'))->get();
        return view('staff.staffhreport',compact('datao','helpoo'));
    }

     public function staffofencode(Request $request){
         $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }
      
        $studi = ['studin'=>helpandreview::where('staff_code', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('staff.staffhreport',$studi,compact('datao'));
    }


     public function staffofendate(Request $request){
         $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
        }
        
        $studi = ['studin'=>helpandreview::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('staff.staffhreport',$studi,compact('datao'));
    }

}