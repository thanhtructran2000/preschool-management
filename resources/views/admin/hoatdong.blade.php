@extends('admin/layout')
@section('page_title','Hoạt động')
@section('container')
    
    {{session('message')}}                    
    <h1 class="mb10">Hoạt động</h1>
    <a href="{{url('admin/hoatdong/themhoatdong')}}">
        <button type="button" class="btn btn-success">
            Thêm hoạt động
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>Mã hoạt động</th>
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
                            <td>{{$list->mahoatdong}}</td>
                            <td><a href="/trangchu/dshoatdong/{{$list->mahoatdong}}">{{$list->tieude}}</a></td>
                            <td>{{$list->nguoidang}}</td>
                            <td>{{$list->ngaydang}}</td>
                            <td>{{$list->noidung}}</td>
                            <td>
                            @if($list->image!='')
                                <img width="100px" src="{{asset('storage/media/'.$list->image)}}"/>
                            @endif
                            </td>
                            <td>
                                <a href="{{url('admin/hoatdong/themhoatdong/')}}/{{$list->mahoatdong}}"><button type="button" class="btn btn-info">Edit</button></a>
                                <a href="{{url('admin/hoatdong/delete/')}}/{{$list->mahoatdong}}" onclick="return confirm('Are you sure you want to delete this item?');"><button type="button" class="btn btn-danger" >Delete</button></a>
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