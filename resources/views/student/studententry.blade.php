 @extends('student.studesh')
   @section('contentrs')
   
 <form action="{{url('studenters')}}" method="POST">
    @csrf
            <h2 class="text-center">Student Entry Area</h2>
        <div class="row jumbotron">
             <div class="col-sm-3 form-group">
                <label for="name-f">Reference Code</label>
                <input type="text" class="form-control" name="reference_code" id="name-f" value="self" readonly>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">Reference Name</label>
                <input type="text" class="form-control" name="reference_name" id="name-l" value="self" readonly>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-f">Student Code</label>
                <input type="text" class="form-control" name="student_code" id="name-f" value="{{$datao->student_code}}" required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">Student No( Roll No )</label>
                <input type="text" class="form-control" name="student_no" id="name-l" value="{{$datao->student_no}}" required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="email">Reg No</label>
                <input type="text" class="form-control" name="reg_no" id="email" value="{{$datao->reg_no}}" required>
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
                <label for="address-1">Full Name</label>
                <input type="address" class="form-control" name="full_name" id="address-1" value="{{$datao->first_name}} {{$datao->middle_name}} {{$datao->last_name}}" required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="address-2">Department Name</label>
                <input type="address" class="form-control" name="department_name" id="address-2" value="{{$datao->department_name}}" required>
            </div>
            <div class="col-sm-2 form-group">
                <label for="State">Hostel No</label>
                <input type="address" class="form-control" name="hostel_no" id="State" value="{{$datao->hostel_no}}" required>
            </div>
            <div class="col-sm-2 form-group">
                <label for="State">Room No</label>
                <input type="address" class="form-control" name="room_no" id="State" value="{{$datao->room_no}}" required>
            </div>
            <div class="col-sm-2 form-group">
                <label for="State">Admission Year</label>
                <input type="address" class="form-control" name="admission_years" id="State" value="{{$datao->admission_year}}" required>
            </div>
            <div class="col-sm-2 form-group">
                <label for="State">Gender</label>
                <input type="address" class="form-control" name="gender" id="State" value="{{$datao->gender}}" required>
            </div>
            <div class="col-sm-4 form-group">
                <label for="State">Date Of Birth</label>
                <input type="address" class="form-control" name="dob" id="State" value="{{$datao->date}}/{{$datao->month}}/{{$datao->years}}" required>
            </div>
            <div class="col-sm-4 form-group">
                <label for="zip">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{$datao->email}}" required>
            </div>
            <div class="col-sm-4 form-group">
                <label for="zip">Phone No</label>
                <input type="zip" class="form-control" name="phone_no" id="tel" placeholder="Enter Your Contact Number." minlength="10" maxlength="10" required>
            </div>
            
            <div class="col-sm-4 form-group">
                <label for="tel">State</label>
                <input type="tel" name="state" class="form-control" id="State" placeholder="Enter State." required>
            </div>
            <div class="col-sm-4 form-group">
                <label for="pass">Country</label>
                <input type="text" name="country" class="form-control" id="country" value="{{$datao->country}}" required>
            </div>
            <div class="col-sm-4 form-group">
                <label for="pass2">ZipCode</label>
                <input type="text" name="zipcode" class="form-control" id="zip" placeholder="Enter your zipcode." required>
            </div>
            <div class="col-sm-4 form-group">
                <label for="pass2">Other info</label>
                <input type="text" name="other_info" class="form-control" id="zip" placeholder="Enter your other info." >
            </div>
            <div class="col-sm-12">
                <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
                </label>
            </div>

            <div class="col-sm-12 form-group mb-0">
               <button class="btn btn-primary float-right">Submit</button>
            </div>
            
        </div>
     </form>
        @endsection