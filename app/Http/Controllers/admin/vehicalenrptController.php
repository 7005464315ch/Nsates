<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\vehicalentry;
use Illuminate\Http\Request;

class vehicalenrptController extends Controller
{
    public function vehicalenrpt() {
          $vehicalen = vehicalentry::all();
        return view('admin.vehicalenrpt',compact('vehicalen'));
    }

     public function viewviencode(Request $request){
      
        $vehi = ['vehicalen'=>vehicalentry::where('entry_code', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('admin.vehicalenrpt',$vehi);
    }


     public function viewviendate(Request $request){
        
        $vehi = ['vehicalen'=>vehicalentry::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('admin.vehicalenrpt',$vehi);
    }


}