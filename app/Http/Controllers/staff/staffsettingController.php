<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Session;
use App\Models\staff;
use Illuminate\Http\Request;

class staffsettingController extends Controller
{
    public function staffsetting() {
          $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }
        return view('staff.staffsetting',compact('datao'));
    }

}