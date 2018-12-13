@extends('admin.layout.admin_template')
@section('title', 'Danh sách đặt phòng')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-phone"></i>
                    <h3 class="box-title">&nbsp Danh sách đặt phòng</h3>
                </div>
                <div class="box-list">
                    <div class="col-md-12">
                        <div>
                            <table id="datatable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:30px">Mã</th>
                                        <th>Loại phòng</th>
                                        <th>Số phòng</th>
                                        <th>Họ tên</th>
                                        <th>Ngày đến</th>
                                        <th>Ngày đi</th>
                                        <th>Số khách</th>
                                        <th>Email</th>
                                        <th>Giá phòng (₫)</th>
                                        <th>Ngày đặt</th>
                                        <th>Trạng thái</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bookings as $item)
                                    <tr>
                                        <th class="text-center">{{$item->bookingId}}</th>
                                        <td>{{$item->title}}</td>
                                        <td class="text-center">{{$item->code}}</td>
                                        <td>{{$item->fullName}}</td>
                                        <td class="text-center">{{$item->checkIn}}</td>
                                        <td class="text-center">{{$item->checkOut}}</td>
                                        <td class="text-center">{{$item->adult}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{number_format($item->totalMoney ,0 ,'.' ,'.')}}</td>
                                        <td class="text-center">{{$item->dateBook}}</td>
                                        <td class="text-center">
                                            @if($item->status == 1)
                                            <small class="label label-success">Mới</small>
                                            @elseif($item->status == 2)
                                            <small class="label label-info">Đã check in</small>
                                            @elseif($item->status == 3)
                                            <small class="label label-danger">Đã check out</small>
                                            @elseif($item->status == 4)
                                            <small class="label label-warning">Không đến</small>
                                            @elseif($item->status == 5)
                                            <small class="label label-default">Đã hủy</small>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="booking/edit/{{$item->bookingId}}" class="btn btn-primary btn-sm">Chi
                                                tiết</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
