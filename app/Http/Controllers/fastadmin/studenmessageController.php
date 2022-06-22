<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\student;
use Illuminate\Http\Request;

class studenmessageController extends Controller
{
    public function studenmessage() {
      
        return view('fastadmin.studenmessage');
    }

}