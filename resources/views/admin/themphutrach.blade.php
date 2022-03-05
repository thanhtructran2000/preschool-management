@extends('admin/layout')
@section('page_title','Phụ trách lớp học')
@section('container')
    <h1 class="mb10">Phụ Trách Lớp Học</h1>
    <a href="{{url('admin/phutrach')}}">
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
                                        <form action="{{route('phutrach.themphutrach_process')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="maphutrach" class="control-label mb-1">Mã phụ trách</label>
                                                <input id="maphutrach" value="{{$maphutrach}}" name="maphutrach" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập mã phụ trách" required>
                                                @error('maphutrach')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="magv" class="control-label mb-1">Tên giáo viên chủ nhiệm</label>
                                                <select name="magv" class="form-control">
                                                    @foreach($datamagv as $list)
                                                    <option value="{{$list->magv}}">{{$list->hotengv}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="malop" class="control-label mb-1">Lớp học chủ nhiệm</label>
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
                                            <input type="hidden" name="maphutrach" value="{{$maphutrach}}"/>
                                        </form>
                                    </div>
                                </div>
                            </div>






                        </div>

        </div>
    </div>

@endsection
