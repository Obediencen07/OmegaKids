<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="GeeksLabs">
  <link rel="shortcut icon" href="{{ asset('img/favicon.png')}}">

  <title>Omega Kids</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}" type="text/css">
  <link href="{{ asset('css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('css/fullcalendar.css')}}">
  <link href="{{ asset('css/widgets.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{ asset('css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Welcome</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">




          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <!-- <img alt="" src="img/avatar1_small.jpg"> -->
                            </span>
                            <span class="username">{{ Auth::user()->name }} </span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="#">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Register</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="kids/create">Kids</a></li>
              <li><a class="" href="hbf/create">HBF</a></li>
              <li><a class="" href="#">Teachers</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Reports</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="general.html">Attended per week</a></li>
              <li><a class="" href="buttons.html">Attended per Month</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Classes</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="classe/create">Add Class </a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Lists</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="kids">Kids</a></li>
                <li><a class="" href="hbf">HBF</a></li>
                  <li><a class="" href="#">Teachers</a></li>
            </ul>

          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user"></i> Dashboard</h3>
          </div>
        </div>
        @yield('content')


          </div>
          <!--/.col-->

  <!-- <p>Add table</p> -->


      </section>

    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="{{ asset('js/jquery.js')}}"></script>
  <script src="{{ asset('js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{ asset('js/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{ asset('js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{ asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{ asset('assets/jquery-knob/js/jquery.knob.js')}}"></script>
  <script src="{{ asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
  <script src="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <script src="{{ asset('js/owl.carousel.js')}}"></script>
  <!-- jQuery full calendar -->
  <<script src="{{ asset('js/fullcalendar.min.js')}}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{ asset('js/calendar-custom.js')}}"></script>
    <script src="{{ asset('js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{ asset('js/jquery.customSelect.min.js')}}"></script>
    <script src="{{ asset('assets/chart-master/Chart.js')}}"></script>

    <!--custome script for all page-->
    <script src="{{ asset('js/scripts.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{ asset('js/sparkline-chart.js')}}"></script>
    <script src="{{ asset('js/easy-pie-chart.js')}}"></script>
    <script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('js/xcharts.min.js')}}"></script>
    <script src="{{ asset('js/jquery.autosize.min.js')}}"></script>
    <script src="{{ asset('js/jquery.placeholder.min.js')}}"></script>
    <script src="{{ asset('js/gdp-data.js')}}"></script>
    <script src="{{ asset('js/morris.min.js')}}"></script>
    <script src="{{ asset('js/sparklines.js')}}"></script>
    <script src="{{ asset('js/charts.js')}}"></script>
    <script src="{{ asset('js/jquery.slimscroll.min.js')}}"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
