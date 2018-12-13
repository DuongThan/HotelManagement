@extends('admin.layout.admin_template')
@section('title', 'Chỉnh sửa phòng')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-group"></i>
                    <h3 class="box-title">&nbsp Chỉnh sửa phòng</h3>
                </div>
                <div class="box-list">
                    <div class="col-md-6">
                        @if($room == null)
                        <div class="alert alert-danger">
                            Phòng không tồn tại
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
                            <form method="post" action="/admin/room/put/{{$room->roomId}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label>Số hiệu phòng : <span>{{$room->code}}</span> </label>
                                </div>
                                <div class="form-group">
                                    <label>Loại phòng</label>
                                    <select name="roomTypeId" class="form-control">
                                        <option value="">-- Chọn loại phòng --</option>
                                        @foreach($roomtypes as $item)
                                        <option {{$room->roomTypeId == $item->roomTypeId?'selected':''}} value="{{$item->roomTypeId}}">{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Thứ tự</label>
                                    <input require type="number" min="0" value="{{$room->index}}" name="index" class="form-control">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    <a href="/admin/room" class="btn btn-default">Trở về danh sách phòng</a>
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
