@extends('admin.cadmin')
   @section('contentx')
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet"/>
    <style type="text/css">
      .card-body {
    flex: 1 1 auto;
    padding: 2rem;
}
       .col-md-4{
         position: relative;
    width: 101%;
    min-height: 1px;
    padding-right: 0px;
    padding-left: 21px;
       }

       #xcard {
    margin: 8px 1px;
 }

 a:hover {
    color:#DAE5F6;
    text-decoration: underline;
}

       @media (min-width: 768px){
     .col-md-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 24.343333%;
    max-width: 50.333333%;
}}
    </style>
   <div class="row jumbotron">
       <div class="col-md-4">
      <div class="card text-white bg-primary mb-3">
        
        <div class="card-body">
          <h5 class="card-title" style="text-align:center;">Student Entry</h5>
          <p class="card-text" style="text-align:center;">{{$studentens}}</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-white bg-secondary mb-3">
       
        <div class="card-body">
          <h5 class="card-title" style="text-align:center;">Staff Entry</h5>
          <p class="card-text" style="text-align:center;">{{$staffaens}}</p>
        </div>
    </div>
    </div>
    <div class="col-md-4">
      <div class="card text-white bg-success mb-3">
       
        <div class="card-body">
          <h5 class="card-title" style="text-align:center;">Guest Entry</h5>
          <p class="card-text" style="text-align:center;">{{$guestens}}</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-white bg-danger mb-3">
       
        <div class="card-body">
          <h5 class="card-title" style="text-align:center;">Vehicle Entry</h5>
          <p class="card-text" style="text-align:center;">{{$vehis}}</p>
        </div>
      </div>
    </div>
    <br>
     <div class="card" id="xcard">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  
 <div class="card" id="xcard">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
   </div>

    @endsection