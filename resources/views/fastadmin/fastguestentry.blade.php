@extends('fastadmin.fastadmin')
   @section('contentz')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/staffguest-stylesheet.css')}}">

    <form action="{{url('fastguesten')}}" method="POST" enctype="multipart/form-data">
    @csrf
            <h2 class="text-center">Guest Entry Area</h2>
        <div class="row jumbotron">
            <h4 id="lab1x" style="top: -17px;position: relative; background-color: #F85D5D; color:#FFFFFF;">{{session('success')}}</h4>
              <h4 id="lab1x" style="top: -17px;position: relative; background-color: #F85D5D; color:#FFFFFF;">{{session('faill')}}</h4>
            <div class="col-md-6 form-group" id="col-ed">
                <label for="email">Guest Picture</label>
                <div class="mt-1">
                <div id="my_camera">
                    <video autoplay="autoplay" style="width: 192px;height: 200px;object-fit: cover;position: absolute;left: 196px;transform-origin: 0px 0px;"></video>
                </div>
                </div>
                <div class="mt-2">
                <input type=button class="capture-camera" id="cam-1" value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="guest_pic" class="image-tag">
                </div>
                <div class="mt-3">
                <div id="results">Your captured image will appear here...</div>
                </div>
            </div>
            
            
            <div class="col-md-6 form-group" id="col-ed">
                <label for="email">Group Picture</label>
                 <div class="mta-1">
                <div id="my_cameraa">
                    <video autoplay="autoplay" style="width: 192px;height: 200px;object-fit: cover;position: absolute;left: 196px;transform-origin: 0px 0px;"></video>
                </div>
                </div>
                <div class="mta-2">
                <input type=button class="capture-camera" id="cam-2" value="Take Snapshota" onClick="take_snapshota()">
                <input type="hidden" name="group_pic" class="image-taga">
                </div>
                <div class="mta-3">
                <div id="resultsa">Your captured image will appear here...</div>
                </div>
            </div>
            <div class="col-sm-3 form-group">
                <label for="reference_code">Reference Code</label>
                <input type="text" class="form-control" name="reference_code" id="reference_code" value="{{$datao->fadmin_code}}"readonly>
            </div>
            <div class="col-sm-3 form-group" >
                <label for="reference_name">Reference Name</label>
                <input type="text" class="form-control" name="reference_name" id="reference_name" value="{{$datao->first_name}} {{$datao->middle_name}} {{$datao->last_name}}" readonly>
            </div>
            <div class="col-sm-6 form-group">
                <label for="pancard_pic">Pancard Picture</label>
                <input type="file" class="form-control" name="pancard_pic" id="pancard_pic"  required>
                <br>
                <label for="addhaar_pic">Addhaar Picture</label>
                <input type="file" class="form-control" name="addhaar_pic" id="addhaar_pic"  required>
            </div>
            <div class="col-sm-3 form-group" id="col3-1">
                <label for="full_name">Full Name</label>
                <input type="address" class="form-control" name="guest_name" id="full_name" placeholder="Enter Your Full Name."  required>
            </div>

            <div class="form-group col-sm-3" id="col3-2">
                         <h6>Gender</h6>        
                           <select class="custom-select" name="guest_gender" id="gender2">
                            <option selected>Choose...</option>
                              <option value="male">Male</option>
                               <option value="female">Female</option>
                               <option value="others">Others</option>
                           </select>   
                        </div>

            <div class="col-sm-6 form-group" >
                <label for="desc">Description</label>
                <textarea type="text" class="form-control" name="guest_desc" id="desc"  required></textarea>
            </div>

            <div class="col-sm-3 form-group" id="col3-3">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Enter Your Email Id." required>
            </div>
           
            <div class="col-sm-3 form-group" id="col3-4">
                <label for="phone">Phone No</label>
                <input type="text" name="phone_no" class="form-control" id="phone" placeholder="Enter Your Contact Number." required>
            </div>

            <div class="col-sm-3 form-group">
                <label for="member_no">Member No</label>
                <input type="text" class="form-control" name="member_no" id="member_no" placeholder="Enter Member No." required>
            </div>

            <div class="col-sm-3 form-group">
                <label for="member_gender">Member Gender</label>
                <input type="text" class="form-control" name="member_gender" id="member_gender" placeholder="Enter Member Gender."  required>
            </div>

            <div class="col-sm-6 form-group" id="col3-5">
                <label for="member_name">Member Name</label>
               <textarea type="text" class="form-control" name="member_name" id="member_name"  required></textarea>
            </div>
            
            <div class="col-sm-6 form-group">
                <label for="member_doc_no">Member Doc</label>
                <textarea type="text" class="form-control" name="member_doc_no" id="member_doc_no" required></textarea>
            </div>

            <div class="col-sm-6 form-group" id="col3-6">
                <label for="address">Address</label>
                <textarea type="text" class="form-control" name="address" id="address"  required></textarea>
            </div>
            <div class="col-sm-3 form-group">
                <label for="city">City</label>
                <input type="address" class="form-control" name="city" id="city" placeholder="Enter Your City." required>
            </div>
            <div class="col-sm-3 form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" name="state" id="state" placeholder="Enter Your State." required>
            </div>
             <div class="col-sm-3 form-group" id="col3-7">
                <label for="country">Country</label>
                <input type="text" name="country" class="form-control" id="country" placeholder="Enter Your Country." required>
            </div>
            <div class="col-sm-3 form-group" id="col3-8">
                <label for="zipcode">Zipcode</label>
                <input type="text" class="form-control" name="zipcode" id="zipcode"  placeholder="Enter your zipcode."  required>
            </div>
             <div class="col-sm-3 form-group">
                <label for="guest_addhaar">Addhaar Card</label>
                <input type="text" class="form-control" name="guest_addhaar" id="guest_addhaar" placeholder="Enter Your Addhaar Number." required>
            </div>

            <div class="col-sm-3 form-group">
                <label for="pancard_no">Pan Card</label>
                <input type="text" class="form-control" name="pancard_no" id="pancard_no" placeholder="Enter Your Pancard Number." required>
            </div>
            
            <div class="col-sm-6 form-group" id="col3-9">
                <label for="guest_otherinfo">Other info</label>
               <textarea type="text" class="form-control" name="guest_otherinfo" id="guest_otherinfo"  required></textarea>
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

