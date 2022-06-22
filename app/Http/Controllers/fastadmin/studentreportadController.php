<?php

namespace App\Http\Controllers\fastadmin;
use App\Http\Controllers\Controller;
use Session;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
class studentreportadController extends Controller
{
    public function studentreportad() {
        $reporty = student::all(); 
        return view('fastadmin.studentreportad',compact('reporty'));
    }

}