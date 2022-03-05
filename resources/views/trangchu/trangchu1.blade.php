
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Website Trường Mầm Non</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
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

			<nav class="collapse navbar-collapse navbar-default navbar-right bs-navbar-collapse" role="navigation">
			<a href="{{url('trangchu')}}"><span class="icon-home navbar-left"><i class="fa fa-home"></i></span></a>
				<ul id="main-nav" class="nav navbar-nav navbar-left"><li id="menu-item-171" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-171"><a>Giới thiệu</a>
<ul class="sub-menu">
	<li id="menu-item-173" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-173"><a href="{{url('/gioithieu')}}">Giới thiệu về nhà trường</a></li>
	<li id="menu-item-214" class="menu-item menu-item-type-post_type_archive menu-item-object-co-cau-to-chuc menu-item-214"><a href=''>Cơ cấu tổ chức</a></li>
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
</header><!--End #header--><h1 class="title-seo">Website Trường Mầm Non</h1>
<!-- Banner Slider -->
                <div class="main-banner">
			<div id="carousel-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-generic" data-slide-to="1"></li><li data-target="#carousel-generic" data-slide-to="2"></li>				</ol>
		  
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
																					<div class="item active">
							<img src="http://c0eapo.pgdcujut.edu.vn/wp-content/themes/vtktheme/thumbnail.php?src=http%3A%2F%2Fc0eapo.pgdcujut.edu.vn%2Fwp-content%2Fuploads%2F2015%2F09%2Fbanner2.jpg&amp;w=1349&amp;h=415&amp;zc=1&amp;a=c" alt="Banner Slider 1" title="Banner Slider 1"/>						</div>
										
																					<div class="item">
							<img src="http://c0eapo.pgdcujut.edu.vn/wp-content/themes/vtktheme/thumbnail.php?src=http%3A%2F%2Fc0eapo.pgdcujut.edu.vn%2Fwp-content%2Fuploads%2F2015%2F09%2Fbanner1.jpg&w=1349&h=415&zc=1&a=c" alt="Banner Slider 2" title="Banner Slider 2"/>						</div>
											<div class="item">
							<img src="http://c0eapo.pgdcujut.edu.vn/wp-content/themes/vtktheme/thumbnail.php?src=http%3A%2F%2Fc0eapo.pgdcujut.edu.vn%2Fwp-content%2Fuploads%2F2015%2F09%2Fbanner3.jpg&amp;w=1349&amp;h=415&amp;zc=1&amp;a=c" alt="Banner Slider 3" title="Banner Slider 3"/>						</div>
									</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
					<span class="ico-slide ico-slide-prev"></span>
				</a>
				<a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
					<span class="ico-slide ico-slide-next"></span>
				</a>
			</div>
		</div>
		<div class="main-banner-overlay"></div>
        <!-- End Banner Slider -->
<div id="main-body" role="main">
	<div class="container main-body">
		<div class="row quicklink">
			<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 ql-item">
				<a href=""><span class="ico-quicklink ico-thungo"><i class="fa fa-envelope-open"></i></span></a>
				<h3 class="ql-title"><a href='gioithieu'>Giới thiệu<br/>chung</a></h3>
			</div>
			<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 ql-item">
				<a href=""><span class="ico-quicklink ico-tuyensinh"><i class="fa fa-graduation-cap"></i></span></a>
				<h3 class="ql-title"><a href="">Tầm nhìn<br/>Sứ mệnh</a></h3>
			</div>
			<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 ql-item">
				<a href=""><span class="ico-quicklink ico-camera"><i class="fa fa-comment"></i></span></a>
				<h3 class="ql-title"><a href="{{url('/dsthongbao')}}">Thông báo<br/>từ nhà trường</a></h3>
			</div>
		</div>
		<div class="row">
			<!-- CHUYÊN MỤC NỔI BẬT -->
			
			<div class="col-xs-12 col-md-4">
				<div class="box-item">
					<i class="box-icon-1"></i>
					<h2 class="box-title bg-color-1">
						<span class="border-color-1"><a href="">Hoạt động nhà trường</a></span>
					</h2>
					<div class="box-content">
							<div class="cpost">
							@foreach($datamahoatdong as $list)
								@if($list->image!='')
                               		 <img width="100px" src="{{asset('storage/media/'.$list->image)}}"/>
                            	@endif
								<a href="/trangchu/dshoatdong/{{$list->mahoatdong}}"><h2 class="cpost-title">{{$list->tieude}}</h2></a>
								<p class="cpost-date">{{$list->ngaydang}}</p>
								<div class="cpost-des">
									{{$list->noidung}}
								</div>
							@endforeach
							</div>
							
							<div class="line-block"></div>
							<ul class="cpost-more">
								@foreach($datamahoatdong2 as $list)
								<li><i class="ico-cpost-more"></i><a href="/trangchu/dshoatdong/{{$list->mahoatdong}}">{{$list->tieude}}</a></li>
								<!--<li><i class="ico-cpost-more"></i><a href="">Sáng tạo phương pháp học tập mới cho trẻ mầm non</a></li>
								<li><i class="ico-cpost-more"></i><a href="">Học sinh tham gia cuộc thi vẽ tranh hướng về biển Đông</a></li>-->
								@endforeach
							</ul>
							
						<p class="view-more pull-right"><a href='xemthemhoatdong'>Xem thêm <i class="fa fa-angle-double-right"></i></a></p>
					</div>
				</div>
				
			</div>
			<!-- ket thuc hoat dong-->
                <div class="col-xs-12 col-md-4">
            <div class="box-item">
                <i class="box-icon-2"></i>
                <h2 class="box-title bg-color-1">
                    <span class="border-color-1"><a href="">Tin tức Phòng GD&ĐT</a></span>
                </h2>
                <div class="box-content">
                    <div class="cpost">
                        <a href="">
                            <img src="{{asset('admin_assets/images/icon/logoshinee.jpg')}}" />
                        </a>
                        <a href=""><h2 class="cpost-title">Những tin tức hoạt động mới nhất từ Phòng GD&ĐT</h2></a>
                    </div>
                    <div class="line-block"></div>
                    <ul class="cpost-more">
                        <marquee height="260" behavior="SCROLL" scrolldelay="100" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()" direction="up">
                                                                <li><i class="ico-cpost-more"></i><a target="_blank" href="">KẾ HOẠCH THI HÙNG BIỆN TIẾNG ANH CẤP HUYỆN BẬC THCS NĂM HỌC 2020-2021</a></li>
                                                                <li><i class="ico-cpost-more"></i><a target="_blank" href="">SÁNG KIẾN</a></li>
                                                                <li><i class="ico-cpost-more"></i><a target="_blank" href="">TẬP HUẤN MÔ ĐUN 1,2,3 CHƯƠNG TRÌNH GIÁO DỤC PHỔ THÔNG 2018</a></li>
                                                                <li><i class="ico-cpost-more"></i><a target="_blank" href="">THI KHOA HỌC KỸ THUẬT CẤP HUYỆN NĂM HỌC 2020-2021</a></li>
                                                                <li><i class="ico-cpost-more"></i><a target="_blank" href="">GIẢI BÓNG CHUYỀN CHÀO MỪNG NGÀY NHÀ GIÁO VIỆT NAM 20-11</a></li>
                                                                <li><i class="ico-cpost-more"></i><a target="_blank" href="">HỘI KHỎE PHÙ ĐỔNG HUYỆN CƯ JUT LẦN THỨ XIV NĂM 2020</a></li>
                                                                <li><i class="ico-cpost-more"></i><a target="_blank" href="">HỘI KHỎE PHÙ ĐỔNG HUYỆN CƯ JÚT LẦN THỨ XIV NĂM 2020</a></li>
                                                                <li><i class="ico-cpost-more"></i><a target="_blank" href="">ĐOÀN GIÁO VIÊN PHÒNG GD&ĐT HUYỆN CƯ JÚT THAM GIA HỘI THI GVDG CẤP TỈNH BẬC THCS LẦN THỨ V NĂM HỌC 2019-2020</a></li>
                                                                <li><i class="ico-cpost-more"></i><a target="_blank" href="">ĐOÀN HỌC SINH HUYỆN CƯ JUT THAM GIA CUỘC THI KHKT DÀNH CHO HỌC SINH TRUNG HỌC CẤP TỈNH NĂM HỌC 2019-2020</a></li>
                                                                <li><i class="ico-cpost-more"></i><a target="_blank" href="">DANH SÁCH SÁNG KIẾN CẤP HUYỆN NĂM HỌC 2017-2018</a></li>
                                                    </marquee>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-4">
			<div class="box-item">
				<i class="box-icon-3"></i>
					<h2 class="box-title bg-color-1">
						<span class="border-color-1"><a href="">Bữa ăn của bé</a></span>
					</h2>
				<div class="box-content">
					<div class="cpost">
						<a href="">
							<img src="{{asset('admin_assets/images/icon/thucdon.png')}}" />
						</a>
						<a href="{{url('xemthemthucdon')}}"><h2 class="cpost-title">Bữa ăn của bé</h2></a>
						<div class="cat-item-info cpost-download">
							<!-- <p><i class="icon-fontawesome-webfont-166 ico-category"></i> <label>08/09/2015</label></p>
							<p><span><i class="icon-fontawesome-webfont-258 ico-category"></i>Lượt xem: <label>449</label></span></p> -->
						</div>
					</div>
					<div class="line-block"></div>
						<ul class="cpost-more">
						
							<marquee height="260" behavior="SCROLL" scrolldelay="100" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()" direction="up">
							@foreach($datamathucdon as $list)
								<li><i class="ico-cpost-more"></i><a href="/trangchu/dsthucdon/{{$list->mathucdon}}">Bữa ăn của bé thứ {{$list->thu}}</a></li>
							@endforeach
							</marquee>
						
						</ul>
					</div>
				</div>
		</div>
                			<!-- END CHUYÊN MỤC NỔI BẬT -->
		</div>
		<div class="row">
			<!-- THƯ VIỆN ẢNH -->
		<div class="col-xs-12 col-md-8">
            <div class="box-item">
                <i class="box-icon-4-left"></i>
                <i class="box-icon-4-right"></i>
                <h2 class="box-title bg-color-2">
                    <span class="border-color-2"><a href="">Thư viện ảnh</a></span>
                </h2>
                <div class="box-content">
				@foreach($datamaanh as $list)
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img-sidebar-item">
                        <div class="img-thumb">
						
								@if($list->image!='')
                               		 <img width="200px" height="200px" src="{{asset('storage/media/'.$list->image)}}"/>
                            	@endif
                        </div>
                        <div class="img-caption">
                            <h2 class="img-title"><a href="">{{$list->tieudeanh}}</a></h2>
                            <p class="post-views">Ngày đăng: <label>{{$list->ngaydang}}</label></p>
                        </div>
                    </div>
				@endforeach
				<p class="view-more pull-right"><a href='dsthuvienanh'>Xem thêm <i class="fa fa-angle-double-right"></i></a></p>                           
                </div>
            </div>
        </div>
        			<!-- END THƯ VIỆN ẢNH -->
			<div class="col-xs-12 col-md-4">
				<div class="box-item">
					<i class="box-icon-5-right"></i>
					<h2 class="box-title bg-color-2">
						<span class="border-color-2"><a href="">Dành cho cha mẹ</a></span>
					</h2>
					<div class="box-content">
						<h3 class="boxmenu-title"><i class="fa fa-bars"></i> <span>Liên kết nhanh dành cho Phụ huynh:</span></h3>
						<div class="line-block"></div>
						<ul id="boxmenu-link" class="boxmenu-link">
							<li id="menu-item-196" ><i class="fa fa-bullhorn"></i><a href="{{url('/dsthongbao')}}">Thông báo từ nhà trường</a></li>
							<li id="menu-item-197" ><i class="fa fa-child"></i><a href="">Tình hình sức khỏe của trẻ</a></li>
							<li id="menu-item-199" ><i class="fa fa-coffee"></i><a href="{{url('/xemthemthucdon')}}">Bữa ăn của bé</a></li>
							<li id="menu-item-200" ><i class="fa fa-futbol"></i><a href="{{url('/xemthemhoatdong')}}">Hoạt động nhà trường</a></li>
							<li id="menu-item-201" ><i class="fa fa-magic"></i><a href="">Tác phẩm của bé</a></li>
							<li id="menu-item-203" ><i class="fa fa-heart"></i><a href="">Kỹ năng nuôi dạy trẻ</a></li>
							<li id="menu-item-202" ><i class="fa fa-plus-square"></i><a href="">Dinh dưỡng – Sức khỏe cho trẻ</a></li>
							<li id="menu-item-205" ><i class="fa fa-picture-o"></i><a href="{{url('/dsthuvienanh')}}">Thư viện ảnh</a></li>
							<!--<li id="menu-item-206"><i class="fa fa-apple"></i><a href="">Video hoạt động</a></li>-->
						</ul>			
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- CẢM NHẬN PHỤ HUYNH -->
						<!-- END CẢM NHẬN PHỤ HUYNH -->
		</div>
	</div>
</div><!--End #content-->
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
