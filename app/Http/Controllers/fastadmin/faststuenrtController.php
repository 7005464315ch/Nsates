<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\studententry;
use Illuminate\Http\Request;

class faststuenrtController extends Controller
{
    public function faststuenrt() {
            $studentenrep = studententry::all();
        return view('fastadmin.faststuenrt',compact('studentenrep'));
    }

     public function viewsuencode(Request $request){
      
        $studenten = ['studentenrep'=>studententry::where('student_entry_code', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('fastadmin.faststuenrt',$studenten);
    }


     public function viewsuendate(Request $request){
        
        $studenten = ['studentenrep'=>studententry::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('fastadmin.faststuenrt',$studenten);
    }


}