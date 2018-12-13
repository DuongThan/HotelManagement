<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/bower_components/Ionicons/css/ionicons.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue-light.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.css")}}">
    <link rel="stylesheet" href="{{ asset("/css/layout_admin.css")}}">
    <script src="{{ asset("/ckeditor/ckeditor.js")}}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-sanitize.js"></script>
</head>

<body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="/admin" class="logo">
                <span class="logo-mini"><b>H</b></span>
                <span class="logo-lg"><b>Hotel</b> Management</span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-power-off"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg")}}" class="img-circle"
                            alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Anonimous</p>
                        <a>PM</a>
                    </div>
                </div>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Điều hướng chính</li>
                    <li class="active"><a href="/admin/hotel"><i class="fa fa-home"></i> <span>Khách sạn</span></a></li>
                    <li><a href="/admin/article"><i class="fa fa-book"></i> <span>Bài viết giới thiệu</span></a></li>
                    <li><a href="/admin/slideshow"><i class="fa fa-video-camera"></i> <span>Slide ảnh</span></a></li>
                    <li class="treeview active">
                        <a>
                            <i class="fa fa-star"></i> <span>Phòng</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/admin/roomtype"><i class="fa fa-circle-o"></i>Loại phòng</a></li>
                            <li><a href="/admin/room"><i class="fa fa-circle-o"></i>Danh sách phòng</a></li>
                            <li><a href="/admin/roomtype/roomtype-price"><i class="fa fa-circle-o"></i>Cài đặt giá
                                    phòng</a></li>
                        </ul>
                    </li>
                    <li class="treeview active">
                        <a>
                            <i class="fa fa-envelope"></i> <span>Booking</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/admin/booking/diagram"><i class="fa fa-circle-o"></i>Sơ đồ phòng</a></li>
                            <li><a href="/admin/booking"><i class="fa fa-circle-o"></i>Danh sách đặt phòng</a></li>
                        </ul>
                    </li>
                    <li><a href="/admin/contact"><i class="fa fa-phone"></i> <span>Liên hệ</span></a></li>
                    <li><a href="/admin/user"><i class="fa fa-group"></i> <span>Người dùng</span></a></li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            @yield('content')
        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                Hotel Management
            </div>
            <strong>v.1.0.0</strong>
        </footer>
    </div>
    <script src="{{ asset("/bower_components/jquery/dist/jquery.min.js")}}"></script>
    <script src="{{ asset("/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
    <script src="{{ asset("/bower_components/admin-lte/dist/js/adminlte.min.js")}}"></script>
    <script src="{{ asset("/bower_components/admin-lte/plugins/datatables/jquery.dataTables.js")}}"></script>
    <script src="{{ asset("/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.min.js")}}"></script>
</body>
<script>
    $(function () {
        $('#datatable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

</script>

</html>
