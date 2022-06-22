<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Session;
use App\Models\staff;
use App\Models\helpandreview;
use Illuminate\Http\Request;

class staffhelpnreviewController extends Controller
{
    public function staffhelpnreview() {
          $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }

        
        return view('staff.staffhelpnreview',compact('datao'));
    }

    

}