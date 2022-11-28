<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Administrator Login' }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('admin/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/weather-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" type="text/javascript"></script>
    
</head>
<body>
    <!-- /# sidebar -->
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo">
                        <a href="">
                            <img src="{{URL::asset('admin/images/logo.png')}}" alt="" /><br/>
                            <span>{{ __('Leads Managment') }} </span>
                        </a>
                    </div>
					<li>
						<a href="{{route('admindashboard')}}"><i class="ti-home"></i>{{ __('Dashboard') }} </a>
					</li>
					<li>
						<a href="{{route('leads')}}"><i class="ti-user"></i>{{ __('Leads') }} </a>
					</li>
					
                    <li><a href="{{route('adminlogout')}}"><i class="ti-power-off"></i> {{ __('Logout') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <!-- /# header -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">Admin
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);"onclick="location.href='{{route('adminlogout')}}'"><i class="ti-power-off"></i> {{ __('Logout') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /# header -->
    <div class="content-wrap">
        <main class="py-4">
            @yield('content')
        </main>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer">
                    <p> Design and Developed by Maharaj Singh</p>
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript">
    
$(document).ready(function() {

    // Get current page URL
    var url = window.location.href;

    // remove # from URL
    url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));

    // remove parameters from URL
    url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));

    // Loop all menu items
    $('.menu li').each(function() {

        // select href
        var href = $(this).find('a').attr('href');

        // Check filename
        if (url == href) {

            // Select parent class
            var parentClass = $(this).parent('ul').attr('class');

            if (parentClass == 'submenu') {

                // Add class
                $(this).addClass('subactive');
                $(this).parents('.menu li').addClass('active');
            } else {

                // Add class
                $(this).addClass('active');
            }

        }
    });
});

</script>

<!-- jquery vendor -->
<script src="{{ asset('admin/js/lib/jquery.nanoscroller.min.js') }}" defer></script>

<!-- nano scroller -->
<script src="{{ asset('admin/js/lib/menubar/sidebar.js') }}" defer></script>
<script src="{{ asset('admin/js/lib/preloader/pace.min.js') }}" defer></script>
<!-- sidebar -->

<script src="{{ asset('admin/js/lib/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('admin/js/scripts.js') }}" defer></script>
<!-- bootstrap -->

<script src="{{ asset('admin/js/lib/calendar-2/moment.latest.min.js') }}" defer></script>
<script src="{{ asset('admin/js/lib/calendar-2/pignose.calendar.min.js') }}" defer></script>
<script src="{{ asset('admin/js/lib/calendar-2/pignose.init.js') }}" defer></script>

<script src="{{ asset('admin/js/lib/weather/jquery.simpleWeather.min.js') }}" defer></script>
<script src="{{ asset('admin/js/lib/weather/weather-init.js') }}" defer></script>
<script src="{{ asset('admin/js/lib/circle-progress/circle-progress.min.js') }}" defer></script>
<script src="{{ asset('admin/js/lib/circle-progress/circle-progress-init.js') }}" defer></script>
<script src="{{ asset('admin/js/lib/chartist/chartist.min.js') }}" defer></script>
<script src="{{ asset('admin/js/lib/sparklinechart/jquery.sparkline.min.js') }}" defer></script>
<script src="{{ asset('admin/js/lib/sparklinechart/sparkline.init.js') }}" defer></script>
<script src="{{ asset('admin/js/lib/owl-carousel/owl.carousel.min.js') }}" defer></script>
<script src="{{ asset('admin/js/lib/owl-carousel/owl.carousel-init.js') }}" defer></script>
<!-- scripit init-->
<script src="{{ asset('admin/js/dashboard2.js') }}" defer></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


</body>
</html>
