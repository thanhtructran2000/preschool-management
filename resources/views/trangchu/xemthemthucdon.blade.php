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
							<!-- <i class="fa fa-coffee"></i> -->
						</div>
					<div class="page-header-content">
						<h2 class="page-title">Thực đơn</h2>
						<hr class="line-color">
						<ol class="breadcrumb">
							<li><a href="{{url('trangchu')}}">Trang chủ</a></li>
							<li class="active"><a href="{{url('xemthemthucdon')}}">Thực đơn</a></li>
						</ol>						
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="main-content" class="col-xs-10 col-md-6">
				<div class="box-item">
					<i class="box-icon-7-left"></i>
					<i class="box-icon-7-right"></i>
					<h2 class="box-title box-page-title bg-color-1">
						<span class="border-color-1"><a href='trangchu'>Website Trường Mầm Non</a></span>
					</h2>
                    <div class="box-content">
                    
							@foreach($data as $list)
							<div class="cat-item">
								<div class="cat-thumb">
									
									<img width="100px" src="{{asset('admin_assets/images/icon/thucdon.png')}}"/>
									
								</div>
                                <p><a href="/trangchu/dsthucdon/{{$list->mathucdon}}">Bữa ăn của bé thứ {{$list->thu}}</a></p>
							</div>
							@endforeach
					</div>
						
				</div>
				</div>
				<!-- thong bao-->
				<div id="sidebar" class="col-xs-12 col-md-4">	
					<div class="box-item w-thongbao">
						<i class="box-icon-8-right"></i>
						<h2 class="box-title bg-color-2">
							<span class="border-color-2"><a href="">Thông báo</a></span>
						</h2>
					
					<div class="box-content w-content">
						<marquee height="240" behavior="SCROLL" scrolldelay="100" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()" direction="up">
							@foreach($datathongbao as $list)
							<p><a href="/trangchu/dsthongbao/{{$list->mathongbao}}"><i class="fa fa-chevron-circle-right"></i>{{$list->tieude}}</a> <label>{{$list->ngaydang}}</label></p>
							@endforeach   
						</marquee>
					 
					</div>
					
				</div>
				<!--ket thuc phan thong bao -->
				
			</div>
            
			<!--Sidebar-->
        </div>
        </div>
    
	</div>

</div><!---End #wrapper-->
@endsection