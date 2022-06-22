@extends('staff.staffdesh')
   @section('contentrsx')

  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/staffreport-stylesheet.css')}}">
 
<ul class="nav nav-tabs md-tabs" id="myTabEx" role="tablist">
   <li class="nav-item">
    <a class="nav-link active show" id="home-tab-ex" data-toggle="tab" href="#home-ex" role="tab" aria-controls="home-ex"
      aria-selected="true">Student Entry</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " id="homes-tab-ex" data-toggle="tab" href="#homes-ex" role="tab" aria-controls="homes-ex"
      aria-selected="true">Slfe Student Entry</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab-ex" data-toggle="tab" href="#profile-ex" role="tab" aria-controls="profile-ex"
      aria-selected="false">Staff Entry</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab-ex" data-toggle="tab" href="#contact-ex" role="tab" aria-controls="contact-ex"
      aria-selected="false">Guest Entry</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" id="contacts-tab-ex" data-toggle="tab" href="#contacts-ex" role="tab" aria-controls="contacts-ex"
      aria-selected="false">Vehicle Entry</a>
  </li>
</ul>
<div class="tab-content pt-5" id="myTabContentEx">
  <div class="tab-pane fade active show" id="home-ex" role="tabpanel" aria-labelledby="home-tab-ex">
    <div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col" id="bm-1">#</th>
      <th scope="col" id="bm-2">Entry Code</th>
      <th scope="col" id="bm-3">Entry Date</th>
      <th scope="col" id="bm-4">Reference Code</th>
      <th scope="col" id="bm-5">Reference Name</th>
      <th scope="col" id="bm-6">Student Code</th>
      <th scope="col" id="bm-7">Student Name</th>
      <th scope="col" id="bm-8">Descp</th>
      <th scope="col" id="bm-9">Action</th>
    </tr>
  </thead>
  <tbody>
   
      @foreach($studentenrep as $key=>$studenten)
       <tr>
        <td scope="row">{{++$key}}</td>
        <td id="bm-2">{{$studenten->student_entry_code}}</td>
        <td>{{$studenten->created_date}}</td>
        <td id="bm-4">{{$studenten->reference_code}}</td>
        <td>{{$studenten->reference_name}}</td>
        <td>{{$studenten->student_code}}</td>
        <td>{{$studenten->full_name}}</td>
        <td>{{$studenten->dsecp}}</td>
        <td><a data-studenten_id="{{$studenten->id}}" data-created_date="{{$studenten->created_date}}" data-reference_code="{{$studenten->reference_code}}"data-reference_name="{{$studenten->reference_name}}"data-student_entry_code="{{$studenten->student_entry_code}}" data-student_code="{{$studenten->student_code}}" data-student_no="{{$studenten->student_no}}" data-reg_no="{{$studenten->reg_no}}" data-dsecp="{{$studenten->dsecp}}" data-full_name="{{$studenten->full_name}}" data-department_name="{{$studenten->department_name}}" data-hostel_no="{{$studenten->hostel_no}}" data-room_no="{{$studenten->room_no}}" data-admission_years="{{$studenten->admission_years}}" data-gender="{{$studenten->gender}}"  data-dob="{{$studenten->dob}}"data-phone_no="{{$studenten->phone_no}}" data-email="{{$studenten->email}}"  data-state="{{$studenten->state}}" data-country="{{$studenten->country}}" data-zipcode="{{$studenten->zipcode}}" data-other_info="{{$studenten->other_info}}" data-upload_date="{{$studenten->upload_date}}"
           data-toggle="modal" data-target="#exampleModal-show" type="button"class="btn btn-warning btn-sm">View</a></td>
       </tr>
      @endforeach

  </tbody>
</table>
  </div>
 <div id="exampleModal-show" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: 500px;">
        <form action="{{url('showrep','id')}}" method="get">
          @csrf
          <div class="row-col-1">
          <div class="col-sm-3 form-group">
                <label for="name-f"> Entry Code</label>
                <input type="text" class="form-control" id="student_entry_code" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-f">Created Date</label>
                <input type="text" class="form-control"  id="created_date" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">Reference Code</label>
                <input type="text" class="form-control"  id="reference_code" disabled>
            </div>
             <div class="col-sm-3 form-group">
                <label for="name-f">Reference Name</label>
                <input type="text" class="form-control"  id="reference_name" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-f">Student Code</label>
                <input type="text" class="form-control"  id="student_code" disabled>
            </div>
            
            <div class="col-sm-3 form-group" id="cxv-1s">
                <label for="name-l">Student No</label>
                <input type="text" class="form-control"  id="student_no" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cxv-2s">
                <label for="name-f">Reg No</label>
                <input type="text" class="form-control" id="reg_no" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cxv-3s">
                <label for="name-f">Full Name</label>
                <input type="text" class="form-control" id="full_name" disabled>
            </div>

            <div class="col-sm-3 form-group" id="cxv-4s">
                <label for="name-l">Depertment</label>
                <input type="text" class="form-control" id="department_name" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cxv-5s">
                <label for="name-f">Hostel No</label>
                <input type="text" class="form-control"  id="hostel_no" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cxv-13s">
                <label for="name-l">Room No</label>
                <input type="text" class="form-control" id="room_no" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cxv-14s">
                <label for="name-l">Admission years</label>
                <input type="text" class="form-control"  id="admission_years" disabled>
            </div>

            <div class="col-sm-3 form-group" id="cxv-15s">
                <label for="name-l"> Gender</label>
                <input type="text" class="form-control" id="gender" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cxv-16s">
                <label for="name-l">Dob</label>
                <input type="text" class="form-control"  id="dob" disabled>
            </div>
            <div class="col-sm-6 form-group" id="cxv-6s">
                <label for="name-l">Description</label>
                <textarea type="text" class="form-control"  id="dsecp" disabled></textarea>
            </div>
            <div class="col-sm-6 form-group" id="cxv-7s">
                <label for="name-l">Address</label>
                <textarea type="text" class="form-control"  id="address" disabled></textarea>
            </div>
            <div class="col-sm-3 form-group" id="cxv-8s">
                <label for="name-l">City</label>
                <input type="text" class="form-control"  id="city" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cxv-9s">
                <label for="name-f">State</label>
                <input type="text" class="form-control"  id="state" disabled>
            </div>

            <div class="col-sm-3 form-group" id="cxv-10s">
                <label for="name-f">Country</label>
                <input type="text" class="form-control"  id="country" disabled>
            </div>
            <div class="col-sm-2 form-group" id="cxv-11s">
                <label for="name-l">Zipcode</label>
                <input type="text" class="form-control" id="zipcode" disabled>
            </div>
            
            <div class="col-sm-3 form-group" id="cxv-12s">
                <label for="name-f">Other Info</label>
                <input type="text" class="form-control"  id="guest_otherinfo" disabled>
            </div>
            

          </div>
          <div class="row-col-2">
            <div class="col-sm-12 form-group">
                <label for="name-f" id="label-con"> Image Area</label>
                <div class="row-a1" ></div>
                <div class="row-a1" ></div>
                <div class="row-a1" ></div>
            </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>

</div>
<div class="tab-pane fade " id="homes-ex" role="tabpanel" aria-labelledby="homes-tab-ex">
    <div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col" id="bm-1">#</th>
      <th scope="col" id="bm-2">Entry Code</th>
      <th scope="col" id="bm-3">Entry Date</th>
      <th scope="col" id="bm-4">Reference Code</th>
      <th scope="col" id="bm-5">Reference Name</th>
      <th scope="col" id="bm-6">Student Code</th>
      <th scope="col" id="bm-7">Student Name</th>
      <th scope="col" id="bm-8">Descp</th>
      <th scope="col" id="bm-9">Action</th>
    </tr>
  </thead>
  <tbody>
   
      @foreach($studenteso as $key=>$studente)
       <tr>
        <td scope="row">{{++$key}}</td>
        <td id="bm-2">{{$studente->student_entry_code}}</td>
        <td>{{$studente->created_date}}</td>
        <td id="bm-4">{{$studente->reference_code}}</td>
        <td>{{$studente->reference_name}}</td>
        <td>{{$studente->student_code}}</td>
        <td>{{$studente->full_name}}</td>
        <td>{{$studente->dsecp}}</td>
        <td><a data-studente_id="{{$studente->id}}" data-created_date="{{$studente->created_date}}" data-reference_code="{{$studente->reference_code}}"data-reference_name="{{$studente->reference_name}}"data-student_entry_code="{{$studente->student_entry_code}}" data-student_code="{{$studente->student_code}}" data-student_no="{{$studente->student_no}}" data-reg_no="{{$studente->reg_no}}" data-dsecp="{{$studente->dsecp}}" data-full_name="{{$studente->full_name}}" data-department_name="{{$studente->department_name}}" data-hostel_no="{{$studente->hostel_no}}" data-room_no="{{$studente->room_no}}" data-admission_years="{{$studente->admission_years}}" data-gender="{{$studente->gender}}"  data-dob="{{$studente->dob}}"data-phone_no="{{$studente->phone_no}}" data-email="{{$studente->email}}"  data-state="{{$studente->state}}" data-country="{{$studente->country}}" data-zipcode="{{$studente->zipcode}}" data-other_info="{{$studente->other_info}}" data-upload_date="{{$studente->upload_date}}"
           data-toggle="modal" data-target="#exampleModal-showz" type="button"class="btn btn-warning btn-sm">View</a></td>
       </tr>
      @endforeach

  </tbody>
</table>
  </div>
 <div id="exampleModal-showz" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: 500px;">
        <form action="{{url('showrep','id')}}" method="get">
          @csrf
          <div class="row-col-1">
          <div class="col-sm-3 form-group">
                <label for="name-f"> Entry Code</label>
                <input type="text" class="form-control" id="student_entry_code" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-f">Created Date</label>
                <input type="text" class="form-control"  id="created_date" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">Reference Code</label>
                <input type="text" class="form-control"  id="reference_code" disabled>
            </div>
             <div class="col-sm-3 form-group">
                <label for="name-f">Reference Name</label>
                <input type="text" class="form-control"  id="reference_name" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-f">Student Code</label>
                <input type="text" class="form-control"  id="student_code" disabled>
            </div>
            
            <div class="col-sm-3 form-group" id="cxc-1s">
                <label for="name-l">Student No</label>
                <input type="text" class="form-control"  id="student_no" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cxc-2s">
                <label for="name-f">Reg No</label>
                <input type="text" class="form-control" id="reg_no" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cxc-3s">
                <label for="name-f">Full Name</label>
                <input type="text" class="form-control" id="full_name" disabled>
            </div>

            <div class="col-sm-3 form-group" id="cxc-4s">
                <label for="name-l">Depertment</label>
                <input type="text" class="form-control" id="department_name" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cxc-5s">
                <label for="name-f">Hostel No</label>
                <input type="text" class="form-control"  id="hostel_no" disabled>
            </div>
             <div class="col-sm-3 form-group" id="cxc-13s">
                <label for="name-l">Room No</label>
                <input type="text" class="form-control" id="room_no" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cxc-14s">
                <label for="name-l">Admission years</label>
                <input type="text" class="form-control"  id="admission_years" disabled>
            </div>

            <div class="col-sm-3 form-group" id="cxc-15s">
                <label for="name-l"> Gender</label>
                <input type="text" class="form-control" id="gender" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cxc-16s">
                <label for="name-l">Dob</label>
                <input type="text" class="form-control"  id="dob" disabled>
            </div>
            <div class="col-sm-6 form-group" id="cxc-6s">
                <label for="name-l">Description</label>
                <textarea type="text" class="form-control"  id="dsecp" disabled></textarea>
            </div>
            <div class="col-sm-6 form-group" id="cxc-7s">
                <label for="name-l">Address</label>
                <textarea type="text" class="form-control"  id="address" disabled></textarea>
            </div>
            <div class="col-sm-3 form-group" id="cxc-8s">
                <label for="name-l">City</label>
                <input type="text" class="form-control"  id="city" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cxc-9s">
                <label for="name-f">State</label>
                <input type="text" class="form-control"  id="state" disabled>
            </div>

            <div class="col-sm-3 form-group" id="cxc-10s">
                <label for="name-f">Country</label>
                <input type="text" class="form-control"  id="country" disabled>
            </div>
            <div class="col-sm-2 form-group" id="cxc-11s">
                <label for="name-l">Zipcode</label>
                <input type="text" class="form-control" id="zipcode" disabled>
            </div>
            
            <div class="col-sm-3 form-group" id="cxc-12s">
                <label for="name-f">Other Info</label>
                <input type="text" class="form-control"  id="guest_otherinfo" disabled>
            </div>
           

          </div>
          <div class="row-col-2">
            <div class="col-sm-12 form-group">
                <label for="name-f" id="label-con"> Image Area</label>
                <div class="row-a1" ></div>
                <div class="row-a1" ></div>
                <div class="row-a1" ></div>
            </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>

</div>
  <div class="tab-pane fade" id="profile-ex" role="tabpanel" aria-labelledby="profile-tab-ex">
    <div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col" id="bm-1">#</th>
      <th scope="col" id="bm-2">Entry Code</th>
      <th scope="col" id="bm-3">Entry Date</th>
      <th scope="col" id="bm-4">Reference Code</th>
      <th scope="col" id="bm-5">Reference Name</th>
      <th scope="col" id="bm-6">Staff Name</th>
      <th scope="col" id="bm-7">Staff Gender</th>
      <th scope="col" id="bm-8">Descp</th>
      <th scope="col" id="bm-9">Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach($staffaens as $key=>$staffa)
    <tr>
        <td scope="row">{{++$key}}</td>
        <td id="bm-2">{{$staffa->entry_code}}</td>
        <td>{{$staffa->created_date}}</td>
        <td id="bm-4">{{$staffa->reference_code}}</td>
        <td>{{$staffa->reference_name}}</td>
        <td>{{$staffa->full_name}}</td>
        <td>{{$staffa->gender}}</td>
        <td>{{$staffa->dsecp}}</td>
        <td><a data-staffa_id="{{$staffa->id}}" data-entry_code="{{$staffa->entry_code}}" data-created_date="{{$staffa->created_date}}" data-reference_code="{{$staffa->reference_code}}"data-staff_code="{{$staffa->staff_code}}" data-reference_name="{{$staffa->reference_name}}" data-employee_no="{{$staffa->employee_no}}" data-full_name="{{$staffa->full_name}}" data-department_name="{{$staffa->department_name}}" data-post="{{$staffa->post}}"  data-dsecp="{{$staffa->dsecp}}" data-email="{{$staffa->email}}" data-phone_no="{{$staffa->phone_no}}" data-gender="{{$staffa->gender}}"  data-address="{{$staffa->address}}" data-address_two="{{$staffa->address_two}}" data-city="{{$staffa->city}}" data-state="{{$staffa->state}}" data-country="{{$staffa->country}}" data-zipcode="{{$staffa->zipcode}}" data-other_info="{{$staffa->other_info}}"  data-gate_no="{{$staffa->gate_no}}"  data-toggle="modal" data-target="#exampleModal-showzc" type="button"class="btn btn-warning btn-sm">Show</a></td>
       </tr>
    @endforeach
  </tbody></table>
  </div>
  <div id="exampleModal-showzc" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: 500px;">
        <form action="{{url('showrep','id')}}" method="get">
          @csrf
          <div class="row-col-1">
          <div class="col-sm-3 form-group" >
                <label for="name-f"> Entry Code</label>
                <input type="text" class="form-control" id="entry_code" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-2">
                <label for="name-f">Created Date</label>
                <input type="text" class="form-control"  id="created_date" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-3">
                <label for="name-l">Reference Code</label>
                <input type="text" class="form-control"  id="reference_code" disabled>
            </div>
             <div class="col-sm-3 form-group" id="acs-4">
                <label for="name-f">Reference Name</label>
                <input type="text" class="form-control"  id="reference_name" disabled>
            </div>
            
            
            <div class="col-sm-3 form-group" id="acs-5">
                <label for="name-l">Employee No</label>
                <input type="text" class="form-control"  id="employee_no" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-6">
                <label for="name-f">Staff Code</label>
                <input type="text" class="form-control"  id="staff_code" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-7">
                <label for="name-f">post</label>
                <input type="text" class="form-control" id="post" disabled>
            </div>
             <div class="col-sm-3 form-group" id="acs-11">
                <label for="name-l">Depertment</label>
                <input type="text" class="form-control" id="department_name" disabled>
            </div>
            <div class="col-sm-6 form-group" id="acs-8">
                <label for="name-f">Full Name</label>
                <input type="text" class="form-control" id="full_name" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-9">
                <label for="name-l"> Gender</label>
                <input type="text" class="form-control" id="gender" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-10">
                <label for="name-l">Dob</label>
                <input type="text" class="form-control"  id="dob" disabled>
            </div>
            <div class="col-sm-6 form-group" id="acs-12">
                <label for="name-l">Description</label>
                <textarea type="text" class="form-control"  id="dsecp" disabled></textarea>
            </div>
            <div class="col-sm-6 form-group" id="acs-13">
                <label for="name-l">Address</label>
                <textarea type="text" class="form-control"  id="address" disabled></textarea>
            </div>
             <div class="col-sm-6 form-group" id="acs-14">
                <label for="name-l">Address</label>
                <textarea type="text" class="form-control"  id="address_two" disabled></textarea>
            </div>
            <div class="col-sm-3 form-group" id="acs-15">
                <label for="name-l">City</label>
                <input type="text" class="form-control"  id="city" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-16">
                <label for="name-f">State</label>
                <input type="text" class="form-control"  id="state" disabled>
            </div>

            <div class="col-sm-3 form-group" id="acs-17">
                <label for="name-f">Country</label>
                <input type="text" class="form-control"  id="country" disabled>
            </div>
            <div class="col-sm-2 form-group" id="acs-18">
                <label for="name-l">Zipcode</label>
                <input type="text" class="form-control" id="zipcode" disabled>
            </div>
            
            <div class="col-sm-3 form-group" id="acs-19">
                <label for="name-f">Other Info</label>
                <input type="text" class="form-control"  id="other_info" disabled>
            </div>
             </div>
             <div class="row-col-2">
            <div class="col-sm-12 form-group">
                <label for="name-f" id="label-con"> Image Area</label>
                <div class="row-a1" ></div>
                <div class="row-a1" ></div>
                <div class="row-a1" ></div>
            </div>
            </div>
          
          </form>
      </div>
    </div>
  </div>
</div>
</div>
  <div class="tab-pane fade" id="contact-ex" role="tabpanel" aria-labelledby="contact-tab-ex">
    <div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col" id="bm-1">#</th>
      <th scope="col" id="bm-2">Entry Code</th>
      <th scope="col" id="bm-3">Entry Date</th>
      <th scope="col" id="bm-4">Reference Code</th>
      <th scope="col" id="bm-5">Reference Name</th>
      <th scope="col" id="bm-6">Guest Name</th>
      <th scope="col" id="bm-7">Guest Gender</th>
      <th scope="col" id="bm-8">Description</th>
      <th scope="col" id="bm-9">Action</th>
    </tr>
  </thead>
  <tbody>
     @foreach($guestens as $key=>$guest)
    <tr>
        <td scope="row">{{++$key}}</td>
        <td id="bm-2">{{$guest->entry_code}}</td>
        <td>{{$guest->created_date}}</td>
        <td id="bm-4">{{$guest->reference_code}}</td>
        <td>{{$guest->reference_name}}</td>
        <td>{{$guest->guest_name}}</td>
        <td>{{$guest->guest_gender}}</td>
        <td>{{$guest->dsecp}}</td>
        <td><a data-guest_id="{{$guest->id}}" data-entry_code="{{$guest->entry_code}}" data-created_date="{{$guest->created_date}}" data-reference_code="{{$guest->reference_code}}" data-reference_name="{{$guest->reference_name}}" data-guest_name="{{$guest->guest_name}}"   data-guest_desc="{{$guest->guest_desc}}" data-email="{{$guest->email}}" data-phone_no="{{$guest->phone_no}}" data-guest_gender="{{$guest->guest_gender}}" data-guest_addhaar="{{$guest->guest_addhaar}}" data-addhaar_pic="{{$guest->addhaar_pic}}" data-pancard_no="{{$guest->pancard_no}}"  data-pancard_pic="{{$guest->pancard_pic}}" data-address="{{$guest->address}}" data-city="{{$guest->city}}" data-state="{{$guest->state}}" data-country="{{$guest->country}}" data-zipcode="{{$guest->zipcode}}" data-guest_otherinfo="{{$guest->guest_otherinfo}}"  data-member_no="{{$guest->member_no}}" data-member_name="{{$guest->member_name}}" data-member_gender="{{$guest->member_gender}}" data-member_doc_no="{{$guest->member_doc_no}}" data-guest_pic="{{$guest->guest_pic}}" data-group_pic="{{$guest->group_pic}}" data-toggle="modal" data-target="#exampleModal-showo" type="button"class="btn btn-warning btn-sm">Show</a></td>
       </tr>
    @endforeach
  </tbody></table>
  </div>

  <div id="exampleModal-showo" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: 500px;">
        <form action="{{url('showrep','id')}}" method="get">
          @csrf
          <div class="row-col-1">
          <div class="col-sm-3 form-group">
                <label for="name-f"> Entry Code</label>
                <input type="text" class="form-control" id="entry_code" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-f">Created Date</label>
                <input type="text" class="form-control"  id="created_date" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">Reference Code</label>
                <input type="text" class="form-control"  id="reference_code" disabled>
            </div>
             <div class="col-sm-3 form-group">
                <label for="name-f">Reference Name</label>
                <input type="text" class="form-control"  id="reference_name" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-f">Guest Name</label>
                <input type="text" class="form-control"  id="guest_name" disabled>
            </div>
            
            <div class="col-sm-3 form-group" id="cx-1s">
                <label for="name-l">Email</label>
                <input type="text" class="form-control"  id="email" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cx-2s">
                <label for="name-f">Phone No</label>
                <input type="text" class="form-control" id="phone_no" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cx-3s">
                <label for="name-f">Gender</label>
                <input type="text" class="form-control" id="guest_gender" disabled>
            </div>

            <div class="col-sm-3 form-group" id="cx-4s">
                <label for="name-l">Guest Addhaar</label>
                <input type="text" class="form-control" id="guest_addhaar" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cx-5s">
                <label for="name-f">Guest Pancard</label>
                <input type="text" class="form-control"  id="pancard_no" disabled>
            </div>
            <div class="col-sm-6 form-group" id="cx-6s">
                <label for="name-l">Description</label>
                <textarea type="text" class="form-control"  id="guest_desc" disabled></textarea>
            </div>
            <div class="col-sm-6 form-group" id="cx-7s">
                <label for="name-l">Address</label>
                <textarea type="text" class="form-control"  id="address" disabled></textarea>
            </div>
            <div class="col-sm-3 form-group" id="cx-8s">
                <label for="name-l">City</label>
                <input type="text" class="form-control"  id="city" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cx-9s">
                <label for="name-f">State</label>
                <input type="text" class="form-control"  id="state" disabled>
            </div>

            <div class="col-sm-3 form-group" id="cx-10s">
                <label for="name-f">Country</label>
                <input type="text" class="form-control"  id="country" disabled>
            </div>
            <div class="col-sm-2 form-group" id="cx-11s">
                <label for="name-l">Zipcode</label>
                <input type="text" class="form-control" id="zipcode" disabled>
            </div>
            
            <div class="col-sm-3 form-group" id="cx-12s">
                <label for="name-f">Other Info</label>
                <input type="text" class="form-control"  id="guest_otherinfo" disabled>
            </div>
            <div class="col-sm-3 form-group" id="cx-13s">
                <label for="name-l">Members No</label>
                <input type="text" class="form-control" id="member_no" disabled>
            </div>
            <div class="col-sm-6 form-group" id="cx-14s">
                <label for="name-l">Members Name</label>
                <textarea type="text" class="form-control"  id="member_name" disabled></textarea>
            </div>

            <div class="col-sm-3 form-group" id="cx-15s">
                <label for="name-l">Members Gender</label>
                <input type="text" class="form-control" id="member_gender" disabled>
            </div>
            <div class="col-sm-4 form-group" id="cx-16s">
                <label for="name-l">Members Doc</label>
                <textarea type="text" class="form-control"  id="member_doc_no" disabled></textarea>
            </div>

          </div>
          <div class="row-col-2">
            <div class="col-sm-12 form-group">
                <label for="name-f" id="label-con"> Image Area</label>
                <div class="row-a1" ></div>
                <div class="row-a1" ></div>
                <div class="row-a1" ></div>
            </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
</div>


  
<div class="tab-pane fade" id="contacts-ex" role="tabpanel" aria-labelledby="contact-tab-ex">
    <div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col" id="bm-1">#</th>
      <th scope="col" id="bm-2">Entry Code</th>
      <th scope="col" id="bm-3">Entry Date</th>
      <th scope="col" id="bm-4">Reference Code</th>
      <th scope="col" id="bm-5">Reference Name</th>
      <th scope="col" id="bm-6">Vehical No</th>
      <th scope="col" id="bm-7">Driver Name</th>
      <th scope="col" id="bm-8">Descp</th>
      <th scope="col" id="bm-9">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($vehicalen as $key=>$vehi)
    <tr><td scope="row">{{++$key}}</td>
        <td id="bm-2">{{$vehi->entry_code}}</td>
        <td>{{$vehi->created_date}}</td>
        <td id="bm-4">{{$vehi->reference_code}}</td>
        <td>{{$vehi->reference_name}}</td>
        <td>{{$vehi->vehical_reg_no}}</td>
        <td>{{$vehi->driver_name}}</td>
        <td>{{$vehi->dsecp}}</td>
        <td><a data-vehi_id="{{$vehi->id}}" data-entry_code="{{$vehi->entry_code}}" data-created_date="{{$vehi->created_date}}" data-reference_code="{{$vehi->reference_code}}" data-reference_name="{{$vehi->reference_name}}" data-vehical_reg_no="{{$vehi->vehical_reg_no}}"   data-vehical_type="{{$vehi->vehical_type}}" data-owner_name="{{$vehi->owner_name}}" data-vehical_md_comp="{{$vehi->vehical_md_comp}}" data-vehical_model="{{$vehi->vehical_model}}" data-vehical_trans_comp="{{$vehi->vehical_trans_comp}}" data-passenger_no="{{$vehi->passenger_no}}" data-dsecp="{{$vehi->dsecp}}"  data-driver_rc_no="{{$vehi->driver_rc_no}}" data-driver_name="{{$vehi->driver_name}}" data-driver_phone_no="{{$vehi->driver_phone_no}}" data-owner_phone_no="{{$vehi->owner_phone_no}}" data-driver_gender="{{$vehi->driver_gender}}" data-address="{{$vehi->address}}" data-city="{{$vehi->city}}"  data-state="{{$vehi->state}}" data-country="{{$vehi->country}}" data-zipcode="{{$vehi->zipcode}}" data-other_info="{{$vehi->other_info}}" data-vehical_pic="{{$vehi->vehical_pic}}" data-driver_pic="{{$vehi->driver_pic}}" data-licence_pic="{{$vehi->licence_pic}}" data-toggle="modal" data-target="#exampleModal-showa" type="button"class="btn btn-warning btn-sm">Show</a></td>

       </tr>
    @endforeach
  </tbody>
  </div>
  <div id="exampleModal-showa" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: 500px;">
        <form action="{{url('showrep','id')}}" method="get">
          @csrf
          <div class="row-col-1">
          <div class="col-sm-2 form-group">
                <label for="name-f"> ID</label>
                <input type="text" class="form-control" id="id" disabled>
            </div>
          <div class="col-sm-3 form-group" id="col-1s">
                <label for="name-f"> Entry Code</label>
                <input type="text" class="form-control" id="entry_code" disabled>
            </div>
          <div class="col-sm-3 form-group" id="col-2s">
                <label for="name-f"> Entry Date</label>
                <input type="text" class="form-control" id="created_date" disabled>
            </div>
          
          <div class="col-sm-3 form-group" id="col-3s">
                <label for="name-f">Reference Code</label>
                <input type="text" class="form-control" id="reference_code" disabled>
            </div>
          
          <div class="col-sm-3 form-group">
                <label for="name-f">Vehical Number</label>
                <input type="text" class="form-control" id="vehical_reg_no" disabled>
            </div>
          <div class="col-sm-2 form-group">
                <label for="name-f">Vehical Type</label>
                <input type="text" class="form-control" id="vehical_type" disabled>
            </div>
            <div class="col-sm-2 form-group">
                <label for="name-f">P. No</label>
                <input type="text" class="form-control" id="passenger_no" disabled>
            </div>
         
          <div class="col-sm-3 form-group" id="col-4s">
                <label for="name-f">Reference Name</label>
                <input type="text" class="form-control" id="reference_name" disabled>
            </div>
            <div class="col-sm-2 form-group">
                <label for="name-f">Vehical Model</label>
                <input type="text" class="form-control" id="vehical_model" disabled>
            </div>
          <div class="col-sm-3 form-group">
                <label for="name-f">Vehical Trans Comp</label>
                <input type="text" class="form-control" id="vehical_trans_comp" disabled>
            </div>
          
            <div class="col-sm-3 form-group">
                <label for="name-f">Vehical Mdf Comp</label>
                <input type="text" class="form-control" id="vehical_md_comp" disabled>
            </div>
          
             <div class="col-sm-3 form-group">
                <label for="name-f">Owner Name</label>
                <input type="text" class="form-control" id="owner_name" disabled>
            </div>
            <div class="col-sm-3 form-group" id="col-13s">
                <label for="name-f">Driver Lisence</label>
                <input type="text" class="form-control" id="driver_rc_no" disabled>
            </div>
          <div class="col-sm-3 form-group" id="col-14s">
                <label for="name-f">Driver Name</label>
                <input type="text" class="form-control" id="driver_name" disabled>
            </div>
            <div class="col-sm-3 form-group" id="col-17s">
                <label for="name-f">Owner Phone No</label>
                <input type="text" class="form-control" id="owner_phone_no" disabled>
            </div>
          <div class="col-sm-3 form-group" id="col-18s">
                <label for="name-f">Driver Gender</label>
                <input type="text" class="form-control" id="driver_gender" disabled>
            </div>
          <div class="col-sm-6 form-group">
                <label for="name-f">Description</label>
                <textarea type="text" class="form-control" id="dsecp" disabled></textarea>
            </div>
          
          <div class="col-sm-6 form-group" id="col-15s">
                <label for="name-f">Address</label>
                <textarea type="text" class="form-control" id="address" disabled></textarea>
            </div>
          
          
          <div class="col-sm-3 form-group" id="col-19s">
                <label for="name-f">City</label>
                <input type="text" class="form-control" id="city" disabled>
            </div>
          <div class="col-sm-3 form-group" id="col-20s">
                <label for="name-f">State</label>
                <input type="text" class="form-control" id="state" disabled>
            </div>
          <div class="col-sm-3 form-group" id="col-21s">
                <label for="name-f">Country</label>
                <input type="text" class="form-control" id="country" disabled>
            </div>
          <div class="col-sm-3 form-group" id="col-22s">
                <label for="name-f" id="zips">Zipcode</label>
                <input type="text" class="form-control" id="zipcode" disabled>
            </div> 
          <div class="col-sm-3 form-group" id="col-23s">
                <label for="name-f" id="othin">Other Info</label>
                <input type="text" class="form-control" id="other_info" disabled>
            </div>         
            </div>
            <div class="row-col-2">
            <div class="col-sm-12 form-group">
                <label for="name-f" id="label-con"> Image Area</label>
                <div class="row-a1" ></div>
                <div class="row-a1" ></div>
                <div class="row-a1" ></div>
            </div>
            </div>

          </form>
        </div>
      </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">

$('#exampleModal-show').on('show.bs.modal', function(event){

               var button = $(event.relatedTarget)
               var id = button.data('id')
               var created_date = button.data('created_date')
               var reference_code = button.data('reference_code')
               var reference_name = button.data('reference_name')
               var student_entry_code = button.data('student_entry_code')
               var student_code = button.data('student_code')
               var student_no = button.data('student_no')
               var reg_no = button.data('reg_no')
               var dsecp = button.data('dsecp')
               var full_name = button.data('full_name')
               var department_name = button.data('department_name')
               var hostel_no = button.data('hostel_no')
                var room_no = button.data('room_no') 
                var admission_years = button.data('admission_years') 
                var gender = button.data('gender')
                var dob = button.data('dob')
               var email = button.data('email')
               var phone_no = button.data('phone_no')
               var state = button.data('state')
               var country = button.data('country')
               var zipcode = button.data('zipcode')
               var other_info = button.data('other_info')
               var upload_date = button.data('upload_date')
               var studenten_id = button.data('studenten_id')

               var modal = $(this)
               modal.find('.modal-body #id').val(id);
               modal.find('.modal-body #created_date').val(created_date);
                modal.find('.modal-body #reference_code').val(reference_code);
               modal.find('.modal-body #reference_name').val(reference_name);
               modal.find('.modal-body #student_entry_code').val(student_entry_code);
               modal.find('.modal-body #student_code').val(student_code);
               modal.find('.modal-body #student_no').val(student_no);
               modal.find('.modal-body #reg_no').val(reg_no);
               modal.find('.modal-body #dsecp').val(dsecp);
               modal.find('.modal-body #full_name').val(full_name);
               modal.find('.modal-body #department_name').val(department_name);
               modal.find('.modal-body #hostel_no').val(hostel_no);
               modal.find('.modal-body #room_no').val(room_no);
               modal.find('.modal-body #admission_years').val(admission_years);
               modal.find('.modal-body #gender').val(gender);
               modal.find('.modal-body #dob').val(dob);
               modal.find('.modal-body #email').val(email);
               modal.find('.modal-body #phone_no').val(phone_no);
               modal.find('.modal-body #state').val(state);
               modal.find('.modal-body #country').val(country);
               modal.find('.modal-body #zipcode').val(zipcode);
               modal.find('.modal-body #other_info').val(other_info);
               modal.find('.modal-body #upload_date').val(upload_date);
               modal.find('.modal-body #studenten_id').val(studenten_id);
               });
              
              $('#exampleModal-showz').on('show.bs.modal', function(event){

               var button = $(event.relatedTarget)
               var id = button.data('id')
               var created_date = button.data('created_date')
               var reference_code = button.data('reference_code')
               var reference_name = button.data('reference_name')
               var student_entry_code = button.data('student_entry_code')
               var student_code = button.data('student_code')
               var student_no = button.data('student_no')
               var reg_no = button.data('reg_no')
               var dsecp = button.data('dsecp')
               var full_name = button.data('full_name')
               var department_name = button.data('department_name')
               var hostel_no = button.data('hostel_no')
                var room_no = button.data('room_no') 
                var admission_years = button.data('admission_years') 
                var gender = button.data('gender')
                var dob = button.data('dob')
               var email = button.data('email')
               var phone_no = button.data('phone_no')
               var state = button.data('state')
               var country = button.data('country')
               var zipcode = button.data('zipcode')
               var other_info = button.data('other_info')
               var upload_date = button.data('upload_date')
               var studente_id = button.data('studente_id')

               var modal = $(this)
               modal.find('.modal-body #id').val(id);
               modal.find('.modal-body #created_date').val(created_date);
                modal.find('.modal-body #reference_code').val(reference_code);
               modal.find('.modal-body #reference_name').val(reference_name);
               modal.find('.modal-body #student_entry_code').val(student_entry_code);
               modal.find('.modal-body #student_code').val(student_code);
               modal.find('.modal-body #student_no').val(student_no);
               modal.find('.modal-body #reg_no').val(reg_no);
               modal.find('.modal-body #dsecp').val(dsecp);
               modal.find('.modal-body #full_name').val(full_name);
               modal.find('.modal-body #department_name').val(department_name);
               modal.find('.modal-body #hostel_no').val(hostel_no);
               modal.find('.modal-body #room_no').val(room_no);
               modal.find('.modal-body #admission_years').val(admission_years);
               modal.find('.modal-body #gender').val(gender);
               modal.find('.modal-body #dob').val(dob);
               modal.find('.modal-body #email').val(email);
               modal.find('.modal-body #phone_no').val(phone_no);
               modal.find('.modal-body #state').val(state);
               modal.find('.modal-body #country').val(country);
               modal.find('.modal-body #zipcode').val(zipcode);
               modal.find('.modal-body #other_info').val(other_info);
               modal.find('.modal-body #upload_date').val(upload_date);
               modal.find('.modal-body #studente_id').val(studente_id);
               });


$('#exampleModal-showzc').on('show.bs.modal', function(event){

               var button = $(event.relatedTarget)
               var id = button.data('id')
               var created_date = button.data('created_date')
               var reference_code = button.data('reference_code')
               var reference_name = button.data('reference_name')
               var entry_code = button.data('entry_code')
               var staff_code = button.data('staff_code')
               var employee_no = button.data('employee_no')
               var post = button.data('post')
               var dsecp = button.data('dsecp')
               var full_name = button.data('full_name')
               var department_name = button.data('department_name')
                var gender = button.data('gender')
                var dob = button.data('dob')
               var email = button.data('email')
               var phone_no = button.data('phone_no')
               var address = button.data('address')
               var address_two = button.data('address_two')
               var city = button.data('city')
               var state = button.data('state')
               var country = button.data('country')
               var zipcode = button.data('zipcode')
               var other_info = button.data('other_info')
               var staffa_id = button.data('staffa_id')

               var modal = $(this)
               modal.find('.modal-body #id').val(id);
               modal.find('.modal-body #created_date').val(created_date);
                modal.find('.modal-body #reference_code').val(reference_code);
               modal.find('.modal-body #reference_name').val(reference_name);
               modal.find('.modal-body #entry_code').val(entry_code);
               modal.find('.modal-body #staff_code').val(staff_code);
               modal.find('.modal-body #employee_no').val(employee_no);
               modal.find('.modal-body #post').val(post);
               modal.find('.modal-body #dsecp').val(dsecp);
               modal.find('.modal-body #full_name').val(full_name);
               modal.find('.modal-body #department_name').val(department_name);
               modal.find('.modal-body #gender').val(gender);
               modal.find('.modal-body #dob').val(dob);
               modal.find('.modal-body #email').val(email);
               modal.find('.modal-body #phone_no').val(phone_no);
               modal.find('.modal-body #address').val(address);
               modal.find('.modal-body #address_two').val(address_two);
               modal.find('.modal-body #city').val(city);
               modal.find('.modal-body #state').val(state);
               modal.find('.modal-body #country').val(country);
               modal.find('.modal-body #zipcode').val(zipcode);
               modal.find('.modal-body #other_info').val(other_info);
               modal.find('.modal-body #staffa_id').val(staffa_id);
               });



  $('#exampleModal-showo').on('show.bs.modal', function(event){

               var button = $(event.relatedTarget)
               var id = button.data('id')
               var entry_code = button.data('entry_code')
               var reference_code = button.data('reference_code')
               var reference_name = button.data('reference_name')
               var created_date = button.data('created_date')
               var guest_name = button.data('guest_name')
               var guest_desc = button.data('guest_desc')
               var email = button.data('email')
               var phone_no = button.data('phone_no')
               var guest_gender = button.data('guest_gender')
               var guest_addhaar = button.data('guest_addhaar')
               var addhaar_pic = button.data('addhaar_pic')
               var pancard_no = button.data('pancard_no')
               var pancard_pic = button.data('pancard_pic')
               var address = button.data('address')
               var city = button.data('city')
               var state = button.data('state')
               var country = button.data('country')
               var zipcode = button.data('zipcode')
               var guest_otherinfo = button.data('guest_otherinfo')
               var member_no = button.data('member_no')
               var member_name = button.data('member_name')
               var member_gender = button.data('member_gender')
               var member_doc_no = button.data('member_doc_no')
               var guest_pic = button.data('guest_pic')
               var group_pic = button.data('group_pic')
               var guest_id = button.data('guest_id')

               var modal = $(this)
               modal.find('.modal-body #id').val(id);
               modal.find('.modal-body #entry_code').val(entry_code);
               modal.find('.modal-body #reference_code').val(reference_code);
               modal.find('.modal-body #reference_name').val(reference_name);
               modal.find('.modal-body #created_date').val(created_date);
               modal.find('.modal-body #guest_name').val(guest_name);
               modal.find('.modal-body #guest_desc').val(guest_desc);
               modal.find('.modal-body #email').val(email);
               modal.find('.modal-body #phone_no').val(phone_no);
               modal.find('.modal-body #guest_gender').val(guest_gender);
               modal.find('.modal-body #guest_addhaar').val(guest_addhaar);
               modal.find('.modal-body #addhaar_pic').val(addhaar_pic);
               modal.find('.modal-body #pancard_no').val(pancard_no);
               modal.find('.modal-body #pancard_pic').val(pancard_pic);
               modal.find('.modal-body #address').val(address);
               modal.find('.modal-body #city').val(city);
               modal.find('.modal-body #state').val(state);
               modal.find('.modal-body #country').val(country);
               modal.find('.modal-body #zipcode').val(zipcode);
               modal.find('.modal-body #guest_otherinfo').val(guest_otherinfo);
               modal.find('.modal-body #member_no').val(member_no);
               modal.find('.modal-body #member_name').val(member_name);
               modal.find('.modal-body #member_gender').val(member_gender);
               modal.find('.modal-body #member_doc_no').val(member_doc_no);
               modal.find('.modal-body #guest_pic').val(guest_pic);
               modal.find('.modal-body #group_pic').val(group_pic);
               modal.find('.modal-body #guest_id').val(guest_id);
               });


  function showPre1(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("view-prev1");
    
    preview.classList.toggle("view-prev1")
    preview.src = src;
    preview.style.display = "block"; 
  }
}

$('#exampleModal-showa').on('show.bs.modal', function(event){

               var button = $(event.relatedTarget)
               var id = button.data('id')
               var entry_code = button.data('entry_code')
               var reference_code = button.data('reference_code')
               var reference_name = button.data('reference_name')
               var created_date = button.data('created_date')
               var vehical_reg_no = button.data('vehical_reg_no')
               var vehical_type = button.data('vehical_type')
               var owner_name = button.data('owner_name')
               var vehical_md_comp = button.data('vehical_md_comp')
               var vehical_model = button.data('vehical_model')
               var vehical_trans_comp = button.data('vehical_trans_comp')
               var passenger_no = button.data('passenger_no')
               var dsecp = button.data('dsecp')
               var driver_rc_no = button.data('driver_rc_no')
               var driver_name = button.data('driver_name')
               var driver_phone_no = button.data('driver_phone_no')
               var owner_phone_no = button.data('owner_phone_no')
               var driver_gender = button.data('driver_gender')
               var address = button.data('address')
               var city = button.data('city')
               var state = button.data('state')
               var country = button.data('country')
               var zipcode = button.data('zipcode')
               var other_info = button.data('other_info')
               var vehical_pic = button.data('vehical_pic')
               var driver_pic = button.data('driver_pic')
               var licence_pic = button.data('licence_pic')
               var vehi_id = button.data('vehi_id')

                var modal = $(this)
               modal.find('.modal-body #id').val(id);
               modal.find('.modal-body #entry_code').val(entry_code);
               modal.find('.modal-body #reference_code').val(reference_code);
               modal.find('.modal-body #reference_name').val(reference_name);
               modal.find('.modal-body #created_date').val(created_date);
               modal.find('.modal-body #vehical_reg_no').val(vehical_reg_no);
               modal.find('.modal-body #vehical_type').val(vehical_type);
               modal.find('.modal-body #owner_name').val(owner_name);
               modal.find('.modal-body #vehical_md_comp').val(vehical_md_comp);
               modal.find('.modal-body #vehical_model').val(vehical_model);
               modal.find('.modal-body #vehical_trans_comp').val(vehical_trans_comp);
               modal.find('.modal-body #passenger_no').val(passenger_no);
               modal.find('.modal-body #dsecp').val(dsecp);
               modal.find('.modal-body #driver_rc_no').val(driver_rc_no);
               modal.find('.modal-body #driver_name').val(driver_name);
               modal.find('.modal-body #driver_phone_no').val(driver_phone_no);
               modal.find('.modal-body #owner_phone_no').val(owner_phone_no);
               modal.find('.modal-body #driver_gender').val(driver_gender);
               modal.find('.modal-body #address').val(address);
               modal.find('.modal-body #city').val(city);
               modal.find('.modal-body #state').val(state);
               modal.find('.modal-body #country').val(country);
               modal.find('.modal-body #zipcode').val(zipcode);
               modal.find('.modal-body #other_info').val(other_info);
               modal.find('.modal-body #vehical_pic').val(vehical_pic);
               modal.find('.modal-body #driver_pic').val(driver_pic);
               modal.find('.modal-body #licence_pic').val(licence_pic);
               modal.find('.modal-body #vehi_id').val(vehi_id);
              
               });

function printDiv(elementId) {
    var a = document.getElementById('printing-css').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
</script>
@endsection