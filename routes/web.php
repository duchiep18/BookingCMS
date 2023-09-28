<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PersonnelController;
//Routing login

Route::get('admin', [AuthController::class,'login'])->name('login');
Route::post('login', [AuthController::class, 'submitLogin'])->name('submitLogin');
Route::get('registration',[AuthController::class,'register'])->name('register');
Route::post('register',[AuthController::class,'registerSubmit'])->name('registerSubmit');
Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
Route::get('logout',[AuthController::class,'logout'])->name('logout');

//Routing company
Route::get('company/list',[CompanyController::class, 'index'])->name('listCompany');
Route::get('company/create',[CompanyController::class, 'create'])->name('createCompany');
Route::post('company/store',[CompanyController::class, 'store'])->name('storeCompany');
Route::get('company/edit/{id}',[CompanyController::class, 'edit'])->name('editCompany');
Route::put('company/update/{id}',[CompanyController::class, 'update'])->name('updateCompany');
Route::delete('company/delete/{id}',[CompanyController::class, 'destroy'])->name('destroyCompany');

//Routing nhan vien
Route::get('personnel/list',[PersonnelController::class, 'index'])->name('listPsn');
Route::get('personnel/create',[PersonnelController::class, 'create'])->name('createPsn');
Route::post('personnel/store',[PersonnelController::class, 'store'])->name('storePsn');
Route::get('personnel/edit/{id}',[PersonnelController::class, 'edit'])->name('editPsn');
Route::put('personnel/update/{id}',[PersonnelController::class, 'update'])->name('updatePsn');
Route::delete('personnel/delete/{id}',[PersonnelController::class, 'destroy'])->name('destroyPsn');

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
