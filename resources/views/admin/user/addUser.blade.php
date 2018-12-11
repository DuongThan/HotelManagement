@extends('admin.layout.admin_template')
@section('title', 'Quản lý tài khoản')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-group"></i>
                    <h3 class="box-title">&nbsp Thêm tài khoản</h3>
                </div>
                <div class="box-list">
                    <div class="col-md-6">
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
                            <form method="post" action="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label>Tên tài khoản</label>
                                    <input require type="text" name="userName" class="form-control" placeholder="Tên tài khoản">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input require type="text" name="password" class="form-control" placeholder="Mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input require type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                    <a href="/admin/user" class="btn btn-default">Trở lại</a>
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
