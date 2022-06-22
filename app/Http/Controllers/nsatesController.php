<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class nsatesController extends Controller
{
    public function nsates() {
         
        return view('nsates');
    }

}