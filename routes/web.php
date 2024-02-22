<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RoomLevelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\FrontEndController;
//Routing login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'submitLogin'])->name('submitLogin');
Route::get('registration', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'registerSubmit'])->name('registerSubmit');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//FrontEnd section start
Route::get('/home', [FrontEndController::class, 'home'])->name('home');

//BackEnd section start
Route::group(['prefix' => '/admin','middleware'=>['auth','admin']], function () {
    Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/file-manager',function(){
        return view('layouts.file-manager');
    })->name('file-manager');

    Route::resource('banner',BannerController::class);
    Route::resource('hotel',HotelController::class);
    Route::resource('location',LocationController::class);
    Route::resource('room_level',RoomLevelController::class);
    Route::resource('room',RoomController::class);
});

// User section start
//Route::group(['prefix'=>'/user','middleware'=>['user']],function(){
//    Route::get('/','HomeController@index')->name('user');
//    // Profile
//    Route::get('/profile','HomeController@profile')->name('user-profile');
//    Route::post('/profile/{id}','HomeController@profileUpdate')->name('user-profile-update');
//    //  Order
//    Route::get('/order',"HomeController@orderIndex")->name('user.order.index');
//    Route::get('/order/show/{id}',"HomeController@orderShow")->name('user.order.show');
//    Route::delete('/order/delete/{id}','HomeController@userOrderDelete')->name('user.order.delete');
//    // Product Review
//    Route::get('/user-review','HomeController@productReviewIndex')->name('user.productreview.index');
//    Route::delete('/user-review/delete/{id}','HomeController@productReviewDelete')->name('user.productreview.delete');
//    Route::get('/user-review/edit/{id}','HomeController@productReviewEdit')->name('user.productreview.edit');
//    Route::patch('/user-review/update/{id}','HomeController@productReviewUpdate')->name('user.productreview.update');
//
//
//    // Password Change
//    Route::get('change-password', 'HomeController@changePassword')->name('user.change.password.form');
//    Route::post('change-password', 'HomeController@changPasswordStore')->name('change.password');

//});
