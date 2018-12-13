@extends('admin.layout.admin_template')
@section('title', 'Chi tiết đặt phòng')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <form method="post" action="/admin/booking/put/{{$booking->bookingId}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-envelope"></i>
                        <h3 class="box-title">&nbsp Chi tiết đặt phòng</h3>
                    </div>
                    <div class="box-list">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Trạng thái :</label>
                                <select name="status" class="form-control" style="width:300px">
                                    <option {{$booking->status == 1?'selected':''}} value="1">Mới</option>
                                    <option {{$booking->status == 2?'selected':''}} value="2">Đã check in</option>
                                    <option {{$booking->status == 3?'selected':''}} value="3">Đã check out</option>
                                    <option {{$booking->status == 4?'selected':''}} value="4">Không đến</option>
                                    <option {{$booking->status == 5?'selected':''}} value="5">Đã hủy</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Mã đặt phòng :</label>
                                <input value="{{$booking->bookingId}}" readonly type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Loại phòng :</label>
                                <input value="{{$booking->title}}" readonly type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Số phòng:</label>
                                <div class="input-group margin" style="margin: 0;">
                                    <select name="roomId" class="form-control">
                                        <option {{$booking->roomId == -1?'selected':''}} value="">-- Chưa gán phòng --</option>
                                        @foreach($rooms as $item)
                                        <option {{$booking->roomId == $item->roomId?'selected':''}} value="{{$item->roomId}}">{{$item->code}}</option>
                                        @endforeach
                                    </select>
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-info btn-flat" type="button">Cập nhật
                                            phòng</button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tổng tiền :</label>
                                <input value="{{$booking->totalMoney}}" readonly type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ngày đến :</label>
                                <input value="{{$booking->checkIn}}" readonly type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ngày đi :</label>
                                <input value="{{$booking->checkOut}}" readonly type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ngày đặt phòng :</label>
                                <input value="{{$booking->dateBook}}" readonly type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Số khách :</label>
                                <input value="{{$booking->adult}}" readonly type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Họ tên khách :</label>
                                <input value="{{$booking->fullName}}" readonly type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email :</label>
                                <input value="{{$booking->email}}" readonly type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại :</label>
                                <input value="{{$booking->phone}}" readonly type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ :</label>
                                <input value="{{$booking->address}}" readonly type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Yêu cầu thêm :</label>
                                <textarea readonly rows="5" class="form-control">{{$booking->request}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ghi chú :</label>
                                <textarea name="note" rows="5" class="form-control">{{$booking->note}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-center" style="margin-bottom:50px">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <a href="/admin/booking" class="btn btn-default">Trở về</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
