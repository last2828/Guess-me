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
  <!-- meanmenu CSS
  ============================================ -->
  <link rel="stylesheet" href="{{asset('css/meanmenu/meanmenu.min.css')}}">
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
            <button class="btn btn-danger notika-btn-danger">Выйти</button>
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
              <li><a data-toggle="collapse" href="{{route('quests.index')}}">Квесты</a>
              </li>
              <li><a data-toggle="collapse" href="#">Статистика</a>
              </li>
              <li><a data-toggle="collapse" href="#">Профиль</a>
              </li>
              <li><a data-toggle="collapse" href="#">Помощь</a>
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
          <li><a href="{{route('quests.index')}}"><i class="notika-icon notika-app"></i> Квесты</a>
          </li>
          <li><a href="{{route('profile.show')}}"><i class="notika-icon notika-support"></i> Профиль</a>
          </li>
          <li><a href="#"><i class="notika-icon notika-mail"></i> Помощь</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Main Menu area End-->
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcomb-list">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="breadcomb-wp">
                <div class="breadcomb-icon">
                  <i class="notika-icon notika-windows"></i>
                </div>
                <div class="breadcomb-ctn">
                  <h2>Normal Table</h2>
                  <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
              <div class="breadcomb-report">
                <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcomb area End-->

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
{{--<script src="{{asset('js/wow.min.js')}}"></script>--}}
<!-- price-slider JS
============================================ -->
{{--<script src="{{asset('js/jquery-price-slider.js')}}"></script>--}}
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