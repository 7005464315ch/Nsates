@extends('fastadmin.fastadmin')
   @section('contentz')
   <link rel="stylesheet" type="text/css" href="{{asset('asset/css/table-style.css')}}">
    <h2>Student Entry Reports</h2>
      <div class="container table-responsive py-5">
      <div class="col-sm-6">
             <form action="{{url('viewsuencode')}}" method="post">
               @csrf
             <div class="col-sm-5 form-group">
                <label for="full_name">Entry Code</label>
                <input type="text" class="form-control" name="ssearch" id="full_name" placeholder="Enter Your Entry code." required >
            </div>
             <div class="col-sm-3 form-group">
                <input type="submit" class="form-control bg-primary" name="submit" id="btn-secrch" value="Search">
            </div>
            </form>
        </div>
          <div class="col-sm-6">
             <form action="{{url('viewsuendate')}}" method="post">
               @csrf
             <div class="col-sm-4 form-group">
                <label for="full_name">Start Date</label>
                <input type="date" class="form-control" name="from" id="full_name"  required >
            </div>
            <div class="col-sm-4 form-group">
                <label for="full_name">End Date</label>
                <input type="date" class="form-control" name="to" id="full_name"  required >
            </div>
             <div class="col-sm-3 form-group">
                <input type="submit" class="form-control bg-success" name="submit" id="btn-secrch" value="Search">
            </div>
            </form>
        </div>
        <br>  
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
              </script>
    @endsection