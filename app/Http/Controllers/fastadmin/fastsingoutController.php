<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\fastadmin;
use Illuminate\Http\Request;

class fastsingoutController extends Controller
{
    public function fastsingout() {
        if (session::has('fadminid')){
            session::pull('fadminid');
            return redirect('123.124.16.1');
        }
         
        return view('fastadmin.fastsingout');
    }

}