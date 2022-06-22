<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class sfreportController extends Controller
{
    public function sfreport() {
         
        return view('staff.sfreport');
    }

}