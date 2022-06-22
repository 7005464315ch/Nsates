<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\fastadmin;
use App\Models\student;
use App\Models\staff;
use App\Models\studententry;
use App\Models\staffentry;
use App\Models\guestentry;
use App\Models\vehicalentry;
use Illuminate\Http\Request;

class caddeshbordController extends Controller
{
    public function caddeshbord() {
        $studentens = studententry::all()->count();  
        $staffaens = staffentry::all()->count();  
        $guestens = guestentry::all()->count();  
        $vehis = vehicalentry::all()->count(); 
        return view('admin.caddeshbord',compact('studentens','staffaens','guestens','vehis'));
    }

}