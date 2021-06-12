<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/sinh-vien/{name}', [StudentController::class, 'index']);

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/trang-chu',function(){
    return "Trang chu";
});

Route::get('/trang-ca-nhan',function(){
    return "Trang ca nhan";
});

Route::get('/thong-tin',function(){
    return "Thong tin";
});