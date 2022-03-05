@extends('admin/layout')
@section('page_title','Hoạt động')
@section('container')

@if($mahoatdong>0)
    {{$image_required=""}}
@else
    {{$image_required="required"}}
@endif

    <h1 class="mb10">Hoạt động</h1>
    <a href="{{url('admin/hoatdong')}}">
        <button type="button" class="btn btn-success">
            Trở về
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{route('hoatdong.themhoatdong_process')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="mahoatdong" class="control-label mb-1">Mã hoạt động</label>
                                                <input id="mahoatdong" value="{{$mahoatdong}}" name="mahoatdong" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                @error('mahoatdong')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="tieude" class="control-label mb-1">Tiêu đề</label>
                                                <input id="tieude" value="{{$tieude}}" name="tieude" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                @error('tieude')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="nguoidang" class="control-label mb-1">Người đăng</label>
                                                <input id="nguoidang" value="{{$nguoidang}}" name="nguoidang" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                @error('nguoidang')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="ngaydang" class="control-label mb-1">Ngày đăng</label>
                                                <input id="ngaydang" value="{{$ngaydang}}" name="ngaydang" type="date" class="form-control" aria-required="true" aria-invalid="false" required>
                                                @error('ngaydang')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="noidung" class="control-label mb-1">Nội dung</label>
                                                <input  id="noidung" value="{{$noidung}}" name="noidung" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                @error('noidung')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="image" class="control-label mb-1">Hình ảnh</label>
                                                <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false" {{$image_required}}>
                                                @error('image')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror
                                            </div>





                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    Submit
                                                </button>
                                            </div>
                                            <input type="hidden" name="mahoatdong" value="{{$mahoatdong}}"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           
                           
                            
                            
                            
                            
                        </div>
                        
        </div>
    </div>
                        
@endsection