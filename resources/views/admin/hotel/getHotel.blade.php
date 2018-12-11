@extends('admin.layout.admin_template')
@section('title', 'Thông tin khách sạn')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-group"></i>
                    <h3 class="box-title">&nbsp Thông tin khách sạn</h3>
                </div>
                <div class="box-list">
                    <div class="col-md-12">
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
                            <form method="post" action="/admin/hotel/put" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Logo</label>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                   <img src="/images/{{$hotels->logo}}" alt="" style="max-width: 200px;width: 100%;border: 1px solid #f0f0f0;margin-bottom: 10px;">
                                                </div>
                                                <div class="col-sm-12">
                                                    <input require type="file" name="logo" class="form-control" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Favicon</label>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                   <img src="/images/{{$hotels->favicon}}" alt="" style="width: 45px;height: 45px;border: 1px solid #f0f0f0;margin-bottom: 10px;">
                                                </div>
                                                <div class="col-sm-12">
                                                    <input require type="file" name="favicon" class="form-control" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tên khách sạn</label>
                                            <input require value="{{$hotels->name}}" type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tel</label>
                                            <input require value="{{$hotels->tel}}" type="text" name="tel" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Hotline</label>
                                            <input require value="{{$hotels->hotline}}" type="text" name="hotline" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Fax</label>
                                            <input require value="{{$hotels->fax}}" type="text" name="fax" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input require value="{{$hotels->email}}" type="text" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input require value="{{$hotels->address}}" type="text" name="address" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input require value="{{$hotels->location}}" type="text" name="location" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Youtube</label>
                                            <input require value="{{$hotels->youtube}}" type="text" name="youtube" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>MetaTitle</label>
                                            <input require value="{{$hotels->metaTitle}}" type="text" name="metaTitle" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>MetaDescription</label>
                                            <input require value="{{$hotels->metaDescription}}" type="text" name="metaDescription" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center col-md-12" style="margin-bottom: 30px;">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
