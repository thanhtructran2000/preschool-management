<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <link href="{{asset('admin_assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            {{Config::get('constants.site_name')}}
                            <a href="#">
                                <img src="{{asset('admin_assets/images/icon/unnamed.jpg')}}" alt="CoolAdmin">
                            </a>
                        </div>
                        
                        <div class="login-form">
                            <form action="{{route('trangchu.dangky')}}" method="post">
                                <h2 align=center>Đăng ký tài khoản hệ thống</h2>
                                @csrf
                                <div class="form-group">
                                    <label>Tên đăng nhập</label>
                                    <input class="au-input au-input--full" type="text" id= "uname" name="uname" placeholder="Tên đăng nhập" required>
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input class="au-input au-input--full" type="password" id = "pass" name="pass" placeholder="Mật khẩu" required>
                                </div>
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu</label>
                                    <input class="au-input au-input--full" type="password" id = "pass" name="pass" placeholder="Nhập lại mật khẩu" required>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="Email" id = "email" name="email" placeholder="Email" required>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Đăng ký</button>
                                <a href='dangnhap' title='Đăng nhập'>Đăng nhập</a>
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
