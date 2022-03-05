@extends('admin/layout')
@section('page_title','Danh sách lớp')
@section('container')
    {{session('message')}}
    <h1 class="mb10"><a href="{{url('admin/lop')}}">Danh sách lớp</a></h1>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="lop/themlop">
            <button type="button" class="btn btn-success">
                Thêm Lớp
            </button>
        </a>            
        
        <!-- phan search -->
							
		<form  class="archive-searchform" type ="get" action="{{url('/searchlop')}}" method="GET" >
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
                            <th>Mã lớp</th>
                            <th>Tên lớp</th>
                            <th>Sỉ số</th>       
                            <th>Học kì</th>
                            <th>Năm học</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($data->isNotEmpty())
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->malop}}</td>
                            <td>{{$list->tenlop}}</td>
                            <td>{{$list->siso}}</td>
                            <td>{{$list->hocki}}</td>
                            <td>{{$list->namhoc}}</td>
                            <td>
                                <a href="{{url('admin/lop/themlop/')}}/{{$list->malop}}"><button type="button" class="btn btn-info">Sửa</button></a>
                                <a href="{{url('admin/lop/delete/')}}/{{$list->malop}}" onclick="return confirm('Are you sure you want to delete this item?');"><button type="button" class="btn btn-danger">Xóa</button></a>
                            </td>
                        </tr>
                        @endforeach
                    @else 
		                <tr>
                            <td colspan=6 class="text-center">Không có kết quả được tìm thấy!</td>
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
