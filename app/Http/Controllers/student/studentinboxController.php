<?php

namespace App\Http\Controllers\student;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\studentinbox;

class studentinboxController extends Controller
{
    public function studentinbox() {
         $datao = array();
        if (session::has('sloginid')) {
            $datao = student::where('id','=',session::get('sloginid'))->first();
            
        }
        $studin = studentinbox::where('student_code',session::get('current_code'))->get(); 
        return view('student.studentinbox',compact('datao','studin'));
    }

    

     public function studiofencode(Request $request){
        $datao = array();
        if (session::has('sloginid')) {
            $datao = student::where('id','=',session::get('sloginid'))->first();
            
        }
      
        $studi = ['studin'=>studentinbox::where('student_code', 'Like', '%' . request('ssearch') . '%')->get()];

        return view('student.studentinbox',$studi,compact('datao'));
    }


     public function studiofendate(Request $request){
        $datao = array();
        if (session::has('sloginid')) {
            $datao = student::where('id','=',session::get('sloginid'))->first();
            
        }
        
        $studi = ['studin'=>studentinbox::where('created_date','>=',$request->from)->where('created_date','<=',$request->to)->get()];
        return view('student.studentinbox',$studi,compact('datao'));
    }

}