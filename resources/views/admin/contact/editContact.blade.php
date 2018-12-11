@extends('admin.layout.admin_template')
@section('title', 'Thông tin liên hệ')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-phone"></i>
                    <h3 class="box-title">&nbsp Thông tin liên hệ</h3>
                </div>
                <div class="box-list">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên tài khoản :</label> <span>{{$contact->fullName}}</span> 
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại :</label> <span>{{$contact->phone}}</span> 
                        </div>
                        <div class="form-group">
                            <label>Email :</label> <span>{{$contact->email}}</span> 
                        </div>
                        <div class="form-group">
                            <label>Yêu cầu :</label> <span>{{$contact->request}}</span> 
                        </div>
                        <div>
                            <a href="/admin/contact" class="btn btn-default">Trở về</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
