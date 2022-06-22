@extends('staff.staffdesh')
   @section('contentrsx')
   <link rel="stylesheet" type="text/css" href="{{asset('asset/css/staffhelp-stylesheet.css')}}">
  <style type="text/css">
     #btn-secrch{
      position: relative;
      top: 35px;
      color: #FFFFFF;
     }

     
  </style>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="{{url('studenthcenter')}}">Help & Review</a>
  <button class="navbar-toggler text-secondary" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon " ></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link " href="{{url('staffhcenter')}}">Help Center</a>
      <a class="nav-item nav-link" href="{{url('staffhreport')}}">Report</a>
      <a class="nav-item nav-link" href="{{url('staffinbox')}}">Inbox</a>
    </div>
  </div>
</nav>
<br>
<div class="container">
    @yield('contentvo')
</div>

  
  
 @endsection