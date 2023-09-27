<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;

//Routing login

Route::get('admin', [AuthController::class,'login'])->name('login');
Route::post('login', [AuthController::class, 'submitLogin'])->name('submitLogin');
Route::get('registration',[AuthController::class,'register'])->name('register');
Route::post('register',[AuthController::class,'registerSubmit'])->name('registerSubmit');
Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
Route::get('logout',[AuthController::class,'logout'])->name('logout');

//Routing company
Route::get('company-list',[CompanyController::class, 'index'])->name('listCompany');
Route::get('company-create',[CompanyController::class, 'create'])->name('createCompany');
Route::post('company-store',[CompanyController::class, 'store'])->name('storeCompany');
Route::get('company-edit/{id}',[CompanyController::class, 'edit'])->name('editCompany');
Route::put('company-update/{id}',[CompanyController::class, 'update'])->name('updateCompany');
Route::get('company-delete',[CompanyController::class, 'destroy'])->name('destroyCompany');


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
