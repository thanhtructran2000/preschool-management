@extends('admin/layout')
@section('page_title','Quản lý giáo viên')
@section('container')
    {{session('message')}}
    <h1 class="mb10"><a href="{{url('admin/category')}}">Quản lý giáo viên</a></h1>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="category/manage_category">
            <button type="button" class="btn btn-success">
                Thêm giáo viên
            </button>
        </a>
    <!-- phan search -->
							
		<form  class="archive-searchform" type ="get" action="{{url('/searchcategory')}}" method="GET" >
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
                            <th>Mã giáo viên</th>
                            <th>Họ Tên</th>
                            <th>Ngày Sinh</th>
                            <th>Giới tính</th>
                            <th>Trình Độ</th>
                            <th>Địa Chỉ</th>
                            <th>SĐT</th>
                            <th>Email</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($data->isNotEmpty())
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->magv}}</td>
                            <td>{{$list->hotengv}}</td>
                            <td>{{$list->ngaysinhgv}}</td>
                            <td>{{$list->gioitinhgv}}</td>
                            <td>{{$list->trinhdogv}}</td>
                            <td>{{$list->diachigv}}</td>
                            <td>{{$list->sdt}}</td>
                            <td>{{$list->email}}</td>
                            <td>
                                <a href="{{url('admin/category/manage_category/')}}/{{$list->magv}}" ><button type="button" class="btn btn-info">Sửa</button></a>
                                <a href="{{url('admin/category/delete/')}}/{{$list->magv}}" onclick="return confirm('Are you sure you want to delete this item?');"><button type="button" class="btn btn-danger">Xóa</button></a>
                                
                            </td>
                        </tr>
                        @endforeach
                    @else 
		                <tr>
                            <td colspan=9 class="text-center">Không có kết quả được tìm thấy!</td>
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
