<?php
Route::get('/', function () {
    return view('welcome');
});

// admin quản trị
Route::group(['prefix'=>'admin'],function(){
    Route::get('', 'admin\HomeController@getIndex');
    // Quản trị loại phòng
    Route::group(['prefix'=>'roomtype'],function(){
        Route::get('','admin\RoomTypeController@getRoomType');
        Route::get('add','admin\RoomTypeController@addRoomType');
        Route::post('post','admin\RoomTypeController@postRoomType');
        Route::get('edit/{roomTypeId}','admin\RoomTypeController@editRoomType');
        Route::post('put/{roomTypeId}','admin\RoomTypeController@putRoomType');
        Route::get('delete/{roomTypeId}','admin\RoomTypeController@deleteRoomType');

        Route::get('roomtype-price','admin\RoomTypeController@getRoomTypePrice');
        Route::get('set-price/{roomTypeId}','admin\RoomTypeController@editRoomTypePrice');
        Route::post('putPrice/{roomTypeId}','admin\RoomTypeController@putRoomTypePrice');
    });

    // Quản trị bài viết giới thiệu
    Route::group(['prefix'=>'article'],function(){
        Route::get('','admin\ArticleController@getArticle');
        Route::post('put','admin\ArticleController@putArticle');
    });

    Route::get('booking','admin\BookingController@getBooking');
    Route::get('contact','admin\ContactController@getContact');
    Route::get('home','admin\HomeController@getIndex');

    // Quản trị thông tin khách sạn
    Route::group(['prefix'=>'hotel'],function(){
        Route::get('','admin\HotelController@getHotel');
        Route::post('put','admin\HotelController@putHotel');
    });
    
    // Quản trị phòng
    Route::group(['prefix'=>'room'],function(){
        Route::get('','admin\RoomController@getRoom');
        Route::get('add','admin\RoomController@addRoom');
        Route::post('post','admin\RoomController@postRoom');
        Route::get('edit/{roomId}','admin\RoomController@editRoom');
        Route::post('put/{roomId}','admin\RoomController@putRoom');
        Route::get('delete/{roomId}','admin\RoomController@deleteRoom');
    });
    Route::get('slideshow','admin\SlideShowController@getSlideShow');

    // Quản trị tài khoản
    Route::group(['prefix'=>'user'],function(){
        Route::get('','admin\UserController@getUser');
        Route::get('add','admin\UserController@addUser');
        Route::post('post','admin\UserController@postUser');
        Route::get('edit/{userName}','admin\UserController@editUser');
        Route::post('put/{userName}','admin\UserController@putUser');
        Route::get('delete/{userName}','admin\UserController@deleteUser');
    });
});
Route::get('data/user',function(){
     $data = DB::table('user')->get();
    foreach($data as $item){
        echo $item->userName.'<br>';
    }
});
Route::get('data/postUser',function(){
    $user = new App\User();
    $user->userName = "admin1";
    $user->password = "12345678";
    $user->email = "email@gmail.com";
    $user->status = 1;
    $user->save();
    echo 'success';
});
// Website
Route::get('index','HomeController@Index');