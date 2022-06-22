@extends('fastadmin.fastadmin')
   @section('contentz')
  
   <style type="text/css">
    label{
      font-size: 0.8rem;
      }
      .form-control {
        font-size: 0.7rem;
        font-weight: 600;
      }
     .col-sm-3{
      max-width: 98%;
     }

     .col-sm-3a{
      max-width: 27%;
     }
     
     .col-sm-3b{
      position: absolute;
      top: 0;
      left: 45%;
       max-width: 20%;
     }

     .col-sm-3c{
      position: absolute;
      top: 0;
      left: 78%;
       max-width: 20%;
     }

     .form-groupa {
    margin-bottom: 0.1rem;
}

     .form-group {
    margin-bottom: 0.1rem;
}

  #other_info{
    position: absolute;
    top: 0;
    left: 17%;
    width: 80%;
    height: 29px;
  }
   </style>
   <link rel="stylesheet" type="text/css" href="{{asset('asset/css/studentreport-stylesheet.css')}}">
   <div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Entry Code</th>
      <th scope="col">Entry Date</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Email</th>
      <th scope="col">State</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($reporty as $reportx)
    <tr>
     
      <td>{{$reportx->student_code}}</td>
    
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

          <div class="row-col-0" style="width: 98%; height: 10%; position: absolute; top: 0; left: 14px; ">
          <div class="col-sm-3a form-groupa">
                <label for="name-f">Student Entry Code</label>
                <input type="text" class="form-control" name="student_entry_code" id="student_entry_code" disabled>
            </div>
            <div class="col-sm-3b form-group">
                <label for="name-l">Admission Years</label>
                <input type="text" class="form-control" name="admission_years" id="admission_years" disabled>
            </div>
             <div class="col-sm-3c form-groupa">
                <label for="name-f">Created Date</label>
                <input type="text" class="form-control" name="student_entry_code" id="student_entry_code" disabled>
            </div>
          </div>
          
          <div class="row-col-1" style="width: 35%; position: absolute; top: 16%; left: 0; ">
            <div class="col-sm-3 form-group">
                <label for="name-f">Student Code</label>
                <input type="text" class="form-control" name="student_code" id="student_code" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">Student No( Roll No )</label>
                <input type="text" class="form-control" name="student_no" id="student_no" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">Reg No</label>
                <input type="text" class="form-control" name="reg_no" id="reg_no" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-f">Dsecp</label>
                <input type="text" class="form-control" name="dsecp" id="dsecp" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-f">Department Name</label>
                <input type="text" class="form-control" name="department_name" id="department_name" disabled>
            </div>
             
          </div>

          <div class="row-col-2" style="width: 35%; position: absolute; top: 16%; left: 36%; ">
            <div class="col-sm-3 form-group">
                <label for="name-l">Full Name</label>
                <input type="text" class="form-control" name="full_name" id="full_name" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-f">Email</label>
                <input type="text" class="form-control" name="gender" id="gender" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">Phone No</label>
                <input type="text" class="form-control" name="dob" id="dob" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">Hostel No</label>
                <input type="text" class="form-control" name="hostel_no" id="hostel_no" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-f">Room No</label>
                <input type="text" class="form-control" name="room_no" id="room_no" disabled>
            </div>
           
          </div>

          <div class="row-col-3" style="position: absolute; top: 16%; left: 72%; width: 27%; ">
            <div class="col-sm-3 form-group">
                <label for="name-f">Gender</label>
                <input type="text" class="form-control" name="gender" id="gender" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">DOB</label>
                <input type="text" class="form-control" name="dob" id="dob" disabled>
            </div>
            
            <div class="col-sm-3 form-group">
                <label for="name-f">State</label>
                <input type="text" class="form-control" name="state" id="state" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">Country</label>
                <input type="text" class="form-control" name="country" id="country" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">Zipcode</label>
                <input type="text" class="form-control" name="zipcode" id="zipcode" disabled>
            </div>
          </div>
           <div class="row-col-4" style="position: absolute; top: 88%; left: 0%; width: 98%; ">
            <div class="col-sm-3 form-group">
                <label for="name-l">Other Info</label>
                <input type="text" class="form-control" name="other_info" id="other_info" disabled>
            </div>

            </div>
          </form>
      </div>
    </div>
  </div>
</div>
       <!-- <div class="modal-body" > -->
          <!-- <div class="view_modal_title">
          <h4>Entry View</h4>
          </div>
        <form action="{{url('showrep','id')}}" method="get">
          @csrf
          <div class="col-sm-3 form-group">
                <label for="name-f">Student Code</label>
                <input type="text" class="form-control" name="student_code" id="student_code" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">Student No( Roll No )</label>
                <input type="text" class="form-control" name="student_no" id="student_no" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-f">Student Code</label>
                <input type="text" class="form-control" name="student_code" id="student_code" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">Student No( Roll No )</label>
                <input type="text" class="form-control" name="student_no" id="name-l" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-f">Student Code</label>
                <input type="text" class="form-control" name="student_code" id="name-f" disabled>
            </div>
            <div class="col-sm-3 form-group">
                <label for="name-l">Student No( Roll No )</label>
                <input type="text" class="form-control" name="student_no" id="name-l" disabled>
            </div>
          </form> -->
       <!--  </div>
      </div> -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
         <script type="text/javascript">
          $('#exampleModal-show').on('show.bs.modal', function(event){

               var button = $(event.relatedTarget)
               var id = button.data('id')
               var created_date = button.data('created_date')
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