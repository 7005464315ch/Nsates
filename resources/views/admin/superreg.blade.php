@extends('admin.cadmin')
   @section('contentx')
   
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/fastadreg-style.css')}}">
  
         <link rel="stylesheet" type="text/css" href="{{asset('asset/css/staffstudent-stylesheet.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <div class="col-sm-0">
            <h2 class="text-center">Superadmin Registration</h2>
        <div class="row jumbotron">
            <form action="{{url('supereg')}}" method="POST" enctype="multipart/form-data" style="width:100%">
            @csrf
            <h4 id="lab1x" style="top: -17px;position: relative; background-color: #F85D5D; color:#FFFFFF;">{{session('success')}}</h4>
              <h4 id="lab1x" style="top: -17px;position: relative; background-color: #F85D5D; color:#FFFFFF;">{{session('faill')}}</h4>
            <div class="col-sm-3 form-group">
                <label for="employee_no">Employee No</label>
                <input type="text" class="form-control" name="employee_no" id="employee_no" placeholder="Enter Employee No." required>
            </div>
             <div class="col-sm-3 form-group">
                <label for="time">Staff Post</label>
                <input type="text" class="form-control" name="post" id="time" placeholder="Enter Staff Post." >
            </div>
            <div class="col-sm-6 form-group">
                <label for="department_name">Department Name</label>
                <input type="text" class="form-control" name="department_name" id="department_name" placeholder="Enter Department Name."required>
            </div>

            <div class="col-sm-3 form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name." required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="middle_name">Middle Name</label>
                <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Enter Middle Name." >
            </div>
            <div class="col-sm-3 form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name." required>
            </div>


            <div class="form-group col-md-3">
                         <h6>Gender</h6>        
                           <select class="custom-select" name="gender" id="gender2">
                            <option selected>Choose...</option>
                              <option value="Male">Male</option>
                               <option value="Female">Female</option>
                               <option value="Others">Others</option>
                           </select>   
                        </div>
            <div class="form-group col-sm-6">
             <h6>Date Of Birth</h6>
                  <hr>
                  <div class="form-row">
                     <div class="form-group col-md-4">
                        <label for="inputState">Year</label>
                        <select id="yeardropdown" name="years" class="form-control">
                           <option selected>Year...</option>
                        </select>
                     </div>
                     <div class="form-group col-md-4">
                        <label for="inputState">Month</label>
                        <select id="monthdropdown" name="month" class="form-control">
                           <option selected>Month...</option>
                        </select>
                     </div>
                     <div class="form-group col-md-4">
                        <label for="inputState">Day</label>
                        <select id="daydropdown" name="date" class="form-control">
                           <option selected>Day...</option>
                        </select>
                     </div>
                  </div></div>
            <div class="col-sm-3 form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email Id." required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="phone">Phone No</label>
                <input type="text" class="form-control" name="phone_no" id="phone" placeholder="Enter Phone No." minlength="10" maxlength="10" required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="password1">Password</label>
                <input type="text" class="form-control" name="password" id="password1" placeholder="Enter Password." required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="password2">Password</label>
                <input type="text" class="form-control"  id="password2" placeholder="Confirm Again Password."  required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="address_one">Address</label>
                <textarea type="text" name="address_one" class="form-control" id="address_one" placeholder="Enter your Present Address." required></textarea>
            </div>
             <div class="col-sm-6 form-group">
                <label for="address_two">Address</label>
                <textarea type="text" name="address_two" class="form-control" id="address_two" placeholder="Enter your Permanent Address." required></textarea>
            </div>
            <div class="col-sm-3 form-group">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="Enter City." required>
            </div>
            
            <div class="col-sm-3 form-group">
                <label for="State">State</label>
                <input type="text" name="state" class="form-control" id="State" placeholder="Enter State." required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="country">Country</label>
                <input type="text" name="country" class="form-control" id="country" placeholder="Enter Country." required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="zipcode">ZipCode</label>
                <input type="text" name="zipcode" class="form-control" id="zipcode" placeholder="Enter ZipCode."  required>
            </div>
            <div class="col-sm-6 form-group" id="xc-1">
                <label for="other_info">Other info</label>
                <textarea type="text" name="other_info" class="form-control" id="other_info" placeholder="Enter your other info." ></textarea>
            </div>
            <div class="col-sm-6 form-group">
                <label for="picture">Profile Picture</label>
                <input type="file" name="picture" class="form-control" id="picture"  required>
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

       <script type="text/javascript" src="{{asset('asset/js/fastadreg.js')}}"></script>

   @endsection