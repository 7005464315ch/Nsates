<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\staff;

class stafflogoutController extends Controller
{
    public function stafflogout() {
        if (session::has('staffaid')){
            session::pull('staffaid');
            return redirect('stafflogin');
        }
        return view('staff.stafflogout');
    }

}