<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\studententry;
use Illuminate\Http\Request;

class stuenrptController extends Controller
{
    public function stuenrpt() {
            $studentenrep = studententry::all();
        return view('admin.stuenrpt',compact('studentenrep'));
    }

     public function viewiencode(Request $request){
      
        $studenten = ['studentenrep'=>studententry::where('student_entry_code', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('admin.stuenrpt',$studenten);
    }


     public function viewiendate(Request $request){
        
        $studenten = ['studentenrep'=>studententry::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('admin.stuenrpt',$studenten);
    }

}