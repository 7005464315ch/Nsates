<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\guestentry;
use Illuminate\Http\Request;

class fastguestrtController extends Controller
{
    public function fastguestrt() {
         $guestens = guestentry::all();
        return view('fastadmin.fastguestrt',compact('guestens'));
    }


     public function viewencode(Request $request){
      
        $guest = ['guestens'=>guestentry::where('entry_code', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('fastadmin.fastguestrt',$guest,);
    }


     public function viewendate(Request $request){
        
        $guest = ['guestens'=>guestentry::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('fastadmin.fastguestrt',$guest,);
    }

}