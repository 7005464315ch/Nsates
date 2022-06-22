<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NSATES</title>

    <!-- Bootstrap CSS -->
    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
<link rel="stylesheet" type="text/css" href="{{asset('asset/css/studeshx-stylesheet.css')}}">
<style type="text/css">
    .activesx{
        background: #4D5AA9;
    }

    .active {
     background: none; 
}
</style>
</head>

<body>
     <div class='dashboard'>
    <div class="dashboard-nav">
        <header>
          <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
          <a href="#"class="brand-logo"><i class="fas fa-anchor"></i> <span>Nsates</span></a>
        </header>
         
        <div class="row-1">
          <div class="img-box">
            <img src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg">
          </div>
          <h4 class="lab1">{{$datao->first_name}} {{$datao->middle_name}} {{$datao->last_name}}</h4>
          <h6 class="lab2">computer science engineering</h6>
        </div>

        <nav class="dashboard-nav-list">
          <a  href="{{url('studentdeshbord')}}" class="dashboard-nav-item {{Request::is('studentdeshbord')?'activesx':''}}"><i class="fas fa-home"></i> Dashboard </a>

          <a href="{{url('studententry')}}" class="dashboard-nav-item active {{Request::is('studententry')?'activesx':''}}"><i class="fas fa-tachometer-alt"></i> Student Entry</a>
          
          <a href="{{url('studentreport')}}" class="dashboard-nav-item {{Request::is('studentreport')?'activesx':''}}"><i class="fas fa-file-upload"></i> Entry Report </a>
          
          <a href="{{url('studentsetting')}}" class="dashboard-nav-item {{Request::is('studentsetting')?'activesx':''}}"><i class="fas fa-cogs"></i> Settings </a>
          
          <a href="{{url('studenthcenter')}}" class="dashboard-nav-item {{Request::is('studenthcenter','studenthreport','studentinbox')?'activesx':''}}"><i class="fas fa-user"></i> Help & Reviews </a>
          <div class="nav-item-divider"></div>
          
          <a href="{{url('stulogout')}}" class="dashboard-nav-item "><i class="fas fa-sign-out-alt"></i> Logout </a>
        </nav>
    </div>

    <div class='dashboard-app'>
      <header class='dashboard-toolbar'>
        <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
      <h5 style=" position: absolute; top: 29px; left: 88px;">Student Area</h5>
          <div class="card-row">
            <label>{{ session::get('current_code'); }}</label>
            <a href="{{url('studentprofile')}}">Profile</a>
          </div>
      </header>

        <div class='dashboard-content'>
            <div class='container'>
                @yield('contentrs')
            </div>
        </div>
    </div>
</div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript">
//     const $button  = document.querySelector('#sidebar-toggle');
// const $wrapper = document.querySelector('#wrapper');

// $button.addEventListener('click', (e) => {
//   e.preventDefault();
//   $wrapper.classList.toggle('toggled');
// });

const mobileScreen = window.matchMedia("(max-width: 990px )");
$(document).ready(function () {
    $(".dashboard-nav-dropdown-toggle").click(function () {
        $(this).closest(".dashboard-nav-dropdown")
            .toggleClass("show")
            .find(".dashboard-nav-dropdown")
            .removeClass("show");
        $(this).parent()
            .siblings()
            .removeClass("show");
    });
    $(".menu-toggle").click(function () {
        if (mobileScreen.matches) {
            $(".dashboard-nav").toggleClass("mobile-show");
        } else {
            $(".dashboard").toggleClass("dashboard-compact");
        }
    });
});
  </script>
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
</body>
</html>