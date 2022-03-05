@extends('admin/layout')
@section('page_title','Thông tin phụ huynh')
@section('container')
    {{session('message')}}
    <h1 class="mb10"><a href="{{url('admin/phuhuynh')}}">Thông  tin phụ huynh</a></h1>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="phuhuynh/themphuhuynh">
            <button type="button" class="btn btn-success">
                Thêm mới thông tin phụ huynh
            </button>
        </a>
        <!-- phan search -->
							
		<form  class="archive-searchform" type ="get" action="{{url('/searchphuhuynh')}}" method="GET" >
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
                            <th>Mã phụ huynh</th>
                            <th>Họ tên</th>
                            <th>Giới tính</th>
                            <th>Địa chỉ</th>
                            <th>SDT</th>
                            <th>Email</th>
                            <th>Họ tên học sinh</th>
                            <th>PH Lớp</th>
                            <th>HK</th>
                            <th>Năm học</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($data->isNotEmpty())
                        @foreach($data as $list)
                        <tr>
                            
                            <td>{{$list->maph}}</td>
                            <td>{{$list->hotenph}}</td>
                            <td>{{$list->gioitinhph}}</td>
                            <td>{{$list->diachiph}}</td>
                            <td>{{$list->sdt}}</td>
                            <td>{{$list->email}}</td>
                            <td>{{$list->hotenhs}}</td>
                            <td>{{$list->tenlop}}</td>
                            <td>{{$list->hocki}}</td>
                            <td>{{$list->namhoc}}</td>
                            <td>
                                <a href="{{url('admin/phuhuynh/themphuhuynh/')}}/{{$list->maph}}"><button type="button" class="btn btn-info">Sửa</button></a>
                                <a href="{{url('admin/phuhuynh/delete/')}}/{{$list->maph}}" onclick="return confirm('Are you sure you want to delete this item?');"><button type="button" class="btn btn-danger">Xóa</button></a>
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
