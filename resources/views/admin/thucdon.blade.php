@extends('admin/layout')
@section('page_title','Thực đơn')
@section('container')
    
    {{session('message')}}                    
    <h1 class="mb10">Thực đơn</h1>
    <a href="{{url('admin/thucdon/themthucdon')}}">
        <button type="button" class="btn btn-success">
            Thêm thực đơn
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>Mã thực đơn</th>
                            <th>Thứ</th>
                            <th>Trưa</th>
                            <th>Chiều</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->mathucdon}}</td>
                            <td>{{$list->thu}}</td>
                            <td>{{$list->trua}}</td>
                            <td>{{$list->chieu}}</td>
                            <td>
                                <a href="{{url('admin/thucdon/themthucdon/')}}/{{$list->mathucdon}}"><button type="button" class="btn btn-info">Sửa</button></a>
                                <a href="{{url('admin/thucdon/delete/')}}/{{$list->mathucdon}}" onclick="return confirm('Are you sure you want to delete this item?');"><button type="button" class="btn btn-danger" >Xóa</button></a>
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