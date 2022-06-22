@extends('fastadmin.fastadmin')
   @section('contentz')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/table-style.css')}}">
    <h2>Guest Entry Reports</h2>
    <div class="container table-responsive py-5"> 
        <div class="col-sm-6">
             <form action="{{url('viewencode')}}" method="post">
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
             <form action="{{url('viewendate')}}" method="post">
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
        <td>{{$guest->guest_desc}}</td>
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
            <div class="col-sm-6 form-group" id="acx-7s">
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
            <div class="col-sm-5 form-group" id="cx-14s">
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
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
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

    </script>
    @endsection