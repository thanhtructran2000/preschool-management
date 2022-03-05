@extends('admin/layout')
@section('page_title','Thư viện ảnh')
@section('container')

@if($maanh>0)
    {{$image_required=""}}
@else
    {{$image_required="required"}}
@endif

    <h1 class="mb10">Thư viện ảnh</h1>
    <a href="{{url('admin/thuvienanh')}}">
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
                                        <form action="{{route('thuvienanh.themthuvienanh_process')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="maanh" class="control-label mb-1">Mã ảnh</label>
                                                <input id="maanh" value="{{$maanh}}" name="maanh" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                @error('maanh')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="tieudeanh" class="control-label mb-1">Tiêu đề ảnh</label>
                                                <input id="tieudeanh" value="{{$tieudeanh}}" name="tieudeanh" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                @error('tieudeanh')
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
                                            <input type="hidden" name="maanh" value="{{$maanh}}"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           
                           
                            
                            
                            
                            
                        </div>
                        
        </div>
    </div>
                        
@endsection