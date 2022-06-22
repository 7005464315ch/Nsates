@extends('fastadmin.fastadmin')
   @section('contentz')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/staffvehical-stylesheet.css')}}">
    <style type="text/css">
       
    </style>
    <form action="{{url('fastvehicalon')}}" method="POST" enctype="multipart/form-data">
    @csrf
            <h2 class="text-center">Vehical Entry Area</h2>
            <div class="row jumbotron">
                <h4 id="lab1x" style="top: -17px;position: relative; background-color: #F85D5D; color:#FFFFFF;">{{session('success')}}</h4>
              <h4 id="lab1x" style="top: -17px;position: relative; background-color: #F85D5D; color:#FFFFFF;">{{session('faill')}}</h4>
            <div class="col-md-6 form-group" id="col-ed">
                <label for="email">Vehical Picture</label>
                <div class="mt-1">
                <div id="my_camera">
                    <video autoplay="autoplay" style="width: 192px;height: 200px;object-fit: cover;position: absolute;left: 196px;transform-origin: 0px 0px;"></video>
                </div>
                </div>
                <div class="mt-2">
                <input type=button class="capture-camera" id="cam-1" value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="vehical_pic" class="image-tag">
                </div>
                <div class="mt-3">
                <div id="results">Your captured image will appear here...</div>
                </div>
            </div>
            <div class="col-md-6 form-group" id="col-ed">
                <label for="email">Driver Picture</label>
                <div class="mta-1">
                <div id="my_cameraa">
                    <video autoplay="autoplay" style="width: 209px;height: 200px;object-fit: cover;position: absolute;left: 196px;transform-origin: 0px 0px;"></video>
                </div>
                </div>
                <div class="mta-2">
                <input type=button class="capture-camera" id="cam-2" value="Take Snapshota" onClick="take_snapshota()">
                <input type="hidden" name="driver_pic" class="image-taga">
                </div>
                <div class="mta-3">
                <div id="resultsa">Your captured image will appear here...</div>
                </div>
            </div>
            <div class="col-sm-3 form-group" >
                <label for="reference_code">Reference Code</label>
                <input type="text" class="form-control" name="reference_code" id="reference_code" value="{{$datao->staff_code}}" readonly>
            </div>
            <div class="col-sm-3 form-group">
                <label for="reference_name">Reference Name</label>
                <input type="text" class="form-control" name="reference_name" id="reference_name" value="{{$datao->first_name}} {{$datao->middle_name}} {{$datao->last_name}}"readonly>
            </div>
            
            <div class="col-sm-3 form-group" id="col-1">
                <label for="vehical_reg_no">Vehical Reg No</label>
                <input type="text" class="form-control" name="vehical_reg_no" id="vehical_reg_no" placeholder="Enter Vehical Number."  required>
            </div>
            <div class="form-group col-md-3" id="col-1">
                         <h6>Vehical Type</h6>        
                           <select class="custom-select" name="vehical_type" id="gender2">
                            <option selected>Choose...</option>
                              <option value="Two Wheeler">Two Wheeler</option>
                               <option value="Three Wheeler">Three Wheeler</option>
                               <option value="Four Wheeler">Four Wheeler</option>
                                <option value="Bus">Bus</option>
                               <option value="Truck">Truck</option>
                               <option value="Other">Other</option>
                           </select>   
                        </div>
            <div class="col-sm-6 form-group" id="col-1">
                <label for="owner_name">Owner Name</label>
                <input type="address" class="form-control" name="owner_name" id="owner_name" placeholder="Enter Vehical Owner Name."   required>
            </div>

            <div class="col-sm-3 form-group" id="col-1">
                <label for="vehical_md_comp">Vehical Md Comp</label>
                <input type="text" class="form-control" name="vehical_md_comp" id="vehical_md_comp" placeholder="Enter Vehical Company."  required>
            </div>
            <div class="col-sm-3 form-group" id="col-1">
                <label for="vehical_model">Vehical Model</label>
                <input type="text" class="form-control" name="vehical_model" id="vehical_model" placeholder="Enter Vehical Model." required>
            </div>
            <div class="col-sm-3 form-group" id="col-1">
                <label for="vehical_trans_comp">Vehical Trans Comp</label>
                <input type="text" class="form-control" name="vehical_trans_comp" id="vehical_trans_comp" placeholder="Enter Vehical Transport."  required>
            </div>
            <div class="col-sm-3 form-group" id="col-1">
                <label for="passenger_no">Passenger No</label>
                <input type="text" class="form-control" name="passenger_no" id="passenger_no" placeholder="Enter Passenger Number." required>
            </div>
          
            <div class="form-group col-md-3" id="col-1">
                         <h6>Descp</h6>        
                           <select class="custom-select" name="dsecp" id="gender2">
                            <option selected>Choose...</option>
                              <option value="Study">Study</option>
                               <option value="Office work">Office work</option>
                               <option value="visitor">visitor</option>
                           </select>   
                        </div>

            <div class="col-sm-3 form-group" id="col-1">
                <label for="driver_rc_no">Driver Rc No</label>
                <input type="text" class="form-control" name="driver_rc_no" id="driver_rc_no" placeholder="Enter Driving Licence ." required>
            </div>
            <div class="col-sm-6 form-group" id="col-1">
                <label for="driver_name">Driver Name</label>
                <input type="text" class="form-control" name="driver_name" id="driver_name" placeholder="Enter Driver Name ."  required>
            </div>
             <div class="col-sm-3 form-group" id="col-1">
                <label for="driver_phone_no">Driver Phone No</label>
                <input type="text" class="form-control" name="driver_phone_no" id="driver_phone_no" placeholder=" Driver Contact Number." required>
            </div>
             <div class="col-sm-3 form-group" id="col-1">
                <label for="owner_phone_no">Owner Phone No</label>
                <input type="text" class="form-control" name="owner_phone_no" id="owner_phone_no" placeholder="Owner Contact Number." required>
            </div>

            <div class="col-sm-6 form-group" id="col-1">
                <label for="address">Address</label>
                <textarea type="text" name="address" class="form-control" id="address"  required>Enter Your Address</textarea>
            </div>
            
            <div class="col-sm-2 form-group" id="col-1">
                <h6>Driver Gender</h6>        
                           <select class="custom-select" name="driver_gender" id="gender2">
                            <option selected>Choose...</option>
                              <option value="Male">Male</option>
                               <option value="Female">Female</option>
                               <option value="Others">Others</option>
                           </select>   
            </div>
            

            <div class="col-sm-4 form-group" id="col-1">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="Enter City." required>
            </div>
            
            <div class="col-sm-4 form-group" id="col-1">
                <label for="State">State</label>
                <input type="text" name="state" class="form-control" id="State" placeholder="Enter State." required>
            </div>
            <div class="col-sm-4 form-group" id="col-1">
                <label for="country">Country</label>
                <input type="text" name="country" class="form-control" id="country" placeholder="Enter Country."  required>
            </div>
            <div class="col-sm-4 form-group" id="col-1">
                <label for="zipcode">ZipCode</label>
                <input type="text" name="zipcode" class="form-control" id="zipcode" placeholder="Enter  zipcode." required>
            </div>
            <div class="col-sm-6 form-group" id="col-1">
                <label for="other_info">Other info</label>
                <input type="text" name="other_info" class="form-control" id="other_info" placeholder="Enter your other info." >
            </div>
            <div class="col-sm-6 form-group" id="col-1">
                <label for="licence_pic">Licence Picture</label>
                <input type="file" name="licence_pic" class="form-control" id="licence_pic" placeholder="Enter your other info." >
            </div>
            <div class="col-sm-12" id="col-1">
                <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
                </label>
            </div>

            <div class="col-sm-12 form-group mb-0">
               <button class="btn btn-primary float-right">Submit</button>
            </div>
            
        </div>
     </form>
     <script type="text/javascript">
         Webcam.set({
        width: 192,
        height: 225,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
    
    Webcam.attach( '#my_camera' );
    
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }

    Webcam.set({
        width: 207,
        height: 225,
        image_format: 'jpeg',
        jpeg_quality: 90
    });


    
    Webcam.attach( '#my_cameraa' );
    
    function take_snapshota() {
        Webcam.snap( function(data_uri) {
            $(".image-taga").val(data_uri);
            document.getElementById('resultsa').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>

   @endsection