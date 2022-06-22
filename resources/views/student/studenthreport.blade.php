@extends('student.studentmessage')
   @section('contentro')
   <link rel="stylesheet" type="text/css" href="{{asset('asset/css/table-style.css')}}">
   <style type="text/css">
      .pt-5, .py-5 {
    padding-top: 0rem!important;
}

   
   </style>
    <div class="container table-responsive py-5"> 
      <h4>Student Entry Reports</h4>
    <div class="col-sm-6" id="helpxc" style="float: left;">
             <form action="{{url('viewstemesscode')}}" method="post">
               @csrf
             <div class="col-sm-5 form-group"  style="float: left;">
                <label for="full_name">Student Code</label>
                <input type="text" class="form-control" name="ssearch" id="full_name" placeholder="Enter Your Student Code." required >
            </div>
             <div class="col-sm-3 form-group"  style="float: left;">
                <input type="submit" class="form-control bg-primary" name="submit" id="btn-secrch" value="Search">
            </div>
            </form>
        </div>
          <div class="col-sm-6" id="helpxc" style="float: left;">
             <form action="{{url('viewstemessdate')}}" method="post">
               @csrf
             <div class="col-sm-4 form-group"  style="float: left;">
                <label for="full_name">Start Date</label>
                <input type="date" class="form-control" name="from" id="full_name"  required >
            </div>
            <div class="col-sm-4 form-group"  style="float: left;">
                <label for="full_name">End Date</label>
                <input type="date" class="form-control" name="to" id="full_name"  required >
            </div>
             <div class="col-sm-3 form-group"  style="float: left;">
                <input type="submit" class="form-control bg-success" name="submit" id="btn-secrch" value="Search">
            </div>
            </form>
        </div>
        <br>    
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Entry Code</th>
      <th scope="col">Entry Date</th>
      <th scope="col">Student Code</th>
      <th scope="col">Student Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($stuhelp as $key=>$help)
    <tr>
       <td scope="row">{{++$key}}</td>
       <td>{{$help->entry_code}}</td>
       <td>{{$help->created_date}}</td>
       <td>{{$help->student_code}}</td>
       <td>{{$help->student_name}}</td>
       <td>{{$help->email}}</td>
       <td>{{$help->subject}}</td>
        <td><a data-help_id="{{$help->id}}" data-entry_code="{{$help->entry_code}}" data-created_date="{{$help->created_date}}" data-student_code="{{$help->student_code}}"  data-student_name="{{$help->student_name}}"  data-email="{{$help->email}}"   data-subject="{{$help->subject}}" data-description="{{$help->description}}"    data-toggle="modal" data-target="#exampleModal-showzc" type="button"class="btn btn-warning btn-sm">Show</a></td>
    </tr>
    @endforeach
  </tbody></table></div>
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
          <div class="col-sm-3 form-group" >
                <label for="name-f"> Student Code</label>
                <input type="text" class="form-control" id="student_code" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-2">
                <label for="name-f">Created Date</label>
                <input type="text" class="form-control"  id="created_date" disabled>
            </div>
            
            <div class="col-sm-3 form-group" id="acs-8">
                <label for="name-f">Student Name</label>
                <input type="text" class="form-control" id="student_name" disabled>
            </div> 
           
            <div class="col-sm-6 form-group" id="acs-13">
                <label for="name-l">Email</label>
                <textarea type="text" class="form-control"  id="email" disabled></textarea>
            </div>
         
            <div class="col-sm-6 form-group" id="acs-13">
                <label for="name-l">Subject</label>
                <textarea type="text" class="form-control"  id="subject" disabled></textarea>
            </div>
             <div class="col-sm-12 form-group" id="acs-14">
                <label for="name-l">description</label>
                <textarea type="text" class="form-control" style="height: 260px;" id="description" disabled></textarea>
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
               var entry_code = button.data('entry_code')
               var student_code = button.data('student_code')
               var student_name = button.data('student_name')
               var email = button.data('email')
               var subject = button.data('subject')
               var description = button.data('description')
               var help_id = button.data('help_id')

               var modal = $(this)
               modal.find('.modal-body #id').val(id);
               modal.find('.modal-body #created_date').val(created_date);
               modal.find('.modal-body #entry_code').val(entry_code);
               modal.find('.modal-body #student_code').val(student_code);
               modal.find('.modal-body #student_name').val(student_name);
               modal.find('.modal-body #email').val(email);
               modal.find('.modal-body #subject').val(subject);
               modal.find('.modal-body #description').val(description);
               modal.find('.modal-body #help_id').val(help_id);
               });


   </script>
   @endsection