@extends('layout')
@section('title', 'Xác nhận đặt phòng')
@section("content")
@if(count($errors) > 0)
<div class="col-md-12">
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
        {{$err}} <br>
        @endforeach
    </div>
</div>
@endif
@if(session('notification'))
<div class="col-md-12">
    <div class="alert alert-success">
        {{session('notification')}}
    </div>
</div>
<div class="col-md-12 text-center">
    <a href="/dat-phong" class="btn btn-primary" type="submit">Trở về</a>
</div>
@else
<div class="row">
    <div class="col-md-12">
        <div class="sectionTitle">
            <h2><span class="lightBg">Xác nhận đặt phòng</span></h2>
            <p></p>
            <p>
                Vui lòng điền đầy đủ thông tin liên hệ để hoàn tất quá trình đặt phòng
            </p>
            <p></p>
        </div>
    </div>
</div>
<div class="row" style="margin-top:10px">
    <div class="col-md-9">
        <form method="post" action="postBooking">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span class="hotel-search-label">Họ và tên:</span>
                        <input require value="" type="text" name="fullName" class="form-control">
                    </div>
                    <div class="form-group">
                        <span class="hotel-search-label">Email:</span>
                        <input require value="" type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <span class="hotel-search-label">Số điện thoại:</span>
                        <input require value="" type="text" name="phone" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <span class="hotel-search-label">Địa chỉ:</span>
                        <input require value="" type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <span class="hotel-search-label">Yêu cầu thêm:</span>
                        <textarea name="requestData" value=" " rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn btn-primary" type="submit">Xác nhận</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3">
        <div class="box-booking-book">
            <h5 class="header-booking-book">Thông tin đặt phòng</h5>
            <div class="col-md-12">
                <div class="form-group">
                    <span class="hotel-search-label">Ngày đến:</span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input readonly type="date" class="form-control" name="checkIn" value="{{$booking->checkIn}}"
                            maxlength="10">
                    </div>
                </div>
                <div class="form-group">
                    <span class="hotel-search-label">Ngày đi:</span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input readonly type="date" class="form-control" name="checkOut" value="{{$booking->checkOut}}"
                            maxlength="10">
                    </div>
                </div>
                <div class="form-group">
                    <span class="hotel-search-label">Số người:</span>
                    <input value="{{$booking->adult}}" type="text" readonly class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <h5 class="book-empty">Phòng đã chọn</h5>
                <ul style="padding-left: 20px;">
                    @foreach(json_decode($data) as $item)
                    <li style="color: #0088b1;">
                        {{$item->title}} x {{$item->number}}
                    </li>
                    @endforeach
                </ul>
                <h5 class="book-totalprice">
                    Tổng: <span>{{number_format($booking->totalMoney ,0 ,'.' ,'.')}} ₫</span>
                </h5>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
