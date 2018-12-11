@extends('admin.layout.admin_template')
@section('title', 'Quản lý tài khoản')
@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-group"></i>
                    <h3 class="box-title">&nbsp Người dùng</h3>
                    <button class="btn btn-primary btn-sm" style="float:right">Thêm tài khoản</button>
                </div>
                <div class="box-list">
                    <div class="col-md-12">
                        <div>
                            <table id="datatable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:30px">#</th>
                                        <th>Tên tài khoản</th>
                                        <th>Email</th>
                                        <th style="width:80px">Trạng thái</th>
                                        <th style="width:150px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Internet
                                            Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td class="text-center">
                                            <small class="label label-danger">Đã khóa</small>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-primary btn-sm">Chỉnh sửa</button>
                                            <button class="btn btn-danger btn-sm">Xóa</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Internet
                                            Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td class="text-center">
                                            <small class="label label-danger">Đã khóa</small>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-primary btn-sm">Chỉnh sửa</button>
                                            <button class="btn btn-danger btn-sm">Xóa</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Internet
                                            Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td class="text-center">
                                            <small class="label label-danger">Đã khóa</small>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-primary btn-sm">Chỉnh sửa</button>
                                            <button class="btn btn-danger btn-sm">Xóa</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Internet
                                            Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td class="text-center">
                                            <small class="label label-danger">Đã khóa</small>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-primary btn-sm">Chỉnh sửa</button>
                                            <button class="btn btn-danger btn-sm">Xóa</button>
                                        </td>
                                    </tr>
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
