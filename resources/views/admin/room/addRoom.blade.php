@extends('admin.layout.admin_template')
@section('title', 'Thêm phòng')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-star"></i>
                    <h3 class="box-title">&nbsp Thêm phòng</h3>
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
                            <form method="post" action="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label>Loại phòng</label>
                                    <select name="roomTypeId" class="form-control">
                                        <option value="">-- Chọn loại phòng --</option>
                                        @foreach($roomtypes as $item)
                                        <option value="{{$item->roomTypeId}}">{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Số hiệu phòng</label>
                                    <input require type="text" name="code" class="form-control" placeholder="Số hiệu phòng">
                                </div>
                                <div class="form-group">
                                    <label>Thứ tự</label>
                                    <input require type="number" min="0" value="0" name="index" class="form-control">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                    <a href="/admin/room" class="btn btn-default">Trở lại</a>
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
