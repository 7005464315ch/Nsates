<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style type="text/css">
    body{
      font-family: sans-serif;
    }
    .login-left{color:#ffffff; background:#FD7F7F; height:200px; font-weight:100;}
.login-left .brand{width:80%; margin:auto; z-index:1;}
.login-left .school{font-size:16px;}
.login-left .stems{font-size:56px; font-weight: 600; line-height:1.1; }
.login-left .trampolene{font-size:16px; margin:20px 0 120px;}
.login-right{background:#ffffff; height:100vh;}
.vertical-center{min-height:100vh;display:flex;align-items:center;}
.square{position:absolute; background:#C30C10;}
.s1{top:0; left:0; width:80px; height:80px;}
.s2{top:22%; left:15%; width:200px; height:200px;}
.s3{top:66%; left:35%; width:40px; height:40px;}

.login-form{width:60%; margin:0 auto 40px;}
.login-form .logo{width:60%; margin:0 20% 20px;}
.form-check{display:inline-block;}
.forgot{display:inline-block; float:right;}
a{color:#3742FA;}
.login-form .btn-primary{background:#3742FA !important; margin:10px 0 25px;}
.agree{color:#888888; font-size:12px; text-align:center;}

@media (min-width: 768px){
  .login-left{height:100vh;}
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-sm-12 login-left vertical-center">
      <div class="brand">
        <div class="school">
          
        </div>
        <div class="stems">
          North Eastern Regional Institute of Science and Technology 
        </div>
        <div class="trampolene">
          
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 login-right vertical-center">
      <div class="container">
        <div class="row">
          <div class="col align-self-start">
            <div class="login-form">
              <form method="POST" action="{{url('studentlogin')}}">
                  @csrf
                <div class="logo">
                   <h1 class="logo">NSATES</h1>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="student_no" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Student No.">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Enter Your Password.">
                </div>

                
                <div class="forgot">
                  <br>
                  <h4 style="top: -17px;position: relative;">{{session('failed')}}</h4>
                </div>
                <button type="submit" name="save" class="btn btn-primary btn-lg btn-block">LOG IN</button>
                <div class="agree">
                  By proceeding to use our system, you agree to our <br><a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="square s1"></div>
  <div class="square s2"></div>
  <div class="square s3"></div>
</div>
</body>
</html>