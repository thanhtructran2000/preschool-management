<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('page_title')</title>
    <link href="{{asset('admin_assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/css/theme.css')}}" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('admin_assets/images/icon/unnamed-logo.jpg')}}" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="{{url('/trangchu')}}">
                                <i class="fa fa-bars"></i>Trang chủ</a>
                        </li>
                        <li>
                            <a href="{{url('admin/khoahoc')}}">
                                <i class="fa fa-bookmark"></i>Khóa học</a>
                        </li>
                        <li>
                            <a href="{{url('admin/lop')}}">
                                <i class="fa fa-address-book"></i>Danh sách lớp</a>
                        </li>
                        <li>
                            <a href="{{url('admin/hocsinh')}}">
                                <i class="fa fa-user-circle"></i>Danh sách học sinh</a>
                        </li>
                        <li>
                            <a href="{{url('admin/category')}}">
                                <i class="fa fa-id-card"></i>Quản lý giáo viên</a>
                        </li>
                        <li>
                            <a href="{{url('admin/phutrach')}}">
                            
                                <i class="fa fa-id-card"></i>Phụ trách lớp học</a>
                        </li>
                        <li>
                            <a href="{{url('admin/phuhuynh')}}">
                                <i class="fa fa-address-book"></i>Thông tin phụ huynh</a>
                        </li>
                       
                        <li>
                            <a href="{{url('admin/hoatdong')}}">
                                <i class="fa fa-address-book"></i>Hoạt động</a>
                        </li>
                        <li>
                            <a href="{{url('admin/thongbao')}}">
                                <i class="fa fa-bullhorn"></i>Thông báo</a>
                        </li>
                        <li>
                            <a href="{{url('admin/thuvienanh')}}">
                                <i class="fa fa-picture-o"></i>Thư viện ảnh</a>
                        </li>
                        <li>
                            <a href="{{url('admin/thucdon')}}">
                                <i class="fa fa-coffee"></i>Thực đơn</a>
                        </li>
                        
                        <!--
                        
                        
                        
                        <li>
                            <a href="{{url('admin/phongban')}}">
                                <i class="fa fa-briefcase"></i>Quản lý phòng ban</a>
                        </li>-->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('admin_assets/images/icon/unnamed-logo.jpg')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="{{url('/trangchu')}}">
                                <i class="fa fa-bars"></i>Trang chủ</a>
                        </li>
                        <li>
                            <a href="{{url('admin/khoahoc')}}">
                                <i class="fa fa-bookmark"></i>Khóa học</a>
                        </li>
                        <li>
                            <a href="{{url('admin/lop')}}">
                                <i class="fa fa-address-book"></i>Danh sách lớp</a>
                        </li>
                        <li>
                            <a href="{{url('admin/hocsinh')}}">
                                <i class="fa fa-user-circle"></i>Danh sách học sinh</a>
                        </li>
                        <li>
                            <a href="{{url('admin/category')}}">
                                <i class="fa fa-id-card"></i>Quản lý giáo viên</a>
                        </li>
                        <li>
                            <a href="{{url('admin/phutrach')}}">
                                <i class="fa fa-id-card"></i>Phụ trách lớp học</a>
                        </li>
                        <li>
                            <a href="{{url('admin/phuhuynh')}}">
                                <i class="fa fa-address-book"></i>Thông tin phụ huynh</a>
                        </li>
                       
                        <li>
                            <a href="{{url('admin/hoatdong')}}">
                                <i class="fa fa-address-book"></i>Hoạt động</a>
                        </li>
                        <li>
                            <a href="{{url('admin/thongbao')}}">
                                <i class="fa fa-bullhorn"></i>Thông báo</a>
                        </li>
                        <li>
                            <a href="{{url('admin/thuvienanh')}}">
                                <i class="fa fa-picture-o"></i>Thư viện ảnh</a>
                        </li>
                        <li>
                            <a href="{{url('admin/thucdon')}}">
                                <i class="fa fa-coffee"></i>Thực đơn</a>
                        </li>
                        <!--
                        
                        
                        
                        <li>
                            <a href="{{url('admin/phongban')}}">
                                <i class="fa fa-briefcase"></i>Quản lý phòng ban</a>
                        </li>-->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">

                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Welcome</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">

                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>

                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{url('admin')}}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @section('container')
                        @show
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

    </div>


    <script src="{{asset('admin_assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/main.js')}}"></script>
</body>
</html>
