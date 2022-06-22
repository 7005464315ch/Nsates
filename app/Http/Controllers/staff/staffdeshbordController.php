<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Session;
use App\Models\staff;
use App\Models\studententry;
use App\Models\staffentry;
use App\Models\guestentry;
use App\Models\vehicalentry;
use Illuminate\Http\Request;

class staffdeshbordController extends Controller
{
    public function staffdeshbord() {
           $datao = array();
        if (session::has('staffaid')) {
            $datao = staff::where('id','=',session::get('staffaid'))->first();
            
        }
        $studentens = studententry::all()->count();  
        $staffaens = staffentry::all()->count();  
        $guestens = guestentry::where('reference_code',session::get('current_codeo'))->count();  
        $vehis = vehicalentry::where('reference_code',session::get('current_codeo'))->count();  
        return view('staff.staffdeshbord',compact('datao','studentens','staffaens','guestens','vehis'));
    }

}