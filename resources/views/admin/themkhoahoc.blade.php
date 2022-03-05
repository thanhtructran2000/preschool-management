@extends('admin/layout')
@section('page_title','Quản lý khóa học')
@section('container')
    <h1 class="mb10">Quản Lý Khóa Học</h1>
    <a href="{{url('admin/khoahoc')}}">
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
                                        <form action="{{route('khoahoc.themkhoahoc_process')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="makhoa" class="control-label mb-1">Mã khóa học</label>
                                                <input id="makhoa" value="{{$makhoa}}" name="makhoa" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập mã khóa học" required>
                                                @error('makhoa')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="hocki" class="control-label mb-1">Học kì</label>
                                                <input id="hocki" value="{{$hocki}}" name="hocki" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập học kì" required>
                                                @error('hocki')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="namhoc" class="control-label mb-1">Năm học</label>
                                                <input id="namhoc" value="{{$namhoc}}" name="namhoc" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập năm học" required>
                                                @error('namhoc')
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
                                            <input type="hidden" name="makhoa" value="{{$makhoa}}"/>
                                        </form>
                                    </div>
                                </div>
                            </div>






                        </div>

        </div>
    </div>

@endsection
