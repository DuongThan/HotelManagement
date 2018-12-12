<?php

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

    // Quản trị thông tin khách sạn
    Route::group(['prefix'=>'contact'],function(){
        Route::get('','admin\ContactController@getContact');
        Route::get('edit/{contactId}','admin\ContactController@editContact');
        Route::get('delete/{contactId}','admin\ContactController@deleteContact');
    });

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

    // Quản trị Slideshow
    Route::group(['prefix'=>'slideshow'],function(){
        Route::get('','admin\SlideShowController@getSlideShow');
        Route::get('add','admin\SlideShowController@addSlideShow');
        Route::post('post','admin\SlideShowController@postSlideShow');
        Route::get('edit/{slideShowId}','admin\SlideShowController@editSlideShow');
        Route::post('put/{slideShowId}','admin\SlideShowController@putSlideShow');
        Route::get('delete/{slideShowId}','admin\SlideShowController@deleteSlideShow');
    });

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

// Website
Route::get('','HomeController@Index');
Route::get('gioi-thieu','HomeController@Index');
Route::get('dat-phong','BookingController@Index');
Route::get('lien-he','BookingController@Index');