<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('')}}/assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SPK</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{url('')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{url('')}}/assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{url('')}}/assets/css/demo.css" rel="stylesheet" />
</head>

<body>
<div class="wrapper">
    <div class="sidebar green">

        <div class="sidebar-wrapper" style="background-color: #ffaaa7e7;">
            <div class="logo">
                <a href="{{ route('dashboard') }}" class="simple-text">
                    SPK
                </a>
            </div>
            <ul class="nav">
                <li>
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="nc-icon nc-chart-pie-35"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if (Auth::user() && Auth::user()->role_name == 'admin')

                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                @endif

                {{--                <li>--}}
                {{--                    <a class="nav-link" href="{{ route('alternative.index') }}">--}}
                {{--                        <i class="nc-icon nc-paper-2"></i>--}}
                {{--                        <p>Alternative</p>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                @if (Auth::user() && Auth::user()->role_name == 'admin')
                    <li>
                        <a class="nav-link" href="{{ route('kriteria.index') }}">
                            <i class="nc-icon nc-atom"></i>
                            <p>Kriteria</p>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dataawal.index') }}">
                        <i class="nc-icon nc-notes"></i>
                        <p>Matriks</p>
                    </a>
                </li>
                @if (Auth::user() && Auth::user()->role_name == 'admin')

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('analisa.index') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Hasil Analisa</p>
                        </a>
                    </li>
                @endif
                @if (Auth::user() && Auth::user()->role_name == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('normalisasi.index') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Normalisasi</p>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hasilakhir.index') }}">
                        <i class="nc-icon nc-notes"></i>
                        <p>Hasil Akhir</p>
                    </a>
                </li>
                <li class="nav-item active active-pro">
                    <a class="nav-link active" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                        <i class="nc-icon nc-button-power"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg" color-on-scroll="500">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"> @yield('page') </a>
                <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">

                    <ul class="navbar-nav ml-auto" style="background-color: #FFD3B4">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                <span class="no-icon">Log out</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content" >
            @yield('content')
        </div>

    </div>
</div>

</body>
<!--   Core JS Files   -->
<script src="{{url('')}}/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{url('')}}/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{url('')}}/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{url('')}}/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{url('')}}/assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{url('')}}/assets/js/demo.js"></script>

</html>
