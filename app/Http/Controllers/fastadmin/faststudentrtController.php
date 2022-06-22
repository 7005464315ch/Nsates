<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\student;
use Illuminate\Http\Request;

class faststudentrtController extends Controller
{
    public function faststudentrt() {
         $studentenrep = student::all();
        return view('fastadmin.faststudentrt',compact('studentenrep'));
    }

     public function viewstuecode(Request $request){
      
        $studenten = ['studentenrep'=>student::where('student_no', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('fastadmin.faststudentrt',$studenten);
    }


     public function viewstuedate(Request $request){
        
        $studenten = ['studentenrep'=>student::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('fastadmin.faststudentrt',$studenten);
    }


}