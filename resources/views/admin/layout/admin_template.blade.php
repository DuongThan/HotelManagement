<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/bower_components/Ionicons/css/ionicons.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue-light.min.css")}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
                    <li><a href="/admin/article"><i class="fa fa-book"></i> <span>Bài viết</span></a></li>
                    <li><a href="/admin/gallery"><i class="fa fa-camera"></i> <span>Gallery</span></a></li>
                    <li><a href="/admin/slideshow"><i class="fa fa-video-camera"></i> <span>Slide ảnh</span></a></li>
                    <li class="treeview">
                        <a>
                            <i class="fa fa-star"></i> <span>Phòng</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="/admin/room"><i class="fa fa-circle-o"></i>Danh sách phòng</a></li>
                            <li><a href="/admin/room-price"><i class="fa fa-circle-o"></i>Cài đặt giá</a></li>
                        </ul>
                    </li>
                    <li><a href="/admin/booking"><i class="fa fa-envelope"></i> <span>Booking</span></a></li>
                    <li><a href="/admin/contact"><i class="fa fa-phone"></i> <span>Liên hệ</span></a></li>
                    <li><a href="/admin/user"><i class="fa fa-group"></i> <span>Người dùng</span></a></li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>  
                    Page Header
                    <small>Optional description</small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">
              
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane active" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:;">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="pull-right-container">
                                        <span class="label label-danger pull-right">70%</span>
                                    </span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <div class="control-sidebar-bg"></div>
    </div>
    <script src="{{ asset("/bower_components/jquery/dist/jquery.min.js")}}"></script>
    <script src="{{ asset("/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
    <script src="{{ asset("/bower_components/admin-lte/dist/js/adminlte.min.js")}}"></script>
</body>

</html>
