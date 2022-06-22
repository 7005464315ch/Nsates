@extends('student.studentmessage')
   @section('contentro')

 <link rel="stylesheet" type="text/css" href="{{asset('asset/css/staffhelp-stylesheet.css')}}">
  <style type="text/css">
     .row{
      width: 100%;
      margin-left: -4px;

     }
  </style>
    <div class="row">
        <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST" action="{{url('studenthelpenx')}}" enctype="multipart/form-data">
                  @csrf
                   <h4 id="lab1x" style="top: -17px;position: relative; background-color: #F85D5D; color:#FFFFFF;">{{session('success')}}</h4>
                  <h4 id="lab1x" style="top: -17px;position: relative; background-color: #F85D5D; color:#FFFFFF;">{{session('faill')}}</h4>
                  <br>
                    <fieldset>

                        <div class="col-sm-4 form-group" id="xcgrup-1">
                            <span class="col-md-1 col-md-offset-2 text-center">Student Code</span>
                            <div class="col-md-8">
                                <input id="fname" name="student_code" type="text" placeholder="First Name" class="form-control" value="{{$datao->student_code}}" >
                            </div>
                        </div>
                        <div class=" col-sm-8 form-group" >
                            <span class="col-md-0 col-md-offset-2 text-center" id="chbx">Student Name</span>
                            <div class="col-md-13">
                                <input id="lname" name="student_name" type="text" placeholder="Last Name" class="form-control"  value="{{$datao->first_name}} {{$datao->middle_name}} {{$datao->last_name}}" >
                            </div>
                        </div>

                        <div class="col-sm-12 form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Email</span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-12 form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Subject</span>
                            <div class="col-md-8">
                                <input id="phone" name="subject" type="text" placeholder="Type your Subjects" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-12 form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Type Area</span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="description" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7" required></textarea>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Attechment</span>
                            <div class="col-md-8">
                                <input id="phone" name="attechment_one" type="file" placeholder="Phone" class="form-control">
                                <input id="phone" name="attechment_two" type="file" placeholder="Phone" class="form-control">

                            </div>
                        </div>

                        <div class="form-group" id="xcgrup-2">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
   @endsection