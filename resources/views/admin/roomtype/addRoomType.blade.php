@extends('admin.layout.admin_template')
@section('title', 'Quản lý loại phòng')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-star"></i>
                    <h3 class="box-title">&nbsp Thêm loại phòng</h3>
                </div>
                <div class="box-list">
                    <div class="col-md-6">
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
                            <form method="post" action="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label>Tên loại phòng</label>
                                    <input require type="text" name="title" class="form-control" placeholder="Tên loại phòng">
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <input require type="file" name="input_img" class="form-control" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label>Thứ tự</label>
                                    <input require type="number" min="0" value="0" name="index" class="form-control">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                    <a href="/admin/roomtype" class="btn btn-default">Trở lại</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
