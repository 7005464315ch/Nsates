<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\vehicalentry;
use Illuminate\Http\Request;

class fastvehirtController extends Controller
{
    public function fastvehirt() {
          $vehicalen = vehicalentry::all();
        return view('fastadmin.fastvehirt',compact('vehicalen'));
    }

       public function viewvencode(Request $request){
      
        $vehi = ['vehicalen'=>vehicalentry::where('entry_code', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('fastadmin.fastvehirt',$vehi);
    }


     public function viewvendate(Request $request){
        
        $vehi = ['vehicalen'=>vehicalentry::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('fastadmin.fastvehirt',$vehi);
    }

}