@extends('admin/layout')
@section('page_title','Thư viện ảnh')
@section('container')
    
    {{session('message')}}                    
    <h1 class="mb10">Thư viện ảnh</h1>
    <a href="{{url('admin/thuvienanh/themthuvienanh')}}">
        <button type="button" class="btn btn-success">
            Thêm ảnh
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>Mã ảnh</th>
                            <th>Tiêu đề ảnh</th>
                            <th>Ngày đăng</th>
                            <th>Hình ảnh</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->maanh}}</td>
                            <td>{{$list->tieudeanh}}</td>
                            <td>{{$list->ngaydang}}</td>
                            <td>
                            @if($list->image!='')
                                <img width="100px" src="{{asset('storage/media/'.$list->image)}}"/>
                            @endif
                            </td>
                            <td>
                                <a href="{{url('admin/thuvienanh/themthuvienanh/')}}/{{$list->maanh}}"><button type="button" class="btn btn-info">Edit</button></a>
                                <a href="{{url('admin/thuvienanh/delete/')}}/{{$list->maanh}}" onclick="return confirm('Are you sure you want to delete this item?');"><button type="button" class="btn btn-danger" >Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
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