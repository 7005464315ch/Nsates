@extends('fastadmin.fastadmin')
   @section('contentz')
   <link rel="stylesheet" type="text/css" href="{{asset('asset/css/table-style.css')}}">
    <h2>Vehical Entry Reports</h2>
    <div class="container table-responsive py-5">
      <div class="col-sm-6">
             <form action="{{url('viewvencode')}}" method="post">
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
             <form action="{{url('viewvendate')}}" method="post">
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
      <th scope="col" id="bm-6">Vehical No</th>
      <th scope="col" id="bm-7">Driver Name</th>
      <th scope="col" id="bm-8">Descp</th>
      <th scope="col" id="bm-9">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($vehicalen as $key=>$vehi)
    <tr><td scope="row">{{++$key}}</td>
        <td id="bm-2">{{$vehi->entry_code}}</td>
        <td>{{$vehi->created_date}}</td>
        <td id="bm-4">{{$vehi->reference_code}}</td>
        <td>{{$vehi->reference_name}}</td>
        <td>{{$vehi->vehical_reg_no}}</td>
        <td>{{$vehi->driver_name}}</td>
        <td>{{$vehi->dsecp}}</td>
        <td><a data-vehi_id="{{$vehi->id}}" data-entry_code="{{$vehi->entry_code}}" data-created_date="{{$vehi->created_date}}" data-reference_code="{{$vehi->reference_code}}" data-reference_name="{{$vehi->reference_name}}" data-vehical_reg_no="{{$vehi->vehical_reg_no}}"   data-vehical_type="{{$vehi->vehical_type}}" data-owner_name="{{$vehi->owner_name}}" data-vehical_md_comp="{{$vehi->vehical_md_comp}}" data-vehical_model="{{$vehi->vehical_model}}" data-vehical_trans_comp="{{$vehi->vehical_trans_comp}}" data-passenger_no="{{$vehi->passenger_no}}" data-dsecp="{{$vehi->dsecp}}"  data-driver_rc_no="{{$vehi->driver_rc_no}}" data-driver_name="{{$vehi->driver_name}}" data-driver_phone_no="{{$vehi->driver_phone_no}}" data-owner_phone_no="{{$vehi->owner_phone_no}}" data-driver_gender="{{$vehi->driver_gender}}" data-address="{{$vehi->address}}" data-city="{{$vehi->city}}"  data-state="{{$vehi->state}}" data-country="{{$vehi->country}}" data-zipcode="{{$vehi->zipcode}}" data-other_info="{{$vehi->other_info}}" data-vehical_pic="{{$vehi->vehical_pic}}" data-driver_pic="{{$vehi->driver_pic}}" data-licence_pic="{{$vehi->licence_pic}}" data-toggle="modal" data-target="#exampleModal-showa" type="button"class="btn btn-warning btn-sm">Show</a></td>

       </tr>
    @endforeach
  </tbody>
  </div>
  <div id="exampleModal-showa" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
          <div class="col-sm-2 form-group">
                <label for="name-f"> ID</label>
                <input type="text" class="form-control" id="id" disabled>
            </div>
          <div class="col-sm-3 form-group" id="col-1s">
                <label for="name-f"> Entry Code</label>
                <input type="text" class="form-control" id="entry_code" disabled>
            </div>
          <div class="col-sm-3 form-group" id="col-2s">
                <label for="name-f"> Entry Date</label>
                <input type="text" class="form-control" id="created_date" disabled>
            </div>
          
          <div class="col-sm-3 form-group" id="col-3s">
                <label for="name-f">Reference Code</label>
                <input type="text" class="form-control" id="reference_code" disabled>
            </div>
          
          <div class="col-sm-3 form-group">
                <label for="name-f">Vehical Number</label>
                <input type="text" class="form-control" id="vehical_reg_no" disabled>
            </div>
          <div class="col-sm-2 form-group">
                <label for="name-f">Vehical Type</label>
                <input type="text" class="form-control" id="vehical_type" disabled>
            </div>
            <div class="col-sm-2 form-group">
                <label for="name-f">P. No</label>
                <input type="text" class="form-control" id="passenger_no" disabled>
            </div>
         
          <div class="col-sm-3 form-group" id="col-4s">
                <label for="name-f">Reference Name</label>
                <input type="text" class="form-control" id="reference_name" disabled>
            </div>
            <div class="col-sm-2 form-group">
                <label for="name-f">Vehical Model</label>
                <input type="text" class="form-control" id="vehical_model" disabled>
            </div>
          <div class="col-sm-3 form-group">
                <label for="name-f">Vehical Trans Comp</label>
                <input type="text" class="form-control" id="vehical_trans_comp" disabled>
            </div>
          
            <div class="col-sm-3 form-group">
                <label for="name-f">Vehical Mdf Comp</label>
                <input type="text" class="form-control" id="vehical_md_comp" disabled>
            </div>
          
             <div class="col-sm-3 form-group">
                <label for="name-f">Owner Name</label>
                <input type="text" class="form-control" id="owner_name" disabled>
            </div>
            <div class="col-sm-3 form-group" id="col-13s">
                <label for="name-f">Driver Lisence</label>
                <input type="text" class="form-control" id="driver_rc_no" disabled>
            </div>
          <div class="col-sm-3 form-group" id="col-14s">
                <label for="name-f">Driver Name</label>
                <input type="text" class="form-control" id="driver_name" disabled>
            </div>
            <div class="col-sm-3 form-group" id="col-17s">
                <label for="name-f">Owner Phone No</label>
                <input type="text" class="form-control" id="owner_phone_no" disabled>
            </div>
          <div class="col-sm-3 form-group" id="col-18s">
                <label for="name-f">Driver Gender</label>
                <input type="text" class="form-control" id="driver_gender" disabled>
            </div>
          <div class="col-sm-6 form-group">
                <label for="name-f">Description</label>
                <textarea type="text" class="form-control" id="dsecp" disabled></textarea>
            </div>
          
          <div class="col-sm-6 form-group" id="col-15s">
                <label for="name-f">Address</label>
                <textarea type="text" class="form-control" id="address" disabled></textarea>
            </div>
          <div class="col-sm-3 form-group" id="col-19s">
                <label for="name-f">City</label>
                <input type="text" class="form-control" id="city" disabled>
            </div>
          <div class="col-sm-3 form-group" id="col-20s">
                <label for="name-f">State</label>
                <input type="text" class="form-control" id="state" disabled>
            </div>
          <div class="col-sm-3 form-group" id="col-21s">
                <label for="name-f">Country</label>
                <input type="text" class="form-control" id="country" disabled>
            </div>
          <div class="col-sm-3 form-group" id="col-22s">
                <label for="name-f" id="zips">Zipcode</label>
                <input type="text" class="form-control" id="zipcode" disabled>
            </div> 
          <div class="col-sm-3 form-group" id="col-23s">
                <label for="name-f" id="othin">Other Info</label>
                <input type="text" class="form-control" id="other_info" disabled>
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

$('#exampleModal-showa').on('show.bs.modal', function(event){

               var button = $(event.relatedTarget)
               var id = button.data('id')
               var entry_code = button.data('entry_code')
               var reference_code = button.data('reference_code')
               var reference_name = button.data('reference_name')
               var created_date = button.data('created_date')
               var vehical_reg_no = button.data('vehical_reg_no')
               var vehical_type = button.data('vehical_type')
               var owner_name = button.data('owner_name')
               var vehical_md_comp = button.data('vehical_md_comp')
               var vehical_model = button.data('vehical_model')
               var vehical_trans_comp = button.data('vehical_trans_comp')
               var passenger_no = button.data('passenger_no')
               var dsecp = button.data('dsecp')
               var driver_rc_no = button.data('driver_rc_no')
               var driver_name = button.data('driver_name')
               var driver_phone_no = button.data('driver_phone_no')
               var owner_phone_no = button.data('owner_phone_no')
               var driver_gender = button.data('driver_gender')
               var address = button.data('address')
               var city = button.data('city')
               var state = button.data('state')
               var country = button.data('country')
               var zipcode = button.data('zipcode')
               var other_info = button.data('other_info')
               var vehical_pic = button.data('vehical_pic')
               var driver_pic = button.data('driver_pic')
               var licence_pic = button.data('licence_pic')
               var vehi_id = button.data('vehi_id')

                var modal = $(this)
               modal.find('.modal-body #id').val(id);
               modal.find('.modal-body #entry_code').val(entry_code);
               modal.find('.modal-body #reference_code').val(reference_code);
               modal.find('.modal-body #reference_name').val(reference_name);
               modal.find('.modal-body #created_date').val(created_date);
               modal.find('.modal-body #vehical_reg_no').val(vehical_reg_no);
               modal.find('.modal-body #vehical_type').val(vehical_type);
               modal.find('.modal-body #owner_name').val(owner_name);
               modal.find('.modal-body #vehical_md_comp').val(vehical_md_comp);
               modal.find('.modal-body #vehical_model').val(vehical_model);
               modal.find('.modal-body #vehical_trans_comp').val(vehical_trans_comp);
               modal.find('.modal-body #passenger_no').val(passenger_no);
               modal.find('.modal-body #dsecp').val(dsecp);
               modal.find('.modal-body #driver_rc_no').val(driver_rc_no);
               modal.find('.modal-body #driver_name').val(driver_name);
               modal.find('.modal-body #driver_phone_no').val(driver_phone_no);
               modal.find('.modal-body #owner_phone_no').val(owner_phone_no);
               modal.find('.modal-body #driver_gender').val(driver_gender);
               modal.find('.modal-body #address').val(address);
               modal.find('.modal-body #city').val(city);
               modal.find('.modal-body #state').val(state);
               modal.find('.modal-body #country').val(country);
               modal.find('.modal-body #zipcode').val(zipcode);
               modal.find('.modal-body #other_info').val(other_info);
               modal.find('.modal-body #vehical_pic').val(vehical_pic);
               modal.find('.modal-body #driver_pic').val(driver_pic);
               modal.find('.modal-body #licence_pic').val(licence_pic);
               modal.find('.modal-body #vehi_id').val(vehi_id);
              
               });
</script>   
    @endsection