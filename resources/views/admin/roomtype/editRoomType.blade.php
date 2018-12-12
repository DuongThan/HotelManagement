@extends('admin.layout.admin_template')
@section('title', 'Chỉnh sửa loại phòng')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-star"></i>
                    <h3 class="box-title">&nbsp Chỉnh sửa loại phòng</h3>
                </div>
                <div class="box-list">
                    <div class="col-md-6">
                        @if($roomtype == null)
                        <div class="alert alert-danger">
                            Loại phòng không tồn tại
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
                            <form enctype="multipart/form-data" method="post" action="/admin/roomtype/put/{{$roomtype->roomTypeId}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label>Tên loại phòng : <span>{{$roomtype->title}}</span> </label>
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <input require type="file" name="input_img" class="form-control" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label>Giới thiệu phòng</label>
                                    <textarea value="{{$roomtype->description}}" name="description" cols="20" rows="8">{!! Request::old('description', $roomtype->description) !!}</textarea>
                                    <script type="text/javascript">
                                        var editor2 = CKEDITOR.replace('description', {
                                            language: 'vi',
                                            filebrowserBrowseUrl: '../../ckfinder/ckfinder.html',
                                            filebrowserImageBrowseUrl: '../../ckfinder/ckfinder.html?type=Images',
                                            filebrowserFlashBrowseUrl: '../../ckfinder/ckfinder.html?type=Flash',
                                            filebrowserUploadUrl: '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                            filebrowserImageUploadUrl: '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                            filebrowserFlashUploadUrl: '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                        });

                                    </script>
                                </div>
                                <div class="form-group">
                                    <label>Thứ tự</label>
                                    <input value="{{$roomtype->index}}" require type="number" min="0" value="0" name="index" class="form-control">
                                </div>
                                <div style="margin-bottom:50px">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    <a href="/admin/roomtype" class="btn btn-default">Trở về danh sách loại phòng</a>
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
