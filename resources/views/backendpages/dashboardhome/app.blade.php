<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>
        @yield('title')
    </title>
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}">
    <!--Chartist Chart CSS -->
    <link rel="stylesheet" href="../plugins/chartist/css/chartist.min.css">
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left"><a href="{{route('dashboard')}}" class="logo"><span><<img src="{{asset('frontend/assets/images/logo.png')}}" alt="Logo"
                            alt="" height="30"> </span><i><img src="{{asset('backend/assets/images/logo-sm.png')}}" alt=""
                            height="22"></i></a></div>
            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">
                                      
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block"><a
                            class="nav-link waves-effect" href="#" id="btn-fullscreen"><i
                                class="mdi mdi-fullscreen noti-icon"></i></a></li><!-- notification -->
                    <li class="dropdown notification-list list-inline-item"><a
                            class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false"><i
                                class="mdi mdi-bell-outline noti-icon"></i> <span
                                class="badge badge-pill badge-danger noti-icon-badge">{{(App\Reservation::all()->count())}}</span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">Notifications (258)</h6>
                            <div class="slimscroll notification-item-list">
                                <!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of
                                            the printing and typesetting industry.</span></p>
                                </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message-text-outline"></i>
                                    </div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87
                                            unread messages</span></p>
                                </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                    <p class="notify-details">Your item is shipped<span class="text-muted">It is a long
                                            established fact that a reader will</span></p>
                                </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of
                                            the printing and typesetting industry.</span></p>
                                </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i>
                                    </div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87
                                            unread messages</span></p>
                                </a></div><!-- All--> <a href="javascript:void(0);"
                                class="dropdown-item text-center text-primary">View all <i
                                    class="fi-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img"><a
                                class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false"><img
                                    src="{{asset('uploads/users')}}/{{ Auth::user()->user_photo }}" alt="user" class="rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item--> <a class="dropdown-item" href="#"><i
                                        class="mdi mdi-account-circle m-r-5"></i>{{ Auth::user()->name }}</a> 
                                <div class="dropdown-divider"></div>
                                
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                <i class="mdi mdi-power text-danger"></i> 

                                        Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div><!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Main</li>
                        @if(Auth::user()->role_id == 1)
                        <li><a href="{{route('dashboard')}}" class="waves-effect"><i class="ti-home"></i><span
                                    class="badge badge-primary badge-pill float-right"></span>
                                <span>Admin Dashboard</span></a></li>

                        <li><a href="{{route('user')}}" class="waves-effect"><i class="ti-user"></i><span>Manage Users</span></a></li>
                        

                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-shopping-cart-full"></i><span>Manage Orders<span class="float-right menu-arrow"><i
                                            class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                        <li><a href="{{route('reservation_view')}}" class="waves-effect"><i></i><span>New Order Placed</span></a></li>
                        <li><a href="{{route('assign_order')}}" class="waves-effect"><i></i><span>Assign Order</span></a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('status_index')}}" class="waves-effect"><i class="ti-alarm-clock"></i><span>Manage Status</span></a></li>
                        <li><a href="{{route('role_index')}}" class="waves-effect"><i class="ti-id-badge"></i><span>Manage Role</span></a></li>
                        <li><a href="{{route('add_price')}}" class="waves-effect"><i class="ti-id-badge"></i><span>Manage Price List</span></a></li>

                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-shopping-cart-full"></i><span>Static Website<span class="float-right menu-arrow"><i
                                            class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                        <li><a href="{{route('about_us')}}" class="waves-effect"><i class="ti-book"></i><span>AboutUs</span></a></li>
                        <li><a href="{{route('team_member')}}" class="waves-effect"><i class="ti-id-badge"></i><span>Team Member</span></a></li>
                        <li><a href="{{route('contact_messages')}}" class="waves-effect"><i class="ti-email"></i><span>Contact Messages</span></a></li>

                            </ul>
                        </li>

                        
                        

                    @endif    

@if(Auth::user()->role_id == 2)
<li><a href="{{route('dashboard')}}" class="waves-effect"><i class="ti-home"></i><span
                                    class="badge badge-primary badge-pill float-right"></span>
                                <span>Customer Dashboard</span></a></li>

<li><a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i><span> Email
                                    <span class="float-right menu-arrow"><i
                                            class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="email-inbox.html">Inbox</a></li>
                                <li><a href="email-read.html">Email Read</a></li>
                                <li><a href="email-compose.html">Email Compose</a></li>
                            </ul>
                        </li>
@endif


@if(Auth::user()->role_id == 3)
<li><a href="{{route('dashboard')}}" class="waves-effect"><i class="ti-home"></i><span
                                    class="badge badge-primary badge-pill float-right"></span>
                                <span>Employee Dashboard</span></a></li>

<li><a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i><span> Email
                                    <span class="float-right menu-arrow"><i
                                            class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="email-inbox.html">Inbox</a></li>
                                <li><a href="email-read.html">Email Read</a></li>
                                <li><a href="email-compose.html">Email Compose</a></li>
                            </ul>
                        </li>
@endif


                        
                        


                                                
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>


        
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
                <div class="content">




                @yield('content')
                @include('sweetalert::alert')






                </div><!-- container-fluid -->
        </div><!-- content -->



            <footer class="footer">© 2019 @ EasyLiving <span class="d-none d-sm-inline-block">- Developed <i
                        class="mdi mdi-heart text-danger"></i> by <a href="http://mahabubazam.me/"> Mahabub Azam</a></span>.</footer>
        </div><!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div><!-- END wrapper -->
    <!-- jQuery  -->
    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('backend/assets/js/waves.min.js')}}"></script>
    <!--Chartist Chart-->
    <script src="../plugins/chartist/js/chartist.min.js"></script>
    <script src="../plugins/chartist/js/chartist-plugin-tooltip.min.js"></script><!-- peity JS -->
    <script src="../plugins/peity-chart/jquery.peity.min.js"></script>
    <script src="{{asset('backend/assets/pages/dashboard.js')}}"></script><!-- App js -->
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
    <script>
    @include('sweetalert::alert')
    </script>
</body>

</html>