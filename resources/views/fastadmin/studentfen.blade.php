@extends('fastadmin.fastadmin')
   @section('contentz')
   <link rel="stylesheet" type="text/css" href="{{asset('asset/css/fastadminstudent-style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <div class="col-sm-0">
            <h2 class="text-center">Student Entry Area</h2>
        <div class="row jumbotron">
            <form action="{{url('sstudentsec')}}" method="GET" style="width: 100%;">
            @csrf
            <div class="col-sm-4 form-group" id="fast-one-div">
                <label for="name-f">Enter Student ID/Roll No</label>
                <input type="text" class="form-control" name="ssearch" id="ssearch" value="" >
            </div>
            <div class="col-sm-12 form-group mb-0" id="fast-one-div-2">
               <button class="btn btn-primary float-right" id="se-btn">search</button>
            </div>
             </form>
             @if(isset($registrations))
            <div class="col-sm-12 form-group mb-0" id="fast-one-div-3">
            <hr id="hcb-he">
            </div>
            <!-- <div id="snac"> -->
            <h4 id="lab1x" style="top: -17px;position: relative; background-color: #F85D5D; color:#FFFFFF;">{{session('success')}}</h4>
            <h4 id="lab1x" style="top: -17px;position: relative; background-color: #F85D5D; color:#FFFFFF;">{{session('faill')}}</h4>
            <form action="{{url('fstudenten')}}" method="POST" style="width:100%">
            @csrf
            <div class="col-sm-3 form-group">
                <label for="reference_code">Reference Code</label>
                <input type="text" class="form-control" name="reference_code" id="reference_code" value="{{$datao->fadmin_code}}" readonly>
            </div>
            <div class="col-sm-3 form-group">
                <label for="reference_name">Reference Name</label>
                <input type="text" class="form-control" name="reference_name" id="reference_name" value="{{$datao->first_name}} {{$datao->middle_name}} {{$datao->last_name}}" readonly>
            </div>
            <div class="col-sm-3 form-group">
                <label for="gate_no">Gate No</label>
                <input type="text" class="form-control" name="gate_no" id="gate_no" placeholder="Gate No." required>
            </div>
             <div class="col-sm-3 form-group">
                <label for="time">Time</label>
                <input type="text" class="form-control"  id="time" >
            </div>
            <div class="col-sm-3 form-group">
                <label for="student_code">Student Code</label>
                <input type="text" class="form-control" name="student_code" id="student_code" value="{{$registrations->student_code}}" required>
            </div>
            
            <div class="col-sm-3 form-group">
                <label for="student_no">Student No( Roll No )</label>
                <input type="text" class="form-control" name="student_no" id="student_no" value="{{$registrations->student_no}}" required>
            </div>

            <div class="col-sm-3 form-group">
                <label for="reg_no">Reg No</label>
                <input type="text" class="form-control" name="reg_no" id="reg_no" value="{{$registrations->email}}" required>
            </div>

            <div class="form-group col-md-3">
                         <h6>Descp</h6>        
                           <select class="custom-select" name="dsecp" id="gender2">
                            <option selected>Choose...</option>
                              <option value="Study">Study</option>
                               <option value="Office work">Office work</option>
                               <option value="visitor">visitor</option>
                           </select>   
                        </div>

            <div class="col-sm-6 form-group">
                <label for="full_name">Full Name</label>
                <input type="text" class="form-control" name="full_name" id="full_name" value="{{$registrations->first_name}} {{$registrations->middle_name}}  {{$registrations->last_name}}" required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="department_name">Department Name</label>
                <input type="text" class="form-control" name="department_name" id="department_name" value="{{$registrations->department_name}}" required>
            </div>
            <div class="col-sm-2 form-group">
                <label for="hostel_no">Hostel No</label>
                <input type="text" class="form-control" name="hostel_no" id="hostel_no" value="{{$registrations->hostel_no}}" required>
            </div>
            <div class="col-sm-2 form-group">
                <label for="room_no">Room No</label>
                <input type="text" class="form-control" name="room_no" id="room_no" value="{{$registrations->room_no}}" required>
            </div>
            <div class="col-sm-2 form-group">
                <label for="admission_years">Admission Year</label>
                <input type="text" class="form-control" name="admission_years" id="admission_years" value="{{$registrations->admission_year}}" required>
            </div>
            <div class="col-sm-2 form-group">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" name="gender" id="gender" value="{{$registrations->gender}}" required>
            </div>
            <div class="col-sm-4 form-group">
                <label for="dob">Date Of Birth</label>
                <input type="text" class="form-control" name="dob" id="dob" value="{{$registrations->date}}/{{$registrations->month}}/{{$registrations->years}}" required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{$registrations->email}}" required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="phone_no">Phone No</label>
                <input type="text" class="form-control" name="phone_no" id="phone_no" value="{{$registrations->phone_no}}"  minlength="10" maxlength="10" required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="address">Address</label>
                <textarea type="text" name="address" class="form-control" id="address"  required>{{$registrations->address}}</textarea>
            </div>
            <div class="col-sm-3 form-group">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" id="city" value="{{$registrations->city}}" required>
            </div>
            
            <div class="col-sm-3 form-group">
                <label for="State">State</label>
                <input type="text" name="state" class="form-control" id="State" value="{{$registrations->state}}" required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="country">Country</label>
                <input type="text" name="country" class="form-control" id="country" value="{{$registrations->country}}" required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="zipcode">ZipCode</label>
                <input type="text" name="zipcode" class="form-control" id="zipcode" value="{{$registrations->zipcode}}"  required>
            </div>
            <div class="col-sm-6 form-group" id="xc-1">
                <label for="other_info">Other info</label>
                <textarea type="text" name="other_info" class="form-control" id="other_info" placeholder="Enter your other info." ></textarea>
            </div>
            <div class="col-sm-12">
                <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
                </label>
            </div>

            <div class="col-sm-12 form-group mb-0">
               <button class="btn btn-primary float-right">Submit</button>
            </div>  </form>
            </div>
       </div>
 @else       
   
@if(isset($stuff_notfound))
{{$stuff_notfound}}
 @endif
      
  
    
    <div class="col-sm-12 form-group mb-0" id="fast-one-div-3">
            <hr id="hcb-he">
            </div>
            <!-- <div id="snac"> -->

            <form action="{{url('sstudenten')}}" method="POST" style="width:100%">
            @csrf
            <h4 id="lab1x" style="top: -17px;position: relative; background-color: #F85D5D; color:#FFFFFF;">{{session('success')}}</h4>
            <h4 id="lab1x" style="top: -17px;position: relative; background-color: #F85D5D; color:#FFFFFF;">{{session('faill')}}</h4>
            <div class="col-sm-3 form-group">
                <label for="reference_code">Reference Code</label>
                <input type="text" class="form-control" name="reference_code" id="reference_code" value="{{$datao->fadmin_code}}" readonly>
            </div>
            <div class="col-sm-3 form-group">
                <label for="reference_name">Reference Name</label>
                <input type="text" class="form-control" name="reference_name" id="reference_name" value="{{$datao->first_name}} {{$datao->middle_name}} {{$datao->last_name}}" readonly>
            </div>
            <div class="col-sm-3 form-group">
                <label for="gate_no">Gate No</label>
                <input type="text" class="form-control" name="gate_no" id="gate_no" placeholder="Gate No." required>
            </div>
             <div class="col-sm-3 form-group">
                <label for="time">Time</label>
                <input type="text" class="form-control" name="time" id="time" value="{{$datao->staff_code}}" required>
            </div>

            <div class="col-sm-3 form-group">
                <label for="student_code">Student Code</label>
                <input type="text" class="form-control" name="student_code" id="student_code" placeholder="Student Code." required>
            </div>

            <div class="col-sm-3 form-group">
                <label for="student_no">Student No( Roll No )</label>
                <input type="text" class="form-control" name="student_no" id="student_no" placeholder="Student No( Roll No )." required>
            </div>

            <div class="col-sm-3 form-group">
                <label for="reg_no">Reg No</label>
                <input type="text" class="form-control" name="reg_no" id="reg_no" placeholder="Enter Reg No." required>
            </div>

            <div class="form-group col-md-3">
                         <h6>Descp</h6>        
                           <select class="custom-select" name="dsecp" id="gender2">
                            <option selected>Choose...</option>
                              <option value="Study">Study</option>
                               <option value="Office work">Office work</option>
                               <option value="visitor">visitor</option>
                           </select>   
                        </div>

            <div class="col-sm-6 form-group">
                <label for="full_name">Full Name</label>
                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter your Full Name." required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="department_name">Department Name</label>
                <input type="text" class="form-control" name="department_name" id="department_name" placeholder="Enter your Department Name." required>
            </div>
            <div class="col-sm-2 form-group">
                <label for="hostel_no">Hostel No</label>
                <input type="text" class="form-control" name="hostel_no" id="hostel_no" placeholder="Hostel No." required>
            </div>
            <div class="col-sm-2 form-group">
                <label for="room_no">Room No</label>
                <input type="text" class="form-control" name="room_no" id="room_no" placeholder="Room No." required>
            </div>
            <div class="col-sm-2 form-group">
                <label for="admission_years">Admission Year</label>
                <input type="text" class="form-control" name="admission_years" id="admission_years" placeholder="Admission Year." required>
            </div>
            <div class="col-sm-2 form-group">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" name="gender" id="gender" placeholder="Enter  Gender." required>
            </div>
            <div class="col-sm-4 form-group">
                <label for="dob">Date Of Birth</label>
                <input type="text" class="form-control" name="dob" id="dob" placeholder="Enter your DOB." required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email." required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="phone_no">Phone No</label>
                <input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="Enter Your Contact Number." required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="address">Address</label>
                <textarea type="text" name="address" class="form-control" id="address" placeholder="Enter your Address." required></textarea>
            </div>
            <div class="col-sm-3 form-group">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="Enter your City." required>
            </div>
            
            <div class="col-sm-3 form-group">
                <label for="State">State</label>
                <input ttype="text" name="state" class="form-control" id="State" placeholder="Enter State." required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="country">Country</label>
                <input type="text" name="country" class="form-control" id="country" placeholder="Enter  Country." required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="zipcode">ZipCode</label>
                <input type="text" name="zipcode" class="form-control" id="zipcode" placeholder="Enter your Zipcode." required>
            </div>
            <div class="col-sm-6 form-group" id="xc-1">
                <label for="other_info">Other info</label>
                <textarea type="text" name="other_info" class="form-control" id="other_info" placeholder="Enter your other info." ></textarea>
            </div>
            <div class="col-sm-12">
                <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
                </label>
            </div>

            <div class="col-sm-12 form-group mb-0">
               <button class="btn btn-primary float-right">Submit</button>
            </div>  </form>
            </div>
        </div>
     

   @endif           
         
   @endsection