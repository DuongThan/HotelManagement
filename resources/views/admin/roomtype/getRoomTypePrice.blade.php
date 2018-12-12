@extends('admin.layout.admin_template')
@section('title', 'Cài đặt giá phòng')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-star"></i>
                    <h3 class="box-title">&nbsp Cài đặt giá phòng</h3>
                </div>
                <div class="box-list">
                    <div class="col-md-12">
                        @if(session('notification'))
                        <div class="alert alert-success">
                            {{session('notification')}}
                        </div>
                        @endif
                        <div>
                            <table id="datatable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:30px">#</th>
                                        <th>Tên loại phòng</th>
                                        <th style="width:70px">Hình ảnh</th>
                                        <th style="width:150px">Giá (₫)</th>
                                        <th style="width:150px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($roomtypes as $item)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{$item->title}}</td>
                                        <td class="text-center">
                                            <img src="/images/{{$item->image}}" alt="">
                                        </td>
                                        <td>{{number_format($item->price ,0 ,'.' ,'.')}}</td>
                                        <td class="text-center">
                                            <a href="/admin/roomtype/set-price/{{$item->roomTypeId}}" class="btn btn-primary btn-sm">Cài đặt giá</a>
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
