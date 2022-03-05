<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng nhập</title>
    <link href="{{asset('admin_assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/css/theme.css')}}" rel="stylesheet" media="all">
    <link rel="shortcut icon" href="{{asset('admin_assets/images/icon/logoshinee.jpg')}}" />
</head>

<body class="animsition" >
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            {{Config::get('constants.site_name')}}
                            <a href="#">
                                <img src="{{asset('admin_assets/images/icon/unnamed.jpg')}}" >
                            </a>
                        </div>
                        <div class="login-form">
                        
                            <form action="{{route('trangchu.authuser')}}" method="post">
                                @csrf
                                <h2 align=center>Đăng nhập tài khoản</h2>
                                <div class="form-group">
                                    <label>Tên đăng nhập</label>
                                    <input class="au-input au-input--full" type="uname" name="uname" id ="uname" placeholder="Tên đăng nhập" required>
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input class="au-input au-input--full" type="password" name="pass" id ="pass" placeholder="Mật khẩu" required>
                                </div>

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Đăng nhập</button>
                                <a href='dangky' title='Đăng ký'>Đăng ký</a>
                                <!--<div class="alert alert-danger" role="alert">-->
                                     {{session('error')}}
							    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{asset('admin_assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/main.js')}}"></script>
</body>
</html>
