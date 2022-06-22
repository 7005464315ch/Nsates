@extends('fastadmin.fastadmin')
   @section('contentz') 
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/staffhelp-stylesheet.css')}}">
 <div class="row">
        <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST" action="{{url('staffhelp')}}" enctype="multipart/form-data">
                  @csrf
                  <h4 id="lab1x" style="top: -17px;position: relative; background-color: #F85D5D; color:#FFFFFF;">{{session('success')}}</h4>
              <h4 id="lab1x" style="top: -17px;position: relative; background-color: #F85D5D; color:#FFFFFF;">{{session('faill')}}</h4>
                    <fieldset>

                        <div class="form-group" id="xcgrup-1">
                            <span class="col-md-1 col-md-offset-2 text-center">Employee Code</span>
                            <div class="col-md-8">
                                <input id="fname" name="staff_code" type="text" placeholder="First Name" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group" id="xcgrup-2">
                            <span class="col-md-1 col-md-offset-2 text-center" id="chbx">Employee Name</span>
                            <div class="col-md-8">
                                <input id="lname" name="staff_name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Email</span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Subject</span>
                            <div class="col-md-8">
                                <input id="phone" name="subject" type="text" placeholder="Type your Subjects" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Type Area</span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="description" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Attechment</span>
                            <div class="col-md-8">
                                <input id="phone" name="attechment_one" type="file" placeholder="Phone" class="form-control">
                                <input id="phone" name="attechment_two" type="file" placeholder="Phone" class="form-control">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    </div>
    
   @endsection