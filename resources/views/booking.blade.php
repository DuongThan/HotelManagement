@extends('layout')
@section('title', 'Đặt phòng')
@section("content")
<div class="row" ng-app="app" ng-controller="controller">
    <div class="col-md-12">
        <div class="sectionTitle">
            <h2><span class="lightBg">Đặt phòng khách sạn</span></h2>
            <p></p>
            <p>Khách sạn,resort đang trở thành một xu hướng kinh doanh hot nhất hiện nay. &nbsp;Điểm qua một vài thành
                phố lớn, các khách sạn, nhà nghỉ mọc lên san sát. Kéo theo trào lưu đó, các công việc liên quan đến
                khách sạn đang trở thành một thị trường tiềm năng, trong đó lễ tân khách sạn được coi là công việc
                nhiều hứa hẹn nhất. Tuy nhiên để trở thành một lễ tân khách sạn chuyên nghiệp, bạn cần gì? Đây&nbsp;là
                thắc mắc chung của hầu hết các nhân viên và ứng viên muốn theo đuổi nghề lễ tân khách sạn&nbsp;hiện nay</p>
            <p></p>
        </div>
        <div class="row" style="margin-top:10px">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-3">
                        <div class="box-booking-book" ng-cloak>
                            <h5 class="header-booking-book">Thông tin đặt phòng</h5>
                            <div class="col-md-12">
                                <form method="POST" action="search">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group">
                                        <span class="hotel-search-label">Ngày đến:</span>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            <input type="date" class="form-control" name="checkIn" value="{{$booking->checkIn}}"
                                                maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="hotel-search-label">Ngày đi:</span>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            <input type="date" class="form-control" name="checkOut" value="{{$booking->checkOut}}"
                                                maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="hotel-search-label">Số người:</span>
                                        <select name="adult" class="form-control">
                                            @for ($i =1; $i <= 15 ; $i++) <option
                                                {{$i == $booking->adult?'selected':''}} value="{{$i}}">{{$i}}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary">Tìm kiếm đặt phòng</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12" ng-if="roomBooks.length == 0">
                                <h4 class="book-empty">VUI LÒNG CHỌN PHÒNG</h4>
                            </div>
                            <div class="col-md-12" ng-if="roomBooks.length > 0">
                                <h5 class="book-empty">Phòng đã chọn</h5>
                                <ul style="padding-left: 20px;">
                                    <li ng-repeat="item in roomBooks" style="color: #0088b1;">
                                        @{{item.title}} x @{{item.number}}
                                        <i ng-click="removeBooking($index)" class="fa  fa-remove remove-booking"></i>
                                    </li>
                                </ul>
                                <h5 class="book-totalprice">
                                    Tổng: <span>@{{totalPrice |currency: '':'0'}} ₫</span>
                                </h5>
                            </div>
                            <div class="@{{roomBooks.length == 0?'hidden':''}} col-md-12 text-center" style="margin-top:20px">
                                <form method="post" action="saveSessionBooking">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="hidden" id="dataWaitPost" name="datapost" />
                                    <button class="btn btn-primary">Đặt phòng</button>
                                </form>
                            </div>
                        </div>
                    </div>
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
                                    <p class="text-center" style="font-size: 11px;">Giá chưa bao gồm thuế VAT và phí
                                        dịch vụ</p>
                                </div>
                                <div class="col-md-2 col-sm-4 text-center box-add-room">
                                    <select id="numberSelect_{{$item->roomTypeId}}" class="form-control">
                                        @for ($i =0; $i <= 5 ; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                    <button ng-click="addRoom({{$item->roomTypeId}},'{{$item->title}}',{{$item->price}})"
                                        class="btn btn-info btn-flat" type="button">Thêm phòng</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var app = angular.module("app", ['ngSanitize']);
    app.controller('controller', function ($scope, $http) {
        $scope.roomBooks = [];
        $scope.totalPrice = 0;
        $scope.addRoom = function (roomTypeId, title, price) {
            var numberBook = $("#numberSelect_" + roomTypeId).val();
            if (numberBook == 0)
                return;
            else {
                var roomBookExist = $scope.roomBooks.find(x => x.roomTypeId == roomTypeId);
                if (roomBookExist == null) {
                    var room = {
                        roomTypeId: roomTypeId,
                        title: title,
                        price: parseInt(price),
                        number: parseInt(numberBook)
                    }
                    $scope.roomBooks.push(room);
                } else
                    roomBookExist.number += parseInt(numberBook);
                $scope.totalPrice = 0;
                for (var i = 0; i < $scope.roomBooks.length; i++) {
                    $scope.totalPrice += $scope.roomBooks[i].price * $scope.roomBooks[i].number
                }
                var jsondata = JSON.stringify($scope.roomBooks);
                $("#dataWaitPost").val(jsondata)
                console.log(jsondata)
            }
        }
        $scope.removeBooking = function (index) {
            $scope.roomBooks.splice(index, 1);
            var jsondata = JSON.stringify($scope.roomBooks);
            $("#dataWaitPost").val(jsondata)
        }
    });

</script>
@endsection
