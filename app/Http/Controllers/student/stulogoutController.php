<?php

namespace App\Http\Controllers\student;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\student;

class stulogoutController extends Controller
{
    public function stulogout() {
        if (session::has('sloginid')){
            session::pull('sloginid');
            return redirect('studentlog');
        }
        return view('student.stulogout');
    }

}