<?php
Route::get('/', function () {
    return view('welcome');
});

// admin quản trị
Route::get('admin', 'admin\HomeController@getIndex');
Route::get('admin/article','admin\ArticleController@getArticle');
Route::get('admin/booking','admin\BookingController@getBooking');
Route::get('admin/contact','admin\ContactController@getContact');
Route::get('admin/gallery','admin\GalleryController@getGallery');
Route::get('admin/home','admin\HomeController@getIndex');
Route::get('admin/hotel','admin\HotelController@getHotel');

// Quản trị phòng
Route::get('admin/room','admin\RoomController@getRoom');

// Quản trị loại phòng
Route::get('admin/roomtype','admin\RoomTypeController@getRoomType');
Route::get('admin/roomtype-price','admin\RoomTypeController@getRoomTypePrice');


Route::get('admin/slideshow','admin\SlideShowController@getSlideShow');
Route::get('admin/user','admin\UserController@getUser');
Route::get('data/user',function(){
    $data = DB::table('user')->get();
    var_dump($data);
});
// Website
Route::get('index','HomeController@Index');