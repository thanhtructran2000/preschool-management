@extends('admin/layout')
@section('page_title','Thực đơn')
@section('container')
    <h1 class="mb10">Thực đơn</h1>
    <a href="{{url('admin/thucdon')}}">
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
                                        <form action="{{route('thucdon.themthucdon_process')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="mathucdon" class="control-label mb-1">Mã thực đơn</label>
                                                <input id="mathucdon" value="{{$mathucdon}}" name="mathucdon" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập mã thực đơn" required>
                                                @error('mathucdon')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="thu" class="control-label mb-1">Thứ</label>
                                                <input id="thu" value="{{$thu}}" name="thu" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập thứ" required>
                                                @error('thu')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="trua" class="control-label mb-1">Buổi trưa</label>
                                                <input id="trua" value="{{$trua}}" name="trua" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập buổi trưa" required>
                                                @error('trua')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="chieu" class="control-label mb-1">Buổi chiều</label>
                                                <input id="chieu" value="{{$chieu}}" name="chieu" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập buổi chiều" required>
                                                @error('chieu')
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
                                            <input type="hidden" name="mathucdon" value="{{$mathucdon}}"/>
                                        </form>
                                    </div>
                                </div>
                            </div>






                        </div>

        </div>
    </div>

@endsection
