@extends('admin/layout')
@section('page_title','Danh sách học sinh')
@section('container')
    <h1 class="mb10">Danh sách học sinh</h1>
    <a href="{{url('admin/hocsinh')}}">
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
                                        <form action="{{route('hocsinh.themhocsinh_process')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="mahs" class="control-label mb-1">Mã Học Sinh</label>
                                                <input id="mahs" value="{{$mahs}}" name="mahs" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập mã học sinh" required>
                                                @error('mahs')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="hotenhs" class="control-label mb-1">Họ Tên Học Sinh</label>
                                                <input id="hotenhs" value="{{$hotenhs}}" name="hotenhs" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập họ tên học sinh" required>
                                                @error('hotenhs')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="diachihs" class="control-label mb-1">Địa Chỉ</label>
                                                <input id="diachihs" value="{{$diachihs}}" name="diachihs" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập địa chỉ" required>
                                                @error('diachihs')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="ngaysinhhs" class="control-label mb-1">Ngày Sinh Học Sinh</label>
                                                <input id="ngaysinhhs" value="{{$ngaysinhhs}}" name="ngaysinhhs" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập ngày sinh" required>
                                                @error('$ngaysinhhs')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="gioitinhhs" class="control-label mb-1">Giới Tính</label>
                                                <input id="gioitinhhs" value="{{$gioitinhhs}}" name="gioitinhhs" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập giới tính" required>
                                                @error('gioitinhhs')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="chieucao" class="control-label mb-1">Chiều cao</label>
                                                <input id="chieucao" value="{{$chieucao}}" name="chieucao" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập chiều cao" required>
                                                @error('chieucao')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="cannang" class="control-label mb-1">Cân nặng</label>
                                                <input id="cannang" value="{{$cannang}}" name="cannang" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập cân nặng" required>
                                                @error('cannang')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="malop" class="control-label mb-1">Thuộc lớp học</label>
                                                <select name="malop" class="form-control">
                                                    @foreach($datamalop as $list)
                                                    <option value="{{$list->malop}}">{{$list->tenlop}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    Lưu
                                                </button>
                                            </div>
                                            <input type="hidden" name="mahs" value="{{$mahs}}"/>
                                        </form>
                                    </div>
                                </div>
                            </div>






                        </div>

        </div>
    </div>

@endsection