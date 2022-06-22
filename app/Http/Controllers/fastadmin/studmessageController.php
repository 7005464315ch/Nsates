<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\student;
use Illuminate\Http\Request;

class studmessageController extends Controller
{
    public function studmessage() {
     
        return view('fastadmin.studmessage');
    }

}