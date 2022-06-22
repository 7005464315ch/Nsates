<?php

namespace App\Http\Controllers\student;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\studenthelpreview;

class studenthreportController extends Controller
{
    public function studenthreport() {
         $datao = array();
        if (session::has('sloginid')) {
            $datao = student::where('id','=',session::get('sloginid'))->first();
            
        }
        $stuhelp = studenthelpreview::where('student_code',session::get('current_code'))->get();
        return view('student.studenthreport',compact('datao','stuhelp'));
    }

     public function viewstemesscode(Request $request){
        $datao = array();
        if (session::has('sloginid')) {
            $datao = student::where('id','=',session::get('sloginid'))->first();
            
        }
      
        $help = ['stuhelp'=>studenthelpreview::where('student_code', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('student.studenthreport',$help,compact('datao'));
    }


     public function viewstemessdate(Request $request){
        $datao = array();
        if (session::has('sloginid')) {
            $datao = student::where('id','=',session::get('sloginid'))->first();
            
        }
        
        $help = ['stuhelp'=>studenthelpreview::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('student.studenthreport',$help,compact('datao'));
    }




}