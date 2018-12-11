@extends('admin.layout.admin_template')
@section('title', 'Danh sách liên hệ')

@section("content")
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-phone"></i>
                    <h3 class="box-title">&nbsp Danh sách liên hệ</h3>
                </div>
                <div class="box-list">
                    <div class="col-md-12">
                        <div>
                            <table id="datatable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:30px">#</th>
                                        <th>Tên liên hệ</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Yêu cầu</th>
                                        <th>Thời gian</th>
                                        <th style="width:120px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $item)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{$item->fullName}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{substr($item->request,0,80)}}...</td>
                                        <td>{{$item->date}}</td>
                                        <td class="text-center">
                                            <a href="contact/edit/{{$item->contactId}}" class="btn btn-primary btn-sm">Chi tiết</a>
                                            <button onclick="confirmDelete('{{$item->contactId}}')" class="btn btn-danger btn-sm">Xóa</button>
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
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Xác nhận xóa liên hệ</h4>
                </div>
                <div class="modal-body">
                    <p>Xác nhận xóa liên hệ này?</p>
                </div>
                <div class="modal-footer">
                    <a id="linkDelete" type="button" class="btn btn-danger">Xóa</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                </div>
            </div>

        </div>
    </div>
    <script>
        function confirmDelete(contactId) {
            $("#myModal").modal()
            $("#linkDelete").attr("href",'/admin/contact/delete/'+contactId)
        }

    </script>
</section>
@endsection
