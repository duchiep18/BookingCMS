<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('admin', [AuthController::class,'login'])->name('login');
Route::post('login', [AuthController::class, 'submitLogin'])->name('submitLogin');
Route::get('registration',[CustomAuthController::class,'register'])->name('register');
Route::post('registration',[CustomAuthController::class,'registerSubmit'])->name('register-submit');
Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
Route::get('logout',[AuthController::class,'logout'])->name('signout');




//Route::get('fake-user', function () {
//    $user = new App\Models\User;
//    $user->username = 'admin12';
//    $user->email = 'admin12@gmail.com';
//    $user->email_verify_at;
//    $user->password = Hash::make('123456');
//    $user->gender = 'male';
//    $user->role = 'admin';
//    $user->status = 'active';
//    $user->company_id = '2';
//    $user->created_at;
//    $user->updated_at;
//    $user->save();
//});
