@extends('admin/layout')
@section('page_title','Khóa học')
@section('container')
    {{session('message')}}
    <h1 class="mb10">Quản lý khóa học</h1>
    <a href="khoahoc/themkhoahoc">
        <button type="button" class="btn btn-success">
            Thêm khóa học
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>Mã khóa học</th>
                            <th>Học kì</th>
                            <th>Năm học</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->makhoa}}</td>
                            <td>{{$list->hocki}}</td>
                            <td>{{$list->namhoc}}</td>
                            <td>
                                <a href="{{url('admin/khoahoc/themkhoahoc/')}}/{{$list->makhoa}}"><button type="button" class="btn btn-info">Sửa</button></a>
                                <a href="{{url('admin/khoahoc/delete/')}}/{{$list->makhoa}}" onclick="return confirm('Are you sure you want to delete this item?');"><button type="button" class="btn btn-danger">Xóa</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>

@endsection
