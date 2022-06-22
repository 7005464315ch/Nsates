<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\staffentry;
use Illuminate\Http\Request;

class staenrptController extends Controller
{
    public function staenrpt() {
         $staffaens = staffentry::all();
        return view('admin.staenrpt',compact('staffaens'));
    }

    public function viewastencode(Request $request){
      
        $staffa = ['staffaens'=>staffentry::where('entry_code', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('admin.staenrpt',$staffa);
    }


     public function viewastendate(Request $request){
        
       $staffa = ['staffaens'=>staffentry::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('admin.staenrpt',$staffa);
    }

}