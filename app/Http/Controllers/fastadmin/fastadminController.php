<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\student;
use Illuminate\Http\Request;

class fastadminController extends Controller
{
    public function fastadmin() {
       $studentr = student::all();  
        return view('fastadmin.fastadmin')->with('student',$studentr);
    }

}