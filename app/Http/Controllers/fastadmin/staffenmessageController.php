<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\student;
use Illuminate\Http\Request;

class staffenmessageController extends Controller
{
    public function staffenmessage() {
       
        return view('fastadmin.staffenmessage');
    }

}