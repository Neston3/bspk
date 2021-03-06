<!DOCTYPE html>
<html lang="en">

<head>
    <title>BLUU TECH</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("APOTEk2.ico")}}">
    <!-- range slider -->
    <link rel="stylesheet" href="{{asset("plugins/range-slider/css/bootstrap-slider.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/pages/rangeslider.css")}}">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{asset("fonts/fontawesome/css/fontawesome-all.min.css")}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset("plugins/animation/css/animate.min.css")}}">
    <!-- notification css -->
    <link rel="stylesheet" href="{{asset("plugins/notification/css/notification.min.css")}}">
    <!-- data tables css -->
    <link rel="stylesheet" href="{{asset("plugins/data-tables/css/datatables.min.css")}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset("css/style_2.css")}}">
    <!-- select2 css -->
    <link rel="stylesheet" href="{{asset("plugins/select2/css/select2.min.css")}}">
    <!-- multi-select css -->
    <link rel="stylesheet" href="{{asset("plugins/multi-select/css/multi-select.css")}}">
    <!-- tel-input css -->
    <link rel="stylesheet" href="{{asset("plugins/intl-tel-input/css/intlTelInput.css")}}">
    <!-- Datepicker css -->
    <link href="{{asset("plugins/bootstrap-datetimepicker/css/prettify.css")}}" rel="stylesheet">
    <link href="{{asset("plugins/bootstrap-datetimepicker/css/bootstrap-datepicker3.min.css")}}"
          rel="stylesheet">
    <link href="{{asset("plugins/daterangepicker-master/css/daterangepicker.css")}}" rel="stylesheet">

    @yield("page_css")


    <style>
        .select2-container .select2-selection--single {
            height: 43px !important;
            background-color: #f4f7fa !important;
            border: 1px solid #ced4da;
        }

        .select2-selection__rendered {
            line-height: 43px !important;
        }

        .select2-selection__arrow {
            height: 43px !important;
        }

        table.dataTable tbody th, table.dataTable tbody td {
            padding: 4px 10px; /* e.g. change 8x to 4px here */
        }

        a.dfn-hover {
            color: #333;
            text-decoration: none;
        }

        /** Code for hover info **/

        dfn {
            /*background: #e9e9e9;*/
            border-bottom: dashed 0px rgba(0, 0, 0, 0.8);
            padding: 0 0.4em;
            cursor: help;
            font-style: normal;
            position: relative;

        }

        dfn::after {
            content: attr(data-info);
            display: inline;
            position: absolute;
            top: 22px;
            left: 0;
            opacity: 0;
            width: 230px;
            font-size: 13px;
            font-weight: 700;
            line-height: 1.5em;
            padding: 0.5em 0.8em;
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            pointer-events: none; /* This prevents the box from apearing when hovered. */
            transition: opacity 250ms, top 250ms;
        }

        dfn::before {
            content: '';
            display: block;
            position: absolute;
            top: 12px;
            left: 20px;
            opacity: 0;
            width: 0;
            height: 0;
            border: solid transparent 5px;
            border-bottom-color: rgba(0, 0, 0, 0.8);
            transition: opacity 250ms, top 250ms;
        }

        dfn:hover {
            z-index: 2;
        }

        /* Keeps the info boxes on top of other elements */
        dfn:hover::after,
        dfn:hover::before {
            opacity: 1;
        }

        dfn:hover::after {
            top: 30px;
        }

        dfn:hover::before {
            top: 20px;
        }

        .badge-notify {
            text-decoration-color: #FFFFFF;
            background: red;
            border-radius: 50%;
            position: relative;
            top: -15px;
            left: 30px;
        }

    </style>


</head>

<body>


<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar brand-red  active-red menu-item-icon-style4 icon-colored">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="{{route('home')}}" class="b-brand">
                {{-- <div class="b-bg"> --}}
                {{-- </div> --}}
                <span class="b-title">BLUU TECH</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">

                @include('layouts.menu')

            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->

<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light">

    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
        <a href="index.html" class="b-brand">
            <div class="b-bg">
                <i class="feather icon-trending-up"></i>
            </div>
            <span class="b-title">APOTEk</span>
        </a>
    </div>
    <a class="mobile-menu" id="mobile-header" href="#!">
        <i class="feather icon-more-horizontal"></i>
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li><a href="#!" class="full-screen" onclick="toggleFullScreen()"><i class="feather icon-maximize"></i></a>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown">

                </div>
            </li>
            <li>
                <div class="dropdown">

                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                            class="icon feather icon-bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-right notification">
                        <div class="noti-head">
                            <h6 class="d-inline-block m-b-0">Notifications</h6>
                            <div class="float-right">
                                <a href="#!" id="mark_as_read" class="m-r-10">mark as read</a>
                                {{--                                <a href="#!">clear all</a>--}}
                            </div>
                        </div>
                        <ul class="noti-body" id="notification">

                        </ul>

                    </div>
                </div>
            </li>

            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon feather icon-settings"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            {{-- <img src="images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image"> --}}
                            <span>
                                    {{Auth::user()->name}}
                                </span>

                            <a href="{{ route('logout') }}" class="dud-logout" title="Logout"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="feather icon-log-out"></i>

                            </a>

                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <ul class="pro-body">

                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
<!-- [ Header ] end -->
<!-- [ chat user list ] start -->
<section class="header-user-list">
    <div class="h-list-header">
        <div class="input-group">
            <input type="text" id="search-friends" class="form-control" placeholder="Search Friend . . .">
        </div>
    </div>
    <div class="h-list-body">
        <a href="#!" class="h-close-text"><i class="feather icon-chevrons-right"></i></a>
        <div class="main-friend-cont scroll-div">
            <div class="main-friend-list">

            </div>
        </div>
    </div>
</section>
<!-- [ chat user list ] end -->

<!-- [ chat message ] start -->
<section class="header-chat">
    <div class="h-list-header">
        <h6>Beatus K</h6>
        <a href="#!" class="h-back-user-list"><i class="feather icon-chevron-left"></i></a>
    </div>
    <div class="h-list-body">
        <div class="main-chat-cont scroll-div">

        </div>
    </div>

</section>
<!-- [ chat message ] end -->


<!-- [ Main Content ] start -->
<div class="pcoded-main-container" style="margin-top: -4%">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">
                                        @yield("content-title")
                                    </h5>
                                </div>
                                <ul class="breadcrumb">
                                    @yield("content-sub-title")

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-wrapper">
                    <!-- [ Main Content ] start -->
                    <div class="row">
                        <!-- [ static-layout ] start -->
                    @yield("content")
                    <!-- [ static-layout ] end -->
                    </div>
                    <!-- [ Main Content ] end -->
                </div>
                <!-- [ breadcrumb ] end -->

            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->


<!-- Required Js -->
<script src="{{asset("js/vendor-all.min.js")}}"></script>
<script src="{{asset("plugins/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/pcoded.min.js")}}"></script>
<!-- notification Js -->
<script src="{{asset("plugins/notification/js/bootstrap-growl.min.js")}}"></script>

<!-- datatable Js -->
<script src="{{asset("plugins/data-tables/js/datatables.min.js")}}"></script>
<script src="{{asset("js/pages/tbl-datatable-custom.js")}}"></script>

<!-- select2 Js -->
<script src="{{asset("plugins/select2/js/select2.full.min.js")}}"></script>

<!-- multi-select Js -->
<script src="{{asset("plugins/multi-select/js/jquery.quicksearch.js")}}"></script>
<script src="{{asset("plugins/multi-select/js/jquery.multi-select.js")}}"></script>

<!-- form-select-custom Js -->
<script src="{{asset("js/pages/form-select-custom.js")}}"></script>

<!-- Input mask Js -->
<script src="{{asset("plugins/inputmask/js/inputmask.min.js")}}"></script>
<script src="{{asset("plugins/inputmask/js/jquery.inputmask.min.js")}}"></script>
<script src="{{asset("plugins/inputmask/js/autoNumeric.js")}}"></script>
<!-- tel-input js -->
<script src="{{asset("plugins/intl-tel-input/js/intlTelInput.js")}}"></script>
<!-- moment js -->
<script src="{{asset("plugins/moment/js/moment.js")}}"></script>
<!-- daterangepicker js -->
<script src="{{asset("plugins/daterangepicker-master/js/daterangepicker.js")}}"></script>


{{-- custom java scripts for the page --}}

{{-- <script src="{{asset("apotek/js/scheduling.js")}}"></script> --}}



@stack("page_scripts")

</body>
</html>
