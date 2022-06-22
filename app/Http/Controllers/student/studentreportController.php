<?php

namespace App\Http\Controllers\student;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\studententry;

class studentreportController extends Controller
{
    public function studentreport() {
         $datao = array();
        if (session::has('sloginid')) {
            $datao = student::where('id','=',session::get('sloginid'))->first();
            
        }

        $studentens = studententry::where('student_code',session::get('current_code'))->get();  
        return view('student.studentreport',compact('datao','studentens'));
    }

}