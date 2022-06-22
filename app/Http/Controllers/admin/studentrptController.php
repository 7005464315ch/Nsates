<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\student;
use Illuminate\Http\Request;

class studentrptController extends Controller
{
    public function studentrpt() {
         $studentenrep = student::all();
        return view('admin.studentrpt',compact('studentenrep'));
    }


    public function viewastuecode(Request $request){
      
        $studenten = ['studentenrep'=>student::where('student_no', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('admin.studentrpt',$studenten);
    }


     public function viewastuedate(Request $request){
        
        $studenten = ['studentenrep'=>student::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('admin.studentrpt',$studenten);
    }

}