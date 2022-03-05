<!DOCTYPE >
<html >

<head>
	<title>@yield('page_title')</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href="{{asset('admin_assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
	<!-- Bootstrap -->
	<link href="http://c0eapo.pgdcujut.edu.vn/wp-content/themes/vtktheme/assets/icon-fonts/styles.css" rel="stylesheet" type="text/css"/>
	<link href="http://c0eapo.pgdcujut.edu.vn/wp-content/themes/vtktheme/libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="http://c0eapo.pgdcujut.edu.vn/wp-content/themes/vtktheme/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css"/>
    <link href="http://c0eapo.pgdcujut.edu.vn/wp-content/themes/vtktheme/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
    <link href="http://c0eapo.pgdcujut.edu.vn/wp-content/themes/vtktheme/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="http://c0eapo.pgdcujut.edu.vn/wp-content/themes/vtktheme/css/color/color-tim.css" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="{{asset('admin_assets/images/icon/logoshinee.jpg')}}" />
</head>

<body>
<div id="wrapper">
<header id="header" role="banner">
	<div class="container">
		<div class="row">			
			<div class="navbar-header">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h2 class="navbar-brand">
                        <img class="logo" src="{{asset('admin_assets/images/icon/shinee.png')}}" />
                    </h2>
			    </div>
            </div>
            <nav class="collapse navbar-collapse navbar-default navbar-right bs-navbar-collapse" role="navigation">
			<a href="{{url('trangchu')}}"><span class="icon-home navbar-left"><i class="fa fa-home"></i></span></a>
				<ul id="main-nav" class="nav navbar-nav navbar-left"><li id="menu-item-171" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-171"><a>Giới thiệu</a>
<ul class="sub-menu">
	<li id="menu-item-173" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-173"><a href="{{url('/gioithieu')}}">Giới thiệu về nhà trường</a></li>
	<li id="menu-item-214" class="menu-item menu-item-type-post_type_archive menu-item-object-co-cau-to-chuc menu-item-214"><a href='phongban'>Cơ cấu tổ chức</a></li>
	<li id="menu-item-172" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-172"><a href="">Chức năng – Nhiệm vụ</a></li>
	<li id="menu-item-175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175"><a href="">Tầm nhìn – Sứ mệnh</a></li>
	<li id="menu-item-176" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-176"><a href="">Thành tích đạt được</a></li>
	<li id="menu-item-174" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174"><a href='lienhe'>Liên hệ</a></li>
</ul>
</li>
<li id="menu-item-177" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-177"><a>Tin tức &#8211; Thông báo</a>
<ul class="sub-menu">
	<li id="menu-item-182" class="menu-item menu-item-type-post_type_archive menu-item-object-thong-bao menu-item-182"><a href="{{url('/dsthongbao')}}">Thông báo</a></li>
	<li id="menu-item-180" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-180"><a href="">Tin tức – Sự kiện</a></li>
	<li id="menu-item-181" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-181"><a href="">Tin tức giáo dục</a></li>
	<li id="menu-item-178" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-178"><a href="">Người tốt việc tốt</a></li>
</ul>
</li>
<li id="menu-item-177" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-177"><a>Danh sách</a>
<ul class="sub-menu">
	<!--<li id="menu-item-182" class="menu-item menu-item-type-post_type_archive menu-item-object-thong-bao menu-item-182"><a href="{{url('/dskhoahoc')}}">Danh sách khóa học</a></li>-->
	<li id="menu-item-181" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-181"><a href="{{url('/dslop')}}">Danh sách lớp</a></li>
	<li id="menu-item-178" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-178"><a href="{{url('/dshocsinh')}}">Danh sách học sinh</a></li>
	<li id="menu-item-180" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-180"><a href="{{url('/dsgvien')}}">Danh sách giáo viên</a></li>
	<li id="menu-item-180" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-180"><a href="{{url('/phutrachlophoc')}}">Danh sách phụ trách lớp học</a></li>

	
	
</ul>
</li>
<li id="menu-item-187" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-187"><a href="{{url('/xemthemhoatdong')}}">Hoạt động</a>

</li>
<li id="menu-item-184" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-184"><a href="">Góc phụ huynh</a>
<ul class="sub-menu">
	<li id="menu-item-187" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-185"><a href="{{url('/dsphuhuynh')}}">Thông tin phụ huynh</a></li>
	<li id="menu-item-185" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-185"><a href="">Dinh dưỡng – Sức khỏe cho trẻ</a></li>
	<li id="menu-item-186" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-186"><a href="">Kỹ năng nuôi dạy trẻ</a></li>
</ul>
</li>
<li id="menu-item-191" class="menu-item menu-item-type-post_type_archive menu-item-object-thu-vien-anh menu-item-has-children menu-item-191"><a href="{{url('/dsthuvienanh')}}">Thư viện ảnh</a>
<!-- <ul class="sub-menu">
	<li id="menu-item-192" class="menu-item menu-item-type-taxonomy menu-item-object-album-anh menu-item-192"><a href="">Hoạt động của bé</a></li>
	<li id="menu-item-193" class="menu-item menu-item-type-taxonomy menu-item-object-album-anh menu-item-193"><a href="">Hoạt động nhà trường</a></li>
	<li id="menu-item-195" class="menu-item menu-item-type-taxonomy menu-item-object-album-anh menu-item-195"><a href="">Tác phẩm của bé</a></li>
	<li id="menu-item-194" class="menu-item menu-item-type-taxonomy menu-item-object-album-anh menu-item-194"><a href="">Sinh nhật của bé</a></li>
</ul> -->
</li>
<li id="menu-item-191" class="menu-item menu-item-type-post_type_archive menu-item-object-thu-vien-anh menu-item-has-children menu-item-191"><a href="{{url('admin')}}">Đăng nhập</a></li>

			</nav>
		</div>
	</div>
</header><!--End #header-->
@section('container')
@show
<footer id="footer">
	<div class="container">
					
		<div class="social">
			<div class="social-content">
				<a class="ico-facebook" target="_blank" href=""></a>
				<a class="ico-youtube" target="_blank" href=""></a>
			</div>
		</div>
		<div class="footer-nav">
			<div class="row">
				<div class="col-xs-12 col-sm-3">
					<div class="block block-1">
						<h2 class="title">Phương châm</h2>
						<div class="description">
							<div class="quote-close">
								Chất lượng giáo dục là danh dự, uy tín của nhà trường							
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3">
					<div class="block block-2">
					<h2 class="title">Liên hệ</h2>
					<div class="description">
						<p class="brand-name">Website Trường Mầm Non</p>
						<strong>Địa chỉ:</strong>Cần Thơ <br>
						<strong>Điện thoại:</strong>0949463412<br>
						<strong>Email: </strong> tructructhanh01@gmail.com
					</div>
				</div>
				</div>
				<div class="col-xs-12 col-sm-3">
					<div class="block block-3">
						<h2 class="title">Hỗ trợ</h2>
						<div class="description">
							<div class="hotline"><i class="fa fa-phone"></i> HOTLINE: <label> 0949463412</label></div> 	
							<strong>Email:</strong>tructructhanh01@gmail.com
							</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3">
					<div class="block block-4">
						<h2 class="title">Tiện ích</h2>
						<div class="description">
							<div class="search">
								<label>Tìm kiếm</label>
								<div class="search-form">
									<form class="searchform" method="get" action="">
										<div class="input-group">
											<input type="hidden" value="post" name="post_type">
											<input type="text" class="form-control" placeholder="Tìm kiếm.." value="" name="s" >
											<span class="input-group-btn">
												<button class="btn btn-default btn-search" type="submit"><i class="fa fa-search"></i></button>
											</span>
										</div><!-- /input-group -->
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="footer-copyright">
		<div class="container">
			<div class="footer-content">
				<div class="row">
					<div class="col-xs-12 col-sm-1">
						<a class="icon-footer" rel="nofollow" ></a>
					</div>
					<div class="col-xs-12 col-sm-8">
						<div class="copy-right">
						&copy; Website Trường Mầm Non SHINE  <a href="" target="_blank"></a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-3">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<a id="backToTop" class="go-top"></a>
</footer><!--End #footer-->
</div><!---End #wrapper-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://c0eapo.pgdcujut.edu.vn/wp-content/themes/vtktheme/libraries/bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="http://c0eapo.pgdcujut.edu.vn/wp-content/themes/vtktheme/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<script src="http://c0eapo.pgdcujut.edu.vn/wp-content/themes/vtktheme/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="http://c0eapo.pgdcujut.edu.vn/wp-content/themes/vtktheme/js/jquery.vtk.js"></script>
<script>
    (function($){
        $(window).load(function(){
            $(".box-hotlink-content").mCustomScrollbar({
				theme:"dark-3",
			});
        });
    })(jQuery);
</script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>
</body>
</html>

</body>
</html>