@extends('fastadmin.fastadmin')
   @section('contentz')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/table-style.css')}}">
   <h2>Staff Reports</h2>
    <div class="container table-responsive py-5">
    <div class="col-sm-6">
             <form action="{{url('viewstaffcode')}}" method="post">
               @csrf
             <div class="col-sm-5 form-group">
                <label for="full_name">Employee No</label>
                <input type="text" class="form-control" name="ssearch" id="full_name" placeholder="Enter Your Employee No." required >
            </div>
             <div class="col-sm-3 form-group">
                <input type="submit" class="form-control bg-primary" name="submit" id="btn-secrch" value="Search">
            </div>
            </form>
        </div>
          <div class="col-sm-6">
             <form action="{{url('viewstaffdate')}}" method="post">
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
      <th scope="col" id="bm-2">Staff Code</th>
      <th scope="col" id="bm-3">Employee No</th>
      <th scope="col" id="bm-4">Department Name</th>
      <th scope="col" id="bm-5">Staff post</th>
      <th scope="col" id="bm-6">Staff Name</th>
      <th scope="col" id="bm-7">Staff Gender</th>
      <th scope="col" id="bm-8">Date</th>
      <th scope="col" id="bm-9">Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach($staffaens as $key=>$staffa)
    <tr>
        <td scope="row">{{++$key}}</td>
        <td id="bm-2">{{$staffa->staff_code}}</td>
        <td>{{$staffa->employee_no}}</td>
        <td id="bm-4">{{$staffa->department_name}}</td>
        <td>{{$staffa->post}}</td>
        <td>{{$staffa->first_name}} {{$staffa->middle_name}} {{$staffa->last_name}}</td>
        <td>{{$staffa->gender}}</td>
        <td>{{$staffa->created_date}}</td>
        <td><a data-staffa_id="{{$staffa->id}}" data-staff_code="{{$staffa->staff_code}}" data-created_date="{{$staffa->created_date}}" data-employee_no="{{$staffa->employee_no}}" data-first_name="{{$staffa->first_name}}" data-middle_name="{{$staffa->middle_name}}" data-last_name="{{$staffa->last_name}}" data-department_name="{{$staffa->department_name}}" data-post="{{$staffa->post}}"  data-date="{{$staffa->date}}" data-month="{{$staffa->month}}"data-years="{{$staffa->years}}" data-email="{{$staffa->email}}" data-phone_no="{{$staffa->phone_no}}" data-gender="{{$staffa->gender}}"  data-address_one="{{$staffa->address_one}}" data-address_two="{{$staffa->address_two}}" data-city="{{$staffa->city}}" data-state="{{$staffa->state}}" data-country="{{$staffa->country}}" data-zipcode="{{$staffa->zipcode}}" data-other_info="{{$staffa->other_info}}"    data-toggle="modal" data-target="#exampleModal-showzc" type="button"class="btn btn-warning btn-sm">Show</a></td>
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
                <label for="name-f"> Staff Code</label>
                <input type="text" class="form-control" id="staff_code" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-2">
                <label for="name-f">Created Date</label>
                <input type="text" class="form-control"  id="created_date" disabled>
            </div>
            
            
            <div class="col-sm-3 form-group" id="acs-5">
                <label for="name-l">Employee No</label>
                <input type="text" class="form-control"  id="employee_no" disabled>
            </div>

            <div class="col-sm-3 form-group" id="acs-7">
                <label for="name-f">post</label>
                <input type="text" class="form-control" id="post" disabled>
            </div>
             <div class="col-sm-3 form-group" id="acs-11">
                <label for="name-l">Depertment</label>
                <input type="text" class="form-control" id="department_name" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-8">
                <label for="name-f">First Name</label>
                <input type="text" class="form-control" id="first_name" disabled>
            </div> 
            <div class="col-sm-3 form-group" id="acs-8">
                <label for="name-f">Middle Name</label>
                <input type="text" class="form-control" id="middle_name" disabled>
            </div> 
            <div class="col-sm-3 form-group" id="acs-8">
                <label for="name-f">Last Name</label>
                <input type="text" class="form-control" id="last_name" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-9">
                <label for="name-l"> Gender</label>
                <input type="text" class="form-control" id="gender" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-10">
                <label for="name-l">Date</label>
                <input type="text" class="form-control"  id="date" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-10">
                <label for="name-l">Month</label>
                <input type="text" class="form-control"  id="month" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-10">
                <label for="name-l">years</label>
                <input type="text" class="form-control"  id="years" disabled>
            </div>
         
            <div class="col-sm-6 form-group" id="acs-13">
                <label for="name-l">Address</label>
                <textarea type="text" class="form-control"  id="address_one" disabled></textarea>
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
            
            <div class="col-sm-3 form-group" id="acs-19a">
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
   $('#exampleModal-showzc').on('show.bs.modal', function(event){

               var button = $(event.relatedTarget)
               var id = button.data('id')
               var created_date = button.data('created_date')
               var staff_code = button.data('staff_code')
               var employee_no = button.data('employee_no')
               var post = button.data('post')
               var department_name = button.data('department_name')
               var first_name = button.data('first_name')
               var middle_name = button.data('middle_name')
               var last_name = button.data('last_name')
                var gender = button.data('gender')
                var date = button.data('date')
                var month = button.data('month')
                var years = button.data('years')
               var email = button.data('email')
               var phone_no = button.data('phone_no')
               var address_one = button.data('address_one')
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
               modal.find('.modal-body #staff_code').val(staff_code);
               modal.find('.modal-body #employee_no').val(employee_no);
               modal.find('.modal-body #post').val(post);
               modal.find('.modal-body #department_name').val(department_name);
               modal.find('.modal-body #first_name').val(first_name);
               modal.find('.modal-body #middle_name').val(middle_name);
               modal.find('.modal-body #last_name').val(last_name);
               modal.find('.modal-body #gender').val(gender);
               modal.find('.modal-body #date').val(date);
                modal.find('.modal-body #month').val(month);
                 modal.find('.modal-body #years').val(years);
               modal.find('.modal-body #email').val(email);
               modal.find('.modal-body #phone_no').val(phone_no);
               modal.find('.modal-body #address_one').val(address_one);
               modal.find('.modal-body #address_two').val(address_two);
               modal.find('.modal-body #city').val(city);
               modal.find('.modal-body #state').val(state);
               modal.find('.modal-body #country').val(country);
               modal.find('.modal-body #zipcode').val(zipcode);
               modal.find('.modal-body #other_info').val(other_info);
               modal.find('.modal-body #staffa_id').val(staffa_id);
               });


   </script>
    @endsection