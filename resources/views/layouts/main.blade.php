<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/agroxa/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 07:26:16 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
    <title>Agroxa - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">


</head>

<body>


<div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo"><span
                            ><img
                                src="{{ asset('images/logo.png') }}"
                                alt=""
                                height="24"
                            /> </span
                        ><i
                            ><img
                                src="{{ asset('images/logo-sm.png') }}"
                                alt=""
                                height="22" /></i
                    ></a>
            </div>
            <nav class="navbar-custom">
                <ul class="navbar-right d-flex list-inline float-right mb-0">
                    <li class="dropdown notification-list d-none d-sm-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Search.." />
                                <button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                            </div>
                        </form>
                    </li>
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mdi mdi-bell noti-icon"></i>
                                <span
                                    class="badge badge-pill badge-info noti-icon-badge"
                                    >3</span
                                ></a
                            >
                            <div
                                class="dropdown-menu dropdown-menu-right dropdown-menu-lg"
                            >
                                <!-- item-->
                                <h6 class="dropdown-item-text">
                                    Notifications (37)
                                </h6>
                                <div class="slimscroll notification-item-list">
                                    <!-- item-->
                                    <a
                                        href="javascript:void(0);"
                                        class="dropdown-item notify-item active"
                                        ><div class="notify-icon bg-success">
                                            <i class="mdi mdi-cart-outline"></i>
                                        </div>
                                        <p class="notify-details">
                                            Your order is placed<span
                                                class="text-muted"
                                                >Dummy text of the printing and
                                                typesetting industry.</span
                                            >
                                        </p></a
                                    ><!-- item-->
                                    <a
                                        href="javascript:void(0);"
                                        class="dropdown-item notify-item"
                                        ><div class="notify-icon bg-warning">
                                            <i class="mdi mdi-message"></i>
                                        </div>
                                        <p class="notify-details">
                                            New Message received<span
                                                class="text-muted"
                                                >You have 87 unread
                                                messages</span
                                            >
                                        </p></a
                                    ><!-- item-->
                                    <a
                                        href="javascript:void(0);"
                                        class="dropdown-item notify-item"
                                        ><div class="notify-icon bg-info">
                                            <i class="mdi mdi-flag"></i>
                                        </div>
                                        <p class="notify-details">
                                            Your item is shipped<span
                                                class="text-muted"
                                                >It is a long established fact
                                                that a reader will</span
                                            >
                                        </p></a
                                    ><!-- item-->
                                    <a
                                        href="javascript:void(0);"
                                        class="dropdown-item notify-item"
                                        ><div class="notify-icon bg-primary">
                                            <i class="mdi mdi-cart-outline"></i>
                                        </div>
                                        <p class="notify-details">
                                            Your order is placed<span
                                                class="text-muted"
                                                >Dummy text of the printing and
                                                typesetting industry.</span
                                            >
                                        </p></a
                                    ><!-- item-->
                                    <a
                                        href="javascript:void(0);"
                                        class="dropdown-item notify-item"
                                        ><div class="notify-icon bg-danger">
                                            <i class="mdi mdi-message"></i>
                                        </div>
                                        <p class="notify-details">
                                            New Message received<span
                                                class="text-muted"
                                                >You have 87 unread
                                                messages</span
                                            >
                                        </p></a
                                    >
                                </div>
                                <!-- All-->
                                <a
                                    href="javascript:void(0);"
                                    class="dropdown-item text-center text-primary"
                                    >View all <i class="fi-arrow-right"></i
                                ></a>
        </div>
        </li>
        <li class="dropdown notification-list">
            <div class="dropdown notification-list nav-pro-img">
                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle" /></a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i
                                            class="mdi mdi-account-circle m-r-5"
                                        ></i>
                                        Profile</a
                                    >
                                    <a class="dropdown-item" href="#"
                                        ><i class="mdi mdi-wallet m-r-5"></i> My
                                        Wallet</a
                                    >
                                    <a class="dropdown-item d-block" href="#"
                                        ><span
                                            class="badge badge-success float-right"
                                            >11</span
                                        ><i class="mdi mdi-settings m-r-5"></i>
                                        Settings</a
                                    >
                                    <a class="dropdown-item" href="#"
                                        ><i
                                            class="mdi mdi-lock-open-outline m-r-5"
                                        ></i>
                                        Lock screen</a
                                    >
                                    <div class="dropdown-divider"></div>
                                    <a
                                        class="dropdown-item text-danger"
                                        href="#"
                                        ><i
                                            class="mdi mdi-power text-danger"
                                        ></i>
                                        Logout</a
                                    >
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button
                                class="button-menu-mobile open-left waves-effect waves-light"
                            >
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="d-none d-sm-block">
                            <div class="dropdown pt-3 d-inline-block">
                                <a
                                    class="btn btn-header waves-effect waves-light dropdown-toggle"
                                    href="#"
                                    role="button"
                                    id="dropdownMenuLink"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    >Create New</a
                                >
                                <div
                                    class="dropdown-menu"
                                    aria-labelledby="dropdownMenuLink"
                                >
                                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a
                                    >
                                    <a class="dropdown-item" href="#"
                                        >Something else here</a
                                    >
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"
                                        >Separated link</a
                                    >
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Sidebar -left -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="{{ URL('/') }}" class="waves-effect"
                                    ><i class="mdi mdi-home"></i
                                    ><span
                                        class="badge badge-primary float-right"
                                        >3</span
                                    >
                                    <span>Dashboard</span></a
                                >
                            </li>

                            <li>
                                <a
                                    href="javascript:void(0);"
                                    class="waves-effect"
                                    ><i class="mdi mdi-clipboard"></i
                                    ><span>
                                        Projects
                                        <span
                                            class="badge badge-success float-right"
                                            >6</span
                                        ></span
                                    ></a
                                >
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ url('project/index') }}"
                                            >Project List</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{ url('project/create') }}"
                                            >Add Project</a
                                        >
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0);"
                                    class="waves-effect"
                                    ><i class="mdi mdi-clipboard"></i
                                    ><span>
                                        Materials
                                        <span
                                            class="badge badge-success float-right"
                                            >6</span
                                        ></span
                                    ></a
                                >
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ url('material/add_brand') }}"
                                        >Brand</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{ url('material/add_category') }}"
                                        >Category</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{ url('material/create') }}"
                                        >Add Material</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{ url('material/material_usage') }}"
                                        >Material Usage</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{ url('material/index') }}"
                                        >Material List</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0);"
                                    class="waves-effect"
                                    ><i class="mdi mdi-clipboard"></i
                                    ><span>
                                        Vendor
                                        <span
                                            class="badge badge-success float-right"
                                            >6</span
                                        ></span
                                    ></a
                                >
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ url('vendor/create') }}"
                                        >Add Vendor</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{ url('vendor/purchase') }}"
                                        >Purchase Details</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{ url('vendor/add_unit') }}"
                                        >Add Unit</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{ url('vendor/index') }}"
                                            >Vendor List</a
                                        >
                                    </li>

                                </ul>
                            </li>

                            <li>
                                <a
                                    href="javascript:void(0);"
                                    class="waves-effect"
                                ><i class="mdi mdi-clipboard"></i
                                    ><span>
                                        Contractors
                                        <span
                                            class="badge badge-success float-right"
                                        >6</span
                                        ></span
                                    ></a
                                >
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ url('contractor/ca_no') }}"
                                        >Add CA Number</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{ url('contractor/create') }}"
                                        >Add Contractor</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{ url('contractor/index') }}"
                                        >Contractor List</a
                                        >
                                    </li>


                                </ul>
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0);"
                                    class="waves-effect"
                                ><i class="mdi mdi-clipboard"></i
                                    ><span>
                                        Users
                                        <span
                                            class="badge badge-success float-right"
                                        >6</span
                                        ></span
                                    ></a
                                >
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ url('user/create') }}"
                                        >Create USers</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{ url('user/index') }}"
                                        >User list</a
                                        >
                                    </li>

                                </ul>
                            </li>
                        </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
            <!-- end Sidebar -left -->
        </div>
        <!-- content starts here -->
        <div class="content-page">
            <div class="content">
            @yield('content')
            </div>
            <footer class="footer">© 2018 Agroxa <span class="d-none d-sm-inline-block">- Crafted with <i
                        class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
            </footer>
        </div>

</div>
<!-- END wrapper --><!-- jQuery  -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/metisMenu.min.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/waves.min.js')}}"></script>
<script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!-- Peity JS -->
<script src="{{asset('plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('pages/dashboard.js')}}"></script>
<!-- Data tables js -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script><!-- Buttons examples -->
<script src="{{ asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.html5.min.js') }} "></script>
<script src="{{ asset('plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.colVis.min.js') }}"></script><!-- Responsive examples -->
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script><!-- Datatable init js -->
<!-- App js -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('pages/datatables.init.js') }}"></script><!-- App js -->

</body>
</html>
