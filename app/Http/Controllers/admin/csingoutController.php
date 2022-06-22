<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\superadmin;
use Illuminate\Http\Request;

class csingoutController extends Controller
{
    public function csingout() {
        if (session::has('superid')){
            session::pull('superid');
            return redirect('123.123.01.16');
        }
         
        return view('admin.csingout');
    }

}