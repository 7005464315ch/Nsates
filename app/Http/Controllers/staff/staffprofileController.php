<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\staff;

class staffprofileController extends Controller
{
    public function staffprofile() {
         $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }
        return view('staff.staffprofile',compact('datao'));
    }

}