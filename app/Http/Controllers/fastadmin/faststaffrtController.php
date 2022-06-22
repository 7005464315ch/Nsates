<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\staff;
use Illuminate\Http\Request;

class faststaffrtController extends Controller
{
    public function faststaffrt() {
         $staffaens = staff::all();
        return view('fastadmin.faststaffrt',compact('staffaens'));
    }


      public function viewstaffcode(Request $request){
      
        $staffa = ['staffaens'=>staff::where('employee_no', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('fastadmin.faststaffrt',$staffa);
    }


     public function viewstaffdate(Request $request){
        
       $staffa = ['staffaens'=>staff::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('fastadmin.faststaffrt',$staffa);
    }


}