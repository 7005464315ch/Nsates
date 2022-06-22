<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Session;
use App\Models\studententry;
use App\Models\staffentry;
use App\Models\guestentry;
use App\Models\vehicalentry;
use App\Models\staff;
use Illuminate\Http\Request;

class staffreportController extends Controller
{
    public function staffreport() {
          $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }

        $studentenrep = studententry::where('reference_code',session::get('current_codeo'))->get();
        $studenteso = studententry::where('reference_code','self')->get();
        $staffaens = staffentry::where('reference_code',session::get('current_codeo'))->get();
        $guestens = guestentry::where('reference_code',session::get('current_codeo'))->get();
        $vehicalen = vehicalentry::where('reference_code',session::get('current_codeo'))->get();
        return view('staff.staffreport',compact('datao','studentenrep','studenteso','staffaens','guestens','vehicalen'));
    }



}