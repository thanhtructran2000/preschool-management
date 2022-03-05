@extends('trangchu/layouttrangchu')
@section('page_title','Thực đơn')
@section('container')
<div class="main-banner">
	<div class="page_banner">
		<img title="  Giới thiệu về nhà trường - Website Trường Mầm Non " src="http://c0eapo.pgdcujut.edu.vn/wp-content/themes/vtktheme/images/banner_category.png">
	</div>
</div>
<div class="main-banner-overlay"></div>
<div id="main-body" role="main">
	<div class="container main-body">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-header">
					<div class="page-icon pull-left">
						<!--<i class="fa fa-address-book"></i>-->
					</div>
					<div class="page-header-content">
						<h2 class="page-title">Thực đơn</h2>
						<hr class="line-color">
						<ol class="breadcrumb">
							<li><a href="{{url('trangchu')}}">Trang chủ</a></li>
							<li class="active"><a href="{{url('xemthemthucdon')}}">Thực đơn</a></li>
							<li class="active">Thông Tin Thực đơn</li>
						</ol>						
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="main-content" class="col-xs-12 col-md-8">
				<div class="box-item">
					<i class="box-icon-7-left"></i>
					<i class="box-icon-7-right"></i>
					<h2 class="box-title box-page-title bg-color-1">
						<span class="border-color-1"><a href='trangchu'>Website Trường Mầm Non</a></span>
					</h2>
							
					<div class="box-content">
					<div class="single-content">
                    <h1 class="single-title">Bữa ăn của bé thứ {{$list->thu}}</h1>
								<div class="cat-item-info">
									<!-- <p>
										<span><i class="fa fa-users"></i>Người đăng: <label>{{$list->nguoidang}}</label></span>
										<span><i class="fa fa-calendar"></i>Ngày đăng: <label>{{$list->ngaydang}}</label></span>
									</p> -->
									
								</div>
								<p>
                                    <p>Buổi trưa:{{$list->trua}}</p>
                                    <hr>
                                    <p>Buổi chiều:{{$list->chieu}}</p>
                                </p>
											
					</div>
						
					</div>
				</div>
			</div>
            
			<!--Sidebar-->








						
                    <div class="row m-t-30">
        <div class="col-md-12">
            
        </div>
				</div>
			</div>
        </div>
           

           
        </div>
    
    <!-- ket thuc bang giao vien-->
		
	</div>

</div><!---End #wrapper-->
@endsection