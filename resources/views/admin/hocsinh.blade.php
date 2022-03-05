@extends('admin/layout')
@section('page_title','Danh sách học sinh')
@section('container')
    {{session('message')}}
    <h1 class="mb10"><a href="{{url('admin/hocsinh')}}">Danh sách học sinh</a></h1>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="hocsinh/themhocsinh">
            <button type="button" class="btn btn-success">
                Thêm học sinh
            </button>
        </a>
        <!-- phan search -->
							
		<form  class="archive-searchform" type ="get" action="{{url('/searchhocsinh')}}" method="GET" >
			<div class="input-group">
				<input class="form-control" type='search' name="query" placeholder='Tìm kiếm' required >
				<span class="input-group-btn">
				<button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
    </nav>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
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
                            <th>Thao tác</th>
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
                            <td>
                                <a href="{{url('admin/hocsinh/themhocsinh/')}}/{{$list->mahs}}"><button type="button" class="btn btn-info">Sửa</button></a>
                                <a href="{{url('admin/hocsinh/delete/')}}/{{$list->mahs}}" onclick="return confirm('Are you sure you want to delete this item?');"><button type="button" class="btn btn-danger">Xóa</button></a>
                                
                            </td>
                        </tr>
                        @endforeach
                    @else 
		                <tr>
                            <td colspan=11 class="text-center">Không có kết quả được tìm thấy!</td>
                        </tr>        
                   @endif
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                    {!! $data->links("pagination::bootstrap-4") !!}
            </div>
            
            <!-- END DATA TABLE-->
        </div>
    </div>

@endsection