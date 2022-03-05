@extends('trangchu/layouttrangchu')
@section('page_title','Danh sách học sinh')
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
						<h2 class="page-title">Danh Sách Học Sinh</h2>
						<hr class="line-color">
						<ol class="breadcrumb">
							<li><a href='trangchu'>Trang chủ</a></li>
							<li class="active"><a href="{{url('/dslop')}}">Danh sách lớp</a></li>
							<li class="active"><a href="{{url('/dshocsinh')}}">Danh sách học sinh</a></li>
						</ol>						
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="main-content" class="col-xs-40 col-md-12">
				<div class="box-item">
					<i class="box-icon-7-left"></i>
					<i class="box-icon-7-right"></i>
					<h2 class="box-title box-page-title bg-color-1">
						<span class="border-color-1"><a href='trangchu'>Website Trường Mầm Non</a></span>
					</h2>
							
					<div class="box-content">
					<div class="single-content">
																														
						<h1 class="single-title">Danh sách học sinh</h1>
															
						</div>
						<!-- DATA TABLE-->
						<div class="table-responsive m-b-40">
						<!-- phan search -->
							<form  class="archive-searchform" type ="get" action="{{url('/searchdshocsinh')}}" method="GET" >
								<div class="input-group">
										<input class="form-control" type='search' name="query" placeholder='Tìm kiếm' required >
									<span class="input-group-btn">
										<button type="submit" class="btn btn-success">Tìm kiếm</button>
									</span>
								</div>
							</form><!-- ket thuc phan search -->
							
							<table class="table table-borderless table-data3">
								<thead>
									<tr>
										<th>Mã học sinh</th>
										<th>Họ Tên</th>
										<th>Địa chỉ</th>
										<th>Ngày Sinh</th>
										<th>Giới tính</th>
										<th>Chiều cao</th>
										<th>Cân nặng</th>
										<th>Tên lớp</th>
										<th>Học kì</th>
										<th>Năm học</th>
									</tr>
								</thead>
								<tbody>
								@if($data->isNotEmpty())
									@foreach($data as $list)
									<tr>
										<td>{{$list->mahs}}</td>
										<td>{{$list->hotenhs}}</td>
										<td>{{$list->diachihs}}</td>
										<td>{{$list->ngaysinhhs}}</td>
										<td>{{$list->gioitinhhs}}</td>
										<td>{{$list->chieucao}}</td>
										<td>{{$list->cannang}}</td>
										<td>{{$list->tenlop}}</td>
										<td>{{$list->hocki}}</td>
										<td>{{$list->namhoc}}</td>
									</tr>
									@endforeach
									@else 
									
										<tr>
										<td colspan=10 class="text-center">Không có kết quả được tìm thấy!</td>
										</tr>
									
									@endif
								</tbody>
							</table>
							
								{{ $data->links() }}
							
            			</div>
                        <!-- END DATA TABLE-->
					</div>
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