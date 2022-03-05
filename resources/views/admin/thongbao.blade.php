@extends('admin/layout')
@section('page_title','Thông báo')
@section('container')
    
    {{session('message')}}                    
    <h1 class="mb10">Thông báo</h1>
    <a href="{{url('admin/thongbao/themthongbao')}}">
        <button type="button" class="btn btn-success">
            Thêm thông báo
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>Mã thông báo</th>
                            <th>Tiêu đề</th>
                            <th>Người đăng</th>
                            <th>Ngày đăng</th>
                            <th>Nội dung</th>
                            <th>Hình ảnh</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->mathongbao}}</td>
                            <td><a href="/trangchu/dsthongbao/{{$list->mathongbao}}">{{$list->tieude}}</a></td>
                            <td>{{$list->nguoidang}}</td>
                            <td>{{$list->ngaydang}}</td>
                            <td>{{$list->noidung}}</td>
                            <td>
                            @if($list->image!='')
                                <img width="100px" src="{{asset('storage/media/'.$list->image)}}"/>
                            @endif
                            </td>
                            <td>
                                <a href="{{url('admin/thongbao/themthongbao/')}}/{{$list->mathongbao}}"><button type="button" class="btn btn-info">Edit</button></a>
                                <a href="{{url('admin/thongbao/delete/')}}/{{$list->mathongbao}}" onclick="return confirm('Are you sure you want to delete this item?');"><button type="button" class="btn btn-danger" >Delete</button></a>
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