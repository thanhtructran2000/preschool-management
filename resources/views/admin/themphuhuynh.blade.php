use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
@extends('admin/layout')
@section('page_title','Thông tin phụ huynh')
@section('container')
    <h1 class="mb10">Thông tin phụ huynh</h1>
    <a href="{{url('admin/phuhuynh')}}">
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
                                        <form action="{{route('phuhuynh.themphuhuynh_process')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="maph" class="control-label mb-1">Mã phụ huynh</label>
                                                <input id="maph" value="{{$maph}}" name="maph" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập mã phụ huynh" required>
                                                @error('maph')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="hotenph" class="control-label mb-1">Họ tên</label>
                                                <input id="hotenph" value="{{$hotenph}}" name="hotenph" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập họ tên phụ huynh" required>
                                                @error('hotenph')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="gioitinhph" class="control-label mb-1">Giới tính</label>
                                                <input id="gioitinhph" value="{{$gioitinhph}}" name="gioitinhph" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập giới tính" required>
                                                @error('gioitinhph')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="diachiph" class="control-label mb-1">Địa chỉ</label>
                                                <input id="diachiph" value="{{$diachiph}}" name="diachiph" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập địa chỉ" required>
                                                @error('diachiph')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="sdt" class="control-label mb-1">Số điện thoại</label>
                                                <input id="sdt" value="{{$sdt}}" name="sdt" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập số điện thoại" required>
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
                                            <div class="form-group">
                                                <label for="mahs" class="control-label mb-1">Phụ huynh học sinh</label>
                                                <select name="mahs" class="form-control">
                                                    @foreach($datamahs as $list)
                                                    <option value="{{$list->mahs}}">{{$list->hotenhs}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    Lưu
                                                </button>
                                            </div>
                                            <input type="hidden" name="maph" value="{{$maph}}"/>
                                        </form>
                                    </div>
                                </div>
                            </div>






                        </div>

        </div>
    </div>

@endsection
