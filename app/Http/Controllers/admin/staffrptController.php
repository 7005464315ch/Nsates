<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\staff;
use Illuminate\Http\Request;

class staffrptController extends Controller
{
    public function staffrpt() {
         $staffaens = staff::all();
        return view('admin.staffrpt',compact('staffaens'));
    }


       public function viewistaffcode(Request $request){
      
        $staffa = ['staffaens'=>staff::where('employee_no', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('admin.staffrpt',$staffa);
    }


     public function viewistaffdate(Request $request){
        
       $staffa = ['staffaens'=>staff::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('admin.staffrpt',$staffa);
    }



}