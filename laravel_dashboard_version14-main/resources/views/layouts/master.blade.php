
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Dhiata Kediri</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{ URL::to('assets/images/favicon.ico') }}">
    <link href="{{ URL::to('../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <!-- DataTables -->
    <link href="{{ URL::to('../plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('../plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ URL::to('../plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ URL::to('../plugins/morris/morris.css') }}">
    <link href="{{ URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::to('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::to('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    {{-- message toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    @livewireStyles
        @stack('css')
</head>
<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{route('home')}}" class="logo">
                    <img src="{{ URL::to('assets/images/logo-light.png') }}" class="logo-lg" alt="" height="22">
                    <img src="{{ URL::to('assets/images/logo-sm.png') }}" class="logo-sm" alt="" height="24">
                </a>
            </div>
            <!-- Search input -->
            <div class="search-wrap" id="search-wrap">
                <div class="search-bar">
                    <input class="search-input" type="search" placeholder="Search" />
                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                        <i class="mdi mdi-close-circle"></i>
                    </a>
                </div>
            </div>
            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notification-list d-none d-md-inline-block">
                        <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                            <i class="fas fa-search noti-icon"></i>
                        </a>
                    </li>
                    <!-- language-->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ URL::to('assets/images/flags/us_flag.jpg') }}" class="mr-2" height="12" alt="" /> English <span class="mdi mdi-chevron-down"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated language-switch">
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="16" /><span> French </span></a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16" /><span> Spanish </span></a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg" alt="" height="16" /><span> Russian </span></a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="16" /><span> German </span></a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt="" height="16" /><span> Italian </span></a>
                        </div>
                    </li>
                    <!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="fas fa-expand noti-icon"></i>
                        </a>
                    </li>
                    <!-- notification -->
                    <!-- <li class="dropdown notification-list list-inline-item">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fas fa-bell noti-icon"></i>
                            <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                        </a> -->
                        <!-- <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1"> -->
                            <!-- item-->
                            <!-- <h6 class="dropdown-item-text">Notifications</h6>
                            <div class="slimscroll notification-item-list"> -->
                                <!-- item-->
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a> -->
                                <!-- item-->
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                </a> -->
                                <!-- item-->
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                    <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                </a> -->
                                <!-- item-->
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                </a> -->
                                <!-- item-->
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a> -->
                            <!-- </div> -->
                            <!-- All-->
                            <!-- <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">View all <i class="fi-arrow-right"></i></a> -->
                        <!-- </div>
                    </li> -->
                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ URL::to('assets/images/logo-light.png') }}" class="logo-lg" alt="" height="20">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet"></i> My Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> Lock screen</a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i class="mdi mdi-power text-danger"></i> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Top Bar End -->
        <!-- Left Sidebar Start -->
     <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Menu</li>
                    <li>
                        <a href="/dashboard" class="waves-effect">
                            <i class="dripicons-meter"></i><span class="badge badge-info badge-pill float-right"></span> <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect mm-active"><i class="dripicons-to-do"></i><span> Data Tersimpan<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li class="mm-active">
                                <a href="user/management">Data Tersimpan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i><span> Forms </span></a>
                        <ul class="submenu">
                            <li><a href="{{ route('form/information/new') }}">Information Input</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="waves-effect  mm-active"><i class="dripicons-list"></i><span> Reporting <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li class="mm-active">
                                <a href="{{ route('form/information/show') }}">Report Form Information</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidebar -left -->
    </div>
    <!-- Left Sidebar End -->
        <!-- content -->
        @yield('content')
        <!-- End content -->
    </div>
    <!-- END wrapper -->

   <!-- jQuery  -->
   <script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
   <script src="{{ URL::to('assets/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ URL::to('assets/js/metismenu.min.js') }}"></script>
   <script src="{{ URL::to('assets/js/jquery.slimscroll.js') }}"></script>
   <script src="{{ URL::to('assets/js/waves.min.js') }}"></script>
   
   <script src="{{ URL::to('../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::to('assets/js/paho-mqtt.js') }}"></script>
<script src="{{ URL::to('assets/js/util.js') }}"></script>
   <!-- Required datatable js -->
   <script src="{{ URL::to('../plugins/datatables/jquery.dataTables.min.js') }}"></script>
   <script src="{{ URL::to('../plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
   <!-- Buttons examples -->
   <script src="{{ URL::to('../plugins/datatables/dataTables.buttons.min.js') }}"></script>
   <script src="{{ URL::to('../plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
   <script src="{{ URL::to('../plugins/datatables/jszip.min.js') }}"></script>
   <script src="{{ URL::to('../plugins/datatables/pdfmake.min.js') }}"></script>
   <script src="{{ URL::to('../plugins/datatables/vfs_fonts.js') }}"></script>
   <script src="{{ URL::to('../plugins/datatables/buttons.html5.min.js') }}"></script>
   <script src="{{ URL::to('../plugins/datatables/buttons.print.min.js') }}"></script>
   <script src="{{ URL::to('../plugins/datatables/buttons.colVis.min.js') }}"></script>
   <!-- Responsive examples -->
   <script src="{{ URL::to('../plugins/datatables/dataTables.responsive.min.js') }}"></script>
   <script src="{{ URL::to('../plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!--Morris Chart-->
    <script src="{{ URL::to('../plugins/morris/morris.min.js') }}"></script>
    <script src="{{ URL::to('../plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::to('assets/pages/dashboard.init.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::to('assets/pages/datatables.init.js') }}"></script>

   <!-- App js -->
   <script src="{{ URL::to('assets/js/app.js') }}"></script>
   <main class="container py-5">
          
            <hr>
        </main>
        @livewireScripts
        @stack('js')
</body>
</html>