@extends('student.studesh')
   @section('contentrs')
   <body class="bg-light">
   
   <div class="container-fluid bg-white mb-4">
      <div class="container p-4 text-center">
         <h3 class="fw-bold mb-4">Hi {{$datao->first_name}}</h3>
         <div class="py-4">
            <p>Hello My Name is {{$datao->first_name}} {{$datao->middle_name}} {{$datao->last_name}}, Iam a
            {{$datao->department_name}} Student of North Eastern Regional Institute of Science and Technology (NERIST), Iam from {{$datao->state}} , {{$datao->country}}</p>
         </div>
      </div>
   </div>
   <div class="container py-4">
      <div class="row g-4 row-cols-1 row-cols-md-2 mb-4">
         <div class="col">
            <div class="card h-100 bg-info text-white">
               <div class="card-header pb-0">
                  <h3 class="fw-bold my-0">Total Entry File</h3>
               </div>
               <div class="card-body">

                      <h2 style="text-align: center; font-size: 50px;">{{$studentens}}</h2>

               </div>
               <div class="card-footer pt-0 bg-info text-white d-flex flex-row justify-content-between align-items-center">
                  <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center flex-grow-1">
                     <div class="me-4 d-flex flex-row justify-content-start align-items-center">
                        <i class="zmdi zmdi-time fs-4 pe-2"></i>
                        <span class="fw-bold">3 min</span>
                     </div>
                     <div class="d-flex flex-row justify-content-start align-items-center">
                        <i class="zmdi zmdi-share fs-4 pe-2"></i>
                        <span class="fw-bold">0 shares</span>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card h-100 bg-success text-white">
               <div class="card-header pb-0">
                  <h3 class="fw-bold my-0">Total Complaint Message</h3>
               </div>
               <div class="card-body">
                  <h2 style="text-align: center;font-size: 50px;">{{$studentens}}</h2>
               </div>
               <div class="card-footer pt-0 bg-success text-white d-flex flex-row justify-content-between align-items-center">
                  <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center flex-grow-1">
                     <div class="me-4 d-flex flex-row justify-content-start align-items-center">
                        <i class="zmdi zmdi-accounts-outline fs-4 pe-2"></i>
                        <span class="fw-bold">Get Started</span>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>

      <div class="card h-100 bg-konkon text-white mb-4 ex-card-gift">
         <div class="card-header pb-0">
            <h3 class="fw-bold my-0" style="color:#060000;">Information</h3>
         </div>
         <div class="card-body">
           <p style="color:#34375D;">Gate pass systems are used by companies for visitor and material management. The system is necessary to track and monitor the movement of materials, visitors and machines to and from your premises and ensures complete security.</p>
         </div>
         <div class="card-footer pt-0 text-white d-flex flex-row justify-content-between align-items-center">
            <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center flex-grow-1">
            </div>
            <div>
               <button class="btn btn-rounded bg-white text-konkon">More</button>
            </div>
         </div>
      </div>

      <div class="w-75 mx-auto py-1 mb-4">
         <hr class="my-1" />
      </div>

      <div class="row g-4 row-cols-1 row-cols-md-2 mb-4">
         <div class="col">
            <div class="card h-100">
               <div class="card-header pb-0 d-flex flex-row justify-content-start align-items-center">
                  <div class="bg-primary text-white ex-icon me-3">
                     <i class="zmdi zmdi-account"></i>
                  </div>
                  <h4 class="fw-bold my-0 flex-grow-1">Complaint as Official</h4>
               </div>
               <div class="card-body">
                  <p>Get instant answers to the most common questions and learn how to use</p>
               </div>
               <div class="card-footer pt-0 d-flex flex-row justify-content-start align-items-center">
                  <div class="me-2 flex-grow-1">
                  </div>
                  <div class="link-primary fw-bold"
                       style="cursor:pointer;">Sand</div>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card h-100">
               <div class="card-header pb-0 d-flex flex-row justify-content-start align-items-center">
                  <div class="bg-primary text-white ex-icon me-3">
                     <i class="zmdi zmdi-thumb-up"></i>
                  </div>
                  <h4 class="fw-bold my-0 flex-grow-1">Visit our Official website</h4>
               </div>
               <div class="card-body">
                  <p>Main of Site</p>
                  <input type="link" name="" placeholder="https://www.nerist.ac.in/" readonly="" />
                  <a href="https://www.nerist.ac.in/">Go</a>
                  <p class="card-text">Enjoy using our sevices? Why not leave us a like and follow on Twitter and YouTube.</p>
               </div>
               <div class="card-footer pt-0 d-flex flex-row justify-content-end align-items-center">
                  <a href="#"
                     class="btn btn-sm btn-outline-danger fw-bold me-1">YouTube</a>
                  <a href="#"
                     class="btn btn-sm btn-outline-info fw-bold">Twitter</a>
               </div>
            </div>
         </div>
      </div>

   </div>
   
   <div class="container-fluid bg-white border-top">
      <footer class="container pt-4">
         
         <p class="text-muted small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
         
         <p class="py-3 border-top mb-0">
            <a href="#"
               class="text-muted text-decoration-none">Company Name</a>
            <span class="text-muted"> &copy; 2021</span>
         </p>
         
      </footer>
   </div>
   
</body>
     @endsection