<?php

/*
|--------------------------------------------------------------------------
|                        Web & Setup Routes
|--------------------------------------------------------------------------
*/


Route::get('/install','FrontendController@install');

Route::get('/clear', 'FrontendController@clear');

Route::get('/', 'FrontendController@indexpage')->name('frontEndRoot');
Route::get('/dashboard', function () { return redirect (route('user.dashboard')); });
Route::get('/admin', function () { return redirect (route('admin.dashboard')); });
Route::get('/home', function () { return redirect (route('user.dashboard')); });

/*
|--------------------------------------------------------------------------
|                         Auth Routes
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');



/*
|--------------------------------------------------------------------------
|                        Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['as'=>'admin.' , 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' =>['auth', 'admin']], function() {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/password/change','ProfileController@passChange')->name('change.password');
    Route::post('password/change','ProfileController@passChangeReq')->name('changepaswword');
    Route::get('/settings','SiteSettingsController@index')->name('settings');
    Route::post('settings-update','SiteSettingsController@store')->name('settings.store');
    Route::get('show/all_user','DashboardController@showAllUser')->name('showAllUser');
    Route::post('/export-user','DashboardController@exportUser')->name('export.onlyUser');

    Route::get('/delete/user/{id}', 'DashboardController@destroy')->name('deleteUser');

});

Route::group([
    'namespace' => '\Haruncpi\LaravelLogReader\Controllers',
    'middleware' => ['auth','admin']
],
    function () {
        Route::get(config('laravel-log-reader.view_route_path'), 'LogReaderController@getIndex');
        Route::post(config('laravel-log-reader.view_route_path'), 'LogReaderController@postDelete');
        Route::get(config('laravel-log-reader.api_route_path'), 'LogReaderController@getLogs');
    }
);

    Route::get('/product/booking/{id}','ProductBookingController@productBooking')->name('productBooking');
    Route::get('/delete/product_booking/{id}', 'ProductBookingController@productbookingDelete')->name('deleteProductBooking');
    Route::get('/product/edit/status/{id}','ProductBookingController@edit')->name('editStatus.productBooking');
    Route::post('update/product_booking/status','ProductBookingController@update')->name('update.ProductBooking');

    Route::get('/status-change/{id}','BookingController@statusChangeForBooking')->name('statusChangePage');
    Route::post('status_change','BookingController@bookingStatusStore')->name('statusChangeOpt');
    Route::get('/booking/delete/{id}', 'BookingController@delete')->name('bookingDelete');


    Route::get('/show/product','ProductController@index')->name('showProduct');
    Route::get('/add/product','ProductController@add')->name('addProduct');
    Route::post('store-product', 'ProductController@store')->name('storeProduct');
    Route::get('/product/delete/{id}', 'ProductController@delete')->name('deleteProduct');
    Route::get('/products','ProductController@allproduct')->name('allProduct');
    Route::get('/product/{productUrl}', 'ProductController@productSee')->name('productSee');
    Route::get('/product/edit/{product}','ProductController@edit')->name('editProduct');
    Route::post('/update/product','ProductController@update')->name('updateProduct');

/*
|--------------------------------------------------------------------------
|                               User Routes
|--------------------------------------------------------------------------
*/
Route::group(['as'=>'user.' ,'prefix' => 'user', 'namespace' => 'User', 'middleware' =>['auth', 'user']], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

});
Route::get('custom_booking','CustomOrderController@index')->name('customBooking');
Route::post('custom_order','CustomOrderController@store')->name('OrdercustomBooking');

/*
|--------------------------------------------------------------------------
|                            Search & Booking
|--------------------------------------------------------------------------
*/


Route::get('booking/confirmation/{id}/done','BookingController@booking_confirmation')->name('booking.confirmation');
Route::get('/booking-show','BookingController@showbooking')->name('bookingShow');




