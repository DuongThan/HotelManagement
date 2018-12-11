@extends('admin.layout.admin_template')
@section('title', 'Chỉnh sửa slide ảnh')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-star"></i>
                    <h3 class="box-title">&nbsp Chỉnh sửa slide ảnh</h3>
                </div>
                <div class="box-list">
                    <div class="col-md-6">
                        @if($slideshow == null)
                        <div class="alert alert-danger">
                            Slide ảnh không tồn tại
                        </div>
                        @else
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{$err}} <br>
                            @endforeach
                        </div>
                        @endif
                        @if(session('notification'))
                        <div class="alert alert-success">
                            {{session('notification')}}
                        </div>
                        @endif
                        <div>
                            <form enctype="multipart/form-data" method="post" action="/admin/slideshow/put/{{$slideshow->slideShowId}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <img src="/images/{{$slideshow->image}}" alt="" style="width: 100%;">
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <input require type="file" name="input_img" class="form-control" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label>Thứ tự</label>
                                    <input value="{{$slideshow->index}}" require type="number" min="0" value="0" name="index" class="form-control">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    <a href="/admin/slideshow" class="btn btn-default">Trở về danh sách slide ảnh</a>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
