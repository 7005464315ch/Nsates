@extends('fastadmin.fastadmin')
   @section('contentz')
<link rel="stylesheet" type="text/css" href="{{asset('asset/css/table-style.css')}}">
    <h2>Staff Help and Review Message</h2>
    <div class="container table-responsive py-5">
    <div class="col-sm-6">
             <form action="{{url('viewfasmesscode')}}" method="post">
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
             <form action="{{url('viewfasmessdate')}}" method="post">
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
      <th scope="col" id="bm-3">Staff Code</th>
      <th scope="col" id="bm-4">Staff Name</th>
      <th scope="col" id="bm-5">Email</th>
      <th scope="col" id="bm-6">Subject</th>
      <th scope="col" id="bm-8">Date</th>
      <th scope="col" id="bm-9">Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach($staffaens as $key=>$staffa)
    <tr>
        <td scope="row">{{++$key}}</td>
        <td id="bm-2">{{$staffa->entry_code}}</td>
        <td>{{$staffa->staff_code}}</td>
        <td id="bm-4">{{$staffa->employee_name}}</td>
        <td>{{$staffa->email}}</td>
        <td>{{$staffa->subject}}</td>
        <td>{{$staffa->created_date}}</td>
        <td><a data-staffa_id="{{$staffa->id}}" data-entry_code="{{$staffa->entry_code}}" data-created_date="{{$staffa->created_date}}" data-staff_code="{{$staffa->staff_code}}"  data-staff_name="{{$staffa->staff_name}}"  data-email="{{$staffa->email}}"   data-subject="{{$staffa->subject}}" data-description="{{$staffa->description}}"    data-toggle="modal" data-target="#exampleModal-showzc" type="button"class="btn btn-warning btn-sm">Show</a></td>
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
          <div class="col-sm-3 form-group" >
                <label for="name-f"> Staff Code</label>
                <input type="text" class="form-control" id="staff_code" disabled>
            </div>
            <div class="col-sm-3 form-group" id="acs-2">
                <label for="name-f">Created Date</label>
                <input type="text" class="form-control"  id="created_date" disabled>
            </div>
            
            <div class="col-sm-3 form-group" id="acs-8">
                <label for="name-f">Staff Name</label>
                <input type="text" class="form-control" id="staff_name" disabled>
            </div> 
           
            <div class="col-sm-6 form-group" id="acs-13">
                <label for="name-l">Email</label>
                <textarea type="text" class="form-control"  id="email" disabled></textarea>
            </div>
         
            <div class="col-sm-6 form-group" id="acs-13">
                <label for="name-l">Subject</label>
                <textarea type="text" class="form-control"  id="subject" disabled></textarea>
            </div>
             <div class="col-sm-6 form-group" id="acs-14">
                <label for="name-l">description</label>
                <textarea type="text" class="form-control"  id="description" disabled></textarea>
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
               var staff_code = button.data('staff_code')
               var staff_name = button.data('staff_name')
               var email = button.data('email')
               var subject = button.data('subject')
               var description = button.data('description')
               var staffa_id = button.data('staffa_id')

               var modal = $(this)
               modal.find('.modal-body #id').val(id);
               modal.find('.modal-body #created_date').val(created_date);
               modal.find('.modal-body #entry_code').val(entry_code);
               modal.find('.modal-body #staff_code').val(staff_code);
               modal.find('.modal-body #staff_name').val(staff_name);
               modal.find('.modal-body #email').val(email);
               modal.find('.modal-body #subject').val(subject);
               modal.find('.modal-body #description').val(description);
               modal.find('.modal-body #staffa_id').val(staffa_id);
               });


   </script>

   @endsection