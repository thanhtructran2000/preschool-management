use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
@extends('admin/layout')
@section('page_title','Danh sách lớp')
@section('container')
    <h1 class="mb10">Danh Sách Lớp</h1>
    <a href="{{url('admin/lop')}}">
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
                                        <form action="{{route('lop.themlop_process')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="malop" class="control-label mb-1">Mã lớp</label>
                                                <input id="malop" value="{{$malop}}" name="malop" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập mã lớp" required>
                                                @error('malop')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="tenlop" class="control-label mb-1">Tên lớp</label>
                                                <input id="tenlop" value="{{$tenlop}}" name="tenlop" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập tên lớp" required>
                                                @error('tenlop')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="siso" class="control-label mb-1">Sỉ số</label>
                                                <input id="siso" value="{{$siso}}" name="siso" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập sỉ số" required>
                                                @error('siso')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="makhoa" class="control-label mb-1">Mã khóa học</label>
                                                <select name="makhoa" class="form-control">
                                                    @foreach($datamakhoa as $list)
                                                    <option value="{{$list->makhoa}}">{{$list->makhoa}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    Lưu
                                                </button>
                                            </div>
                                            <input type="hidden" name="malop" value="{{$malop}}"/>
                                        </form>
                                    </div>
                                </div>
                            </div>






                        </div>

        </div>
    </div>

@endsection
