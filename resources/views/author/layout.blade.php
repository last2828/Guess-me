<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Dashboard One | Notika - Notika Admin Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
  ============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
  <!-- Google Fonts
  ============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
  ============================================ -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <!-- font awesome CSS
  ============================================ -->
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <!-- owl.carousel CSS
  ============================================ -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
  <!-- meanmenu CSS
  ============================================ -->
  <link rel="stylesheet" href="{{asset('css/meanmenu/meanmenu.min.css')}}">
  <!-- animate CSS
  ============================================ -->
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <!-- normalize CSS
  ============================================ -->
  <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
  <!-- mCustomScrollbar CSS
  ============================================ -->
  <link rel="stylesheet" href="{{asset('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
  <!-- jvectormap CSS
  ============================================ -->
  <link rel="stylesheet" href="{{asset('css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
  <!-- notika icon CSS
  ============================================ -->
  <link rel="stylesheet" href="{{asset('css/notika-custom-icon.css')}}">
  <!-- wave CSS
  ============================================ -->
  <link rel="stylesheet" href="{{asset('css/wave/waves.min.css')}}">
  <!-- main CSS
  ============================================ -->
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <!-- style CSS
  ============================================ -->
  <link rel="stylesheet" href="{{asset('style.css')}}">
  <!-- responsive CSS
  ============================================ -->
  <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
  <!-- modernizr JS
  ============================================ -->
  <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
  @yield('stylesheets')

</head>
<body>
<!--[if lt IE 8]>
           <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
       <![endif]-->

<!-- Start Header Top Area -->
<div class="header-top-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="logo-area">
          <a href="{{route('dashboard')}}"><img src="{{asset('img/logo/logo-2.svg')}}" width="60%" alt="" /></a>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="header-top-menu nav navbar-nav notika-top-nav">
          <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="btn btn-danger notika-btn-danger">Sign Out</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Header Top Area -->
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="mobile-menu">
          <nav id="dropdown">
            <ul class="mobile-menu-nav">
              {{--<li><a data-toggle="collapse" href="{{route('dashboard')}}">Home</a>--}}
              {{--</li>--}}
              <li><a data-toggle="collapse" href="{{route('quests.index')}}">Quests</a>
              </li>
              <li><a data-toggle="collapse" href="#">Statistic</a>
              </li>
              <li><a data-toggle="collapse" href="#">Account</a>
              </li>
              <li><a data-toggle="collapse" href="#">Support</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
          {{--<li><a href="{{route('dashboard')}}"><i class="notika-icon notika-house"></i> Home</a>--}}
          {{--</li>--}}
          <li><a data-toggle="tab" href="#Quests"><i class="notika-icon notika-app"></i> Quests</a>
          </li>
          <li><a href="#"><i class="notika-icon notika-mail"></i> Statistic</a>
          </li>
          <li><a data-toggle="tab" href="{{route('profile.show')}}"><i class="notika-icon notika-support"></i> Account</a>
          </li>
          <li><a data-toggle="tab" href="#"><i class="notika-icon notika-mail"></i> Support</a>
          </li>
        </ul>
        <div class="tab-content custom-menu-content">
          <div id="Quests" class="tab-pane in notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
              <li><a href="{{route('quests.index')}}">List</a>
              </li>
              <li><a href="{{route('quests.create')}}">New Quest</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Main Menu area End-->

@yield('content')

<!-- Start Footer area-->
<div class="footer-copyright-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="footer-copy-right">
          <p>Copyright © 2020
            . All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Footer area-->
<!-- jquery
============================================ -->
<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap JS
============================================ -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- wow JS
============================================ -->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- price-slider JS
============================================ -->
<script src="{{asset('js/jquery-price-slider.js')}}"></script>
<!-- owl.carousel JS
============================================ -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- scrollUp JS
============================================ -->
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<!-- meanmenu JS
============================================ -->
<script src="{{asset('js/meanmenu/jquery.meanmenu.js')}}"></script>
<!-- counterup JS
============================================ -->
<script src="{{asset('js/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/counterup/waypoints.min.js')}}"></script>
<script src="{{asset('js/counterup/counterup-active.js')}}"></script>
<!-- mCustomScrollbar JS
============================================ -->
<script src="{{asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- jvectormap JS
============================================ -->
<script src="{{asset('js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('js/jvectormap/jvectormap-active.js')}}"></script>
<!-- sparkline JS
============================================ -->
<script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('js/sparkline/sparkline-active.js')}}"></script>
<!-- sparkline JS
============================================ -->
<script src="{{asset('js/flot/jquery.flot.js')}}"></script>
<script src="{{asset('js/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('js/flot/curvedLines.js')}}"></script>
<script src="{{asset('js/flot/flot-active.js')}}"></script>
<!-- knob JS
============================================ -->
<script src="{{asset('js/knob/jquery.knob.js')}}"></script>
<script src="{{asset('js/knob/jquery.appear.js')}}"></script>
<script src="{{asset('js/knob/knob-active.js')}}"></script>
<!--  wave JS
============================================ -->
<script src="{{asset('js/wave/waves.min.js')}}"></script>
<script src="{{asset('js/wave/wave-active.js')}}"></script>
<!--  todo JS
============================================ -->
<script src="{{asset('js/todo/jquery.todo.js')}}"></script>
<!-- plugins JS
============================================ -->
<script src="{{asset('js/plugins.js')}}"></script>
<!-- main JS
============================================ -->
<script src="{{asset('js/main.js')}}"></script>
@yield('scripts')


</body>

</html>