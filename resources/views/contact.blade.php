@extends('layout')
@section('title', 'Xác nhận đặt phòng')
@section("content")
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
<div class="col-md-12 text-center">
    <a href="/" class="btn btn-primary" type="submit">Trở về</a>
</div>
@else
<div class="row">
    <div class="col-md-12">
        <div class="sectionTitle">
            <h2><span class="lightBg">Liên hệ</span></h2>
            <p></p>
            <p>
                Những thắc mắc và phản hội sẽ góp phần giúp khách sạn chúng tôi cải thiện tốt hơn để mang đến sự chăm
                sóc tốt nhất cho khách hàng
            </p>
            <p></p>
        </div>
    </div>
</div>
<div class="row" style="margin-top:10px">
    <form method="post" action="postContact">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
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
                <span class="hotel-search-label">Yêu cầu thêm:</span>
                <textarea name="requestData" value=" " rows="3" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button class="btn btn-primary" type="submit">Gửi</button>
        </div>
    </form>
</div>
@endif
@endsection
