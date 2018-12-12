<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset("/css/layout.css")}}">
    <link rel="stylesheet" href="{{ asset("/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/bower_components/Ionicons/css/ionicons.min.css")}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-sanitize.js"></script>
	
</head>

<body>
    <div class="row" style="background: #f9f9f9;margin: 0;">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="padding: 10px 15px;">
                        <a href="/">
                            <span class="con-item uppercaseText"><i class="fa fa-home fa-fw"></i>
                            {{ Session::get('hotel')->name }}</span>
                        </a>
                        <span class="con-item">
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                        </span>
                        <span class="con-item">
                            <i class="fa fa-envelope fa-fw"></i>Email:
                            <a href="{{ Session::get('hotel')->email }}">{{ Session::get('hotel')->email }}</a></span>
                        <span class="con-item">
                            <i class="fa fa-phone-square fa-fw"></i> Hotline:
                            <a href="tel:{{ Session::get('hotel')->hotline }}">{{ Session::get('hotel')->hotline }}</a></span>
                        <span class="con-item">
                            <i class="fa fa-globe fa-fw"></i>Địa chỉ:
                            <a href="{{ Session::get('hotel')->address }}" style="color: #3e4d5c">{{ Session::get('hotel')->address }}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row box-menu" style="margin: 0;">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav style="margin-bottom: 5px;">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <a href="/">
                                        <img src="/images/{{ Session::get('hotel')->logo }}">
                                    </a>
                                </div>
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="/gioi-thieu">Giới thiệu</a></li>
                                    <li><a href="/dat-phong">Booking</a></li>
                                    <li><a href="/lien-he">Liên hệ</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

    </div>
    <div class="container">
        <div class="row" style="margin-top: 10px;">
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
                @yield('content')
            </div>
        </div>
    </div>
    <div class="footer">
        <span id="copyright">Copyright © 2018 <a href="https://nhom2hotel.vn">https://nhom2hotel.vn</a>.</span> </div>
</body>

</html>
