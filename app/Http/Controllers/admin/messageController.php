<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\helpandreview;
use Illuminate\Http\Request;

class messageController extends Controller
{
    public function message() {
         $staffaens = helpandreview::all(); 
        return view('admin.message',compact('staffaens'));
    }


      public function viewadmesscode(Request $request){
      
        $staffa = ['staffaens'=>helpandreview::where('staff_code', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('admin.message',$staffa);
    }


     public function viewadmessdate(Request $request){
        
        $staffa = ['staffaens'=>helpandreview::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('admin.message',$staffa);
    }

}