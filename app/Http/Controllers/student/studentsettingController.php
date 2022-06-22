<?php

namespace App\Http\Controllers\student;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\student;

class studentsettingController extends Controller
{
    public function studentsetting() {
         $datao = array();
        if (session::has('sloginid')) {
            $datao = student::where('id','=',session::get('sloginid'))->first();
            
        }
         
        return view('student.studentsetting',compact('datao'));
    }

}