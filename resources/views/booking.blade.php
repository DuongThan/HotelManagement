@extends('layout')
@section('title', 'Đặt phòng')
@section("content")
<fieldset>
    <legend>Tìm phòng trống</legend>
    <div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <span class="hotel-search-label">Ngày đến:</span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input id="checkInDate" type="date" class="form-control" name="checkInDate" value="11-12-2018"
                            maxlength="10">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <span class="hotel-search-label">Ngày đi:</span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input id="checkInDate" type="date" class="form-control" name="checkInDate" value="11-12-2018"
                            maxlength="10">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <span class="hotel-search-label">Người lớn:</span>
                    <select class="form-control">
                        @for ($i =1; $i <= 10 ; $i++) <option value="{{$i}}">{{$i}}</option>
                            @endfor
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <span class="hotel-search-label">Trẻ em:</span>
                    <select class="form-control">
                        @for ($i = 1; $i <= 5 ; $i++) <option value="{{$i}}">{{$i}}</option>
                            @endfor
                    </select>
                </div>
            </div>
            <div class="col-md-2 text-right">
                <div class="form-group">
                    <span class="hotel-search-label"></span>
                    <button class="btn btn-primary" style="margin-top: 18px;">Tìm phòng trống</button>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<div class="row" style="margin-top:10px">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-9">
                @foreach($roomtypes as $item)
                <div class="box-list-room">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <img class="room-image" src="/images/{{$item->image}}">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h4 class="room-name">{{$item->title}}</h4>
                            {!!$item->description!!}
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <h5 class="room-price text-center">{{number_format($item->price ,0 ,'.' ,'.')}} ₫</h5>
                            <p class="text-center" style="font-size: 11px;">Giá chưa bao gồm thuế VAT và phí dịch vụ</p>
                        </div>
                        <div class="col-md-2 col-sm-4 text-center box-add-room">
                            <select class="form-control">
                                <option value="0">0</option>
                                @for($i=1;$i<=$item->number;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                            <button class="btn btn-info btn-flat" type="button">Thêm phòng</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-3">
                <div class="box-booking-book">
                    <h5 class="header-booking-book">Danh sách phòng</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="book-empty">VUI LÒNG CHỌN PHÒNG</h4>
                        </div>
                        <div class="col-md-12 text-center" style="margin-top:20px">
                            <button class="btn btn-primary">Đặt phòng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
