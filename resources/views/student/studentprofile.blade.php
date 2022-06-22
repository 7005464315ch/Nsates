@extends('student.studesh')
   @section('contentrs')
   <style type="text/css">
      label{
         font-weight: 600;
      }
      .form-control {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #000103;
    background-color: #fff;
    background-clip: padding-box;
    border: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    font-weight: 300;
}

label {
    display: inline-block;
    margin-bottom: -0.9rem;
}

img {width: 100%;

   }
   </style>

    <div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
   <div class="card-body">
      <div class="account-settings">
         <div class="user-profile">
            <div class="user-avatar">
               <img src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg" alt="Maxwell Admin">
            </div>
            <br>
            <h5 class="user-name">{{$datao->first_name}} {{$datao->middle_name}} {{$datao->last_name}}</h5>
            <h6 class="user-email">{{$datao->email}}</h6>
         </div>
         <br>
         <div class="about">
            <h5>About</h5>
            <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
         </div>
      </div>
   </div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
   <div class="card-body">
      <div class="row gutters">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h6 class="mb-2 text-primary">Collage Details</h6>
            <hr>
         </div>

          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="phone">Student Code</label>
              <!--  <input type="text" class="form-control" id="phone" value="{{$datao->phone_no}}"> -->
              <label class="form-control" id="phone">{{$datao->student_code}}</label>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="phone">Student No( Roll No )</label>
               <label class="form-control" id="phone">{{$datao->student_no}}</label>
              <!--  <input type="text" class="form-control" id="phone" value="{{$datao->phone_no}}"> -->
            </div>
         </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="phone">Admission Year</label>
                <label class="form-control" id="phone">{{$datao->admission_year}}</label>
               <!-- <input type="text" class="form-control" id="phone" value="{{$datao->phone_no}}"> -->
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="phone">Department Name</label>
                <label class="form-control" id="phone">{{$datao->department_name}}</label>
               <!-- <input type="text" class="form-control" id="phone" value="{{$datao->phone_no}}"> -->
            </div>
         </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="phone">Reg No</label>
                <label class="form-control" id="phone">{{$datao->reg_no}}</label>
              <!--  <input type="text" class="form-control" id="phone" value="{{$datao->phone_no}}"> -->
            </div>
         </div>
         
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="phone">Hostel No</label>
                <label class="form-control" id="phone">{{$datao->hostel_no}}</label>
              <!--  <input type="text" class="form-control" id="phone" value="{{$datao->phone_no}}"> -->
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="phone">Room No</label>
                <label class="form-control" id="phone">{{$datao->room_no}}</label>
              <!--  <input type="text" class="form-control" id="phone" value="{{$datao->phone_no}}"> -->
            </div>
         </div>
        
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h6 class="mb-2 text-primary">Personal Details</h6>
            <hr>
         </div>
        
          
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="fullName">Full Name</label>
                <label class="form-control" id="phone">{{$datao->first_name}} {{$datao->middle_name}} {{$datao->last_name}}</label>
               <!-- <input type="text" class="form-control" id="fullName" value="{{$datao->first_name}} {{$datao->middle_name}} {{$datao->last_name}}"> -->
            </div>
         </div>
         
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="eMail">Email</label>
                <label class="form-control" id="phone">{{$datao->email}}</label>
               <!-- <input type="email" class="form-control" id="eMail" value="{{$datao->email}}"> -->
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="phone">Phone</label>
                <label class="form-control" id="phone">{{$datao->phone_no}}</label>
               <!-- <input type="text" class="form-control" id="phone" value="{{$datao->phone_no}}"> -->
            </div>
         </div>
         
       
         
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="phone">Gender</label>
                <label class="form-control" id="phone">{{$datao->gender}}</label>
              <!--  <input type="text" class="form-control" id="phone" value="{{$datao->phone_no}}"> -->
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="website">Date Of Birth</label>
                <label class="form-control" id="phone">{{$datao->date}} / {{$datao->month}} / {{$datao->years}}</label>
              <!--  <input type="url" class="form-control" id="website" placeholder="Website url"> -->
            </div>
         </div>
      </div>
      <div class="row gutters">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h6 class="mt-3 mb-2 text-primary">Address</h6>
            <hr>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="Street">Address-1</label>
                <label class="form-control" id="phone">{{$datao->address_one}}</label>
               <!-- <input type="name" class="form-control" id="Street" placeholder="Enter Street"> -->
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="Street">Address-2</label>
                <label class="form-control" id="phone">{{$datao->address_two}}</label>
              <!--  <input type="name" class="form-control" id="Street" placeholder="Enter Street"> -->
            </div>
         </div>
         
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="sTate">State</label>
                <label class="form-control" id="phone">{{$datao->state}}</label>
              <!--  <input type="text" class="form-control" id="sTate" placeholder="Enter State"> -->
            </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="form-group">
               <label for="sTate">country</label>
                <label class="form-control" id="phone">{{$datao->country}}</label>
              <!--  <input type="text" class="form-control" id="sTate" placeholder="Enter State"> -->
         </div>
         </div>
         
      </div>
      <div class="row gutters">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="text-right">
               <button type="button" id="submit" name="submit" class="btn btn-primary">Print</button>
               <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
   @endsection