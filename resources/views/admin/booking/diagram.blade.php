@extends('admin.layout.admin_template')
@section('title', 'Sơ đồ phòng')

@section("content")
<section class="content container-fluid" ng-app="app" ng-controller="controller">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-sitemap"></i>
                    <h3 class="box-title">&nbsp Sơ đồ phòng</h3>
                </div>
                <div class="box-list">
                    <div class="col-md-12" style="margin-bottom:20px">
                        <button class="btn btn-success room-empty" style="margin-right:10px">Phòng trống</button>
                        <button class="btn btn-danger room-checkin" style="margin-right:10px">Đã checkin</button>
                        <button class="btn btn-warning room-wait-checkin" style="margin-right:10px">Đã đặt nhưng
                            chưa checkin</button>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            @foreach($rooms as $item)
                            <div ng-click="showPopup({{$item->bookingId}},{{$item->trangthaidatphong}},{{$item->code}},{{$item->totalMoney}})"
                                class="col-md-2">
                                <div class="room-detail {{$item->trangthaidatphong == 1?'room-checkin':''}} {{$item->trangthaidatphong == 0?'room-empty':''}} {{$item->trangthaidatphong == 2?'room-wait-checkin':''}}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="roomtype-name">{{$item->title}}</h5>
                                            <h3 class="room-name">{{$item->code}}</h3>
                                        </div>
                                        <div class="col-md-12" style="height: 35px;">
                                            @if($item->trangthaidatphong == 1 || $item->trangthaidatphong == 2)
                                            <h5 style="padding-left: 10px;"> <i class="fa fa-user"></i>
                                                {{$item->guest}}</h5>
                                            @else
                                            <h5 style="text-align: center;">Nhận phòng nhanh</h5>
                                            @endif
                                        </div>
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
</section>
<div class="modal fade" id="modalBook" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="/admin/booking/quick-book">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nhận phòng nhanh</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Phòng</label>
                                <input id="roomCode" readonly type="text" name="roomCode" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tên khách</label>
                                <input value="Tên khách" require type="text" name="fullName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ngày đến</label>
                                <input value="{{date('Y-m-d')}}" require type="date" name="checkIn" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ngày đi</label>
                                <input value="{{date('Y-m-d')}}" require type="date" name="checkOut" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Giá phòng</label>
                                <input value="0" require type="text" name="totalMoney" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Số lượng khách</label>
                                <input value="2" require type="text" name="adult" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Nhận phòng nhanh</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modalCheckOut" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="/admin/booking/quick-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Trả phòng nhanh</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Mã đặt phòng</label>
                        <input readonly id="bookingId" type="text" name="bookingId" class="form-control">
                    </div>
                    <p>Bạn có muốn trả phòng không? <span id="totalMoney"></span> ₫</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Trả phòng nhanh</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modalCheckIn" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="/admin/booking/quick-checkin">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nhận phòng nhanh</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Mã đặt phòng</label>
                        <input readonly id="bookingCheckinId" type="text" name="bookingId" class="form-control">
                    </div>
                    <p>Bạn có muốn nhận phòng không?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Nhận phòng nhanh</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    var app = angular.module("app", ['ngSanitize']);
    app.controller('controller', function ($scope, $http) {
        $scope.roomBooks = [];
        $scope.totalPrice = 0;
        $scope.showPopup = function (bookingId, trangthaibooking, roomCode, totalMoney) {
            if (bookingId == -1) {
                $("#roomCode").val(roomCode);
                $scope.showPopupBook();
                return;
            }
            if (trangthaibooking == 1) {
                $("#bookingId").val(bookingId);
                $("#totalMoney").html(totalMoney);
                $scope.showPopupCheckout(bookingId)
            } else if (trangthaibooking == 2) {
                $("#bookingCheckinId").val(bookingId);
                $scope.showPopupCheckin(bookingId)
            }
        }
        $scope.showPopupBook = function () {
            $("#modalBook").modal();
        }
        $scope.showPopupCheckout = function (bookingId) {
            $("#modalCheckOut").modal();
        }
        $scope.showPopupCheckin = function (bookingId) {
            $("#modalCheckIn").modal();
        }
    });

</script>
@endsection
