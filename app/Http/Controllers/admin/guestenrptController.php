<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\guestentry;
use Illuminate\Http\Request;

class guestenrptController extends Controller
{
    public function guestenrpt() {
         $guestens = guestentry::all();
        return view('admin.guestenrpt',compact('guestens'));
    }

       public function viewgencode(Request $request){
      
        $guest = ['guestens'=>guestentry::where('entry_code', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('admin.guestenrpt',$guest,);
    }


     public function viewgendate(Request $request){
        
        $guest = ['guestens'=>guestentry::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('admin.guestenrpt',$guest,);
    }

}