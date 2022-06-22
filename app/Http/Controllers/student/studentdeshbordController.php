<?php

namespace App\Http\Controllers\student;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\studententry;

class studentdeshbordController extends Controller
{
    public function studentdeshbord() {
         $datao = array();
        if (session::has('sloginid')) {
            $datao = student::where('id','=',session::get('sloginid'))->first();
            
        }

        $studentens = studententry::where('student_code',session::get('current_code'))->count();  
         
        return view('student.studentdeshbord',compact('datao','studentens'));
    }

}