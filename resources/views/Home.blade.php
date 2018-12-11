<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nhóm 2 Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset("/css/layout.css")}}">
    <link rel="stylesheet" href="{{ asset("/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/bower_components/Ionicons/css/ionicons.min.css")}}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding: 10px 15px;">
                <a href="/" style="color: #3e4d5c">
                    <span class="con-item uppercaseText"><i style="font-size: 17px" class="fa fa-home fa-fw"></i>ezBooking
                        Demo</span>
                </a>
                <span class="con-item" style="margin-right: 8px;margin-left: 3px;">
                    <i class="glyphicon glyphicon-star" style="color: #ffd600; font-size: 14px" aria-hidden="true"></i>
                    <i class="glyphicon glyphicon-star" style="color: #ffd600; font-size: 14px" aria-hidden="true"></i>
                    <i class="glyphicon glyphicon-star" style="color: #ffd600; font-size: 14px" aria-hidden="true"></i>
                    <i class="glyphicon glyphicon-star" style="color: #ffd600; font-size: 14px" aria-hidden="true"></i>
                    <i class="glyphicon glyphicon-star" style="color: #ffd600; font-size: 14px" aria-hidden="true"></i>
                </span>
                <span class="con-item"><i style="font-size: 15px;" class="fa fa-envelope fa-fw"></i>Email: <a href="mailto:nhom2hotel@gmail.vn"
                        style="color: #3e4d5c">nhom2hotel@gmail.vn</a></span>
                <span class="con-item"><i style="font-size: 15px;" class="fa fa-phone-square fa-fw"></i>Hotline: <a
                        href="tel:1900 6159" style="color: #3e4d5c">1900 6159</a></span>
                <span class="con-item"><i style="font-size: 15px" class="fa fa-globe fa-fw"></i>Website: <a href="https://nhom2hotel.vn"
                        style="color: #3e4d5c">https://nhom2hotel.vn</a></span>
            </div>
            <div class="col-md-12">
                <nav class="navbar navbar-default" style="margin-bottom: 5px;">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a>
                                <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg")}}" style="height: 50px;">
                            </a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Booking</a></li>
                            <li><a href="#">Liên hệ</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

                        <div class="item active">
                            <img src="/images/1544527937.1811_NhatTet.jpg" alt="Los Angeles" style="width:100%;">
                        </div>
                        <div class="item">
                            <img src="/images/1544528281.1811_DuXuanxuDai.jpg" alt="Chicago" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="/images/1544528262.1811_hanquocTetKyHoi.jpg" alt="New York" style="width:100%;">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>


            <div class="col-md-12 box-search-room" style="padding-top: 15px;">
                <fieldset>
                    <legend>Tìm phòng trống</legend>
                    <div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span class="hotel-search-label">Ngày đến:</span>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input id="checkInDate" type="text" class="form-control custom-control hasDatepicker"
                                            name="checkInDate" value="11-12-2018" maxlength="10">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span class="hotel-search-label">Ngày đi:</span>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input id="checkInDate" type="text" class="form-control custom-control hasDatepicker"
                                            name="checkInDate" value="11-12-2018" maxlength="10">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <span class="hotel-search-label">Người lớn:</span>
                                    <select class="form-control">
                                        @for ($i =1; $i <= 10 ; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <span class="hotel-search-label">Trẻ em:</span>
                                    <select class="form-control">
                                        @for ($i =1; $i <= 10 ; $i++) <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 text-right">
                                <div class="form-group">
                                    <span class="hotel-search-label"></span>
                                    <button class="btn btn-primary" style="margin-top: 18px;">Tìm phòng trống</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="footer">
        <span id="copyright">Copyright © 2018 <a href="https://nhom2hotel.vn">https://nhom2hotel.vn</a>.</span> </div>
</body>

</html>
