<?php
Route::get('/', function () {
    return view('welcome');
});

// admin quản trị
Route::group(['prefix'=>'admin'],function(){
    // Quản trị loại phòng
    Route::group(['prefix'=>'roomtype'],function(){
        Route::get('','admin\RoomTypeController@getRoomType');
        Route::get('roomtype-price','admin\RoomTypeController@getRoomTypePrice');
    });
    Route::get('', 'admin\HomeController@getIndex');
    Route::get('article','admin\ArticleController@getArticle');
    Route::get('booking','admin\BookingController@getBooking');
    Route::get('contact','admin\ContactController@getContact');
    Route::get('gallery','admin\GalleryController@getGallery');
    Route::get('home','admin\HomeController@getIndex');
    Route::get('hotel','admin\HotelController@getHotel');
    
    // Quản trị phòng
    Route::get('room','admin\RoomController@getRoom');
    Route::get('slideshow','admin\SlideShowController@getSlideShow');

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