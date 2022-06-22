<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class cadminController extends Controller
{
    public function cadmin() {
         
        return view('admin.cadmin');
    }

}