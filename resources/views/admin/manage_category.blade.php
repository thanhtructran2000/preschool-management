@extends('admin/layout')
@section('page_title','Quản lý giáo viên')
@section('container')
    <h1 class="mb10">Quản Lý Giáo Viên</h1>
    <a href="{{url('admin/category')}}">
        <button type="button" class="btn btn-success">
            Trở về
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
        <div class="row">
                            <div class="col-lg-12">
                              {{session('message')}}
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{route('category.manage_category_process')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="magv" class="control-label mb-1">Mã Giáo Viên</label>
                                                <input id="magv" value="{{$magv}}" name="magv" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập mã giáo viên" required>
                                                @error('magv')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="hotengv" class="control-label mb-1">Họ Tên Giáo Viên</label>
                                                <input id="hotengv" value="{{$hotengv}}" name="hotengv" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập họ tên giáo viên"required>
                                                @error('hotengv')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="ngaysinhgv" class="control-label mb-1">Ngày Sinh Giáo Viên</label>
                                                <input id="ngaysinhgv" value="{{$ngaysinhgv}}" name="ngaysinhgv" type="date" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập ngày sinh" required>
                                                @error('ngaysinhgv')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="gioitinhgv" class="control-label mb-1">Giới Tính</label>
                                                <input id="gioitinhgv" value="{{$gioitinhgv}}" name="gioitinhgv" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập giới tính" required>
                                                @error('gioitinhgv')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="trinhdogv" class="control-label mb-1">Trình Độ</label>
                                                <input id="trinhdogv" value="{{$trinhdogv}}" name="trinhdogv" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Trình độ" required>
                                                @error('trinhdogv')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="diachigv" class="control-label mb-1">Địa Chỉ</label>
                                                <input id="diachigv" value="{{$diachigv}}" name="diachigv" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập địa chỉ" required>
                                                @error('diachigv')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="sdt" class="control-label mb-1">Số Điện Thoại</label>
                                                <input id="sdt" value="{{$sdt}}" name="sdt" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" required>
                                                @error('sdt')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="control-label mb-1">Email</label>
                                                <input id="email" value="{{$email}}" name="email" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập email" required>
                                                @error('email')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    Lưu
                                                </button>
                                            </div>
                                            <input type="hidden" name="magv" value="{{$magv}}"/>
                                        </form>
                                    </div>
                                </div>
                            </div>






                        </div>

        </div>
    </div>

@endsection
