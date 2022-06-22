<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fast Admin</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/loging-stylesheet.css')}}">
 

 </style>

</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Fast Admin</a>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
     <img src="{{asset('asset/media/login1.png')}}">
    </div>
    <div class="col-sm-4">
      <div class="row-col">
        <header>
          <h2 style="text-align: center;">Fast Admin</h2>
        </header>
          
       <div class="wrapper-main" style=" position: absolute;top: 20%;left: 0;width: 100%;height: 80%;">
        <form method="POST" action="{{url('fastassetlog')}}">
          @csrf
        <div class="col-sm-3 form-group">
                <label for="employee_no">Username</label>
                <input type="text"  style="height: 46px;" class="form-control" name="employee_no" id="employee_no" placeholder="Enter your Username"  >
            </div>
        <div class="col-sm-3 form-group">
                <label for="Password">Password</label>
                <input type="password" style="height: 46px;" class="form-control " name="password" id="Password" placeholder="Enter your Password" >
            </div>
        <div class="col-sm-3 form-group">
                 <h4 style="top: -17px;position: relative;">{{session('failed')}}</h4>
                <input type="submit" style="height: 52px; background-color: #E4E3E3; cursor: pointer;" class="form-control" name="save">
            </div>
        <div class="col-sm-3 form-group">
               <a href="">Forget Pass</a>
            </div></form>
      </div></div>
    </div>
  </div>
</div>
</body>
</html>