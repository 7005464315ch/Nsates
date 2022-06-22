<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\staffentry;
use Illuminate\Http\Request;

class faststenrtController extends Controller
{
    public function faststenrt() {
         $staffaens = staffentry::all();
        return view('fastadmin.faststenrt',compact('staffaens'));
    }

     public function viewstencode(Request $request){
      
        $staffa = ['staffaens'=>staffentry::where('entry_code', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('fastadmin.faststenrt',$staffa);
    }


     public function viewstendate(Request $request){
        
       $staffa = ['staffaens'=>staffentry::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('fastadmin.faststenrt',$staffa);
    }


}