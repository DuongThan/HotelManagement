@extends('admin.layout.admin_template')
@section('title', 'Cài đặt giá phòng')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-group"></i>
                    <h3 class="box-title">&nbsp Cài đặt giá phòng</h3>
                </div>
                <div class="box-list">
                    <div class="col-md-6">
                        @if($roomtype == null)
                        <div class="alert alert-danger">
                            Loại phòng không tồn tại
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
                            <form method="post" action="/admin/roomtype/putPrice/{{$roomtype->roomTypeId}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label>Tên loại phòng : <span>{{$roomtype->title}}</span> </label>
                                </div>
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input value="{{$roomtype->price}}" require type="text" name="price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Số lượng phòng bán</label>
                                    <input value="{{$roomtype->number}}" require type="number" min='0' name="number" class="form-control">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    <a href="/admin/roomtype/roomtype-price" class="btn btn-default">Trở về</a>
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
