<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\helpandreview;
use Illuminate\Http\Request;

class staffmessageController extends Controller
{
    public function staffmessage() {
        $staffaens = helpandreview::all(); 
        return view('fastadmin.staffmessage',compact('staffaens'));
    }

     public function viewfasmesscode(Request $request){
      
        $staffa = ['staffaens'=>helpandreview::where('staff_code', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('fastadmin.staffmessage',$staffa);
    }


     public function viewfasmessdate(Request $request){
        
        $staffa = ['staffaens'=>helpandreview::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('fastadmin.staffmessage',$staffa);
    }

}