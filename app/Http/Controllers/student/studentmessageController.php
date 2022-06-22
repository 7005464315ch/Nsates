<?php

namespace App\Http\Controllers\student;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\studenthelpreview;

class studentmessageController extends Controller
{
    public function studentmessage() {
         $datao = array();
        if (session::has('sloginid')) {
            $datao = student::where('id','=',session::get('sloginid'))->first();
            
        }
         
         
        return view('student.studentmessage',compact('datao'));
    }

   


    

}