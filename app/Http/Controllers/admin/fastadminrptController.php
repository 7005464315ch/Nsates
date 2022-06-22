<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\fastadmin;
use Illuminate\Http\Request;

class fastadminrptController extends Controller
{
    public function fastadminrpt() {
          $staffaens = fastadmin::all();
        return view('admin.fastadminrpt',compact('staffaens'));
    }

    public function viewadstaffcode(Request $request){
      
        $staffa = ['staffaens'=>fastadmin::where('employee_no', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('admin.fastadminrpt',$staffa);
    }


     public function viewadstaffdate(Request $request){
        
        $staffa = ['staffaens'=>fastadmin::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('admin.fastadminrpt',$staffa);
    }

}