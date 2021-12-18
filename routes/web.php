<?php

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
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoaitinController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersModelController;
use App\Http\Controllers\TheloaiController;
use App\Http\Controllers\TinController;
use App\Http\Controllers\CommentController;

Auth::routes();
//route user
Route::get('/', [UserController::class, 'index']);
Route::get('/test', [UserController::class, 'test']);
Route::get('/gt', [UserController::class, 'gioithieu']);
Route::get('/lh', [UserController::class, 'lienhe']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/register/xulyRegister', [UserController::class, 'xulyRegister']);
Route::get('/chitiettin/{id}', [UserController::class, 'chitiettin']);
Route::get('/chitiettin/delete/{idCmt}', [UserController::class, 'deleteCMT']);
Route::post('/chitiettin/insertCmt', [UserController::class, 'insertCmt']);
Route::post('/chitiettin/UserAndCmt', [UserController::class, 'UserAndCmt']);
Route::get('/search', [UserController::class, 'search']);
Route::get('/quenpass', [UserController::class, 'quenpass']);
Route::post('/resetpass', [UserController::class, 'resetpass']);

//route admin
//admin login
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);

//admin loaitin
Route::get('/admin/loaitin', [LoaitinController::class, 'index']);
Route::get('/admin/loaitin/En', [LoaitinController::class, 'indexEn']);
Route::get('/admin/loaitin/add', [LoaitinController::class, 'create']);
Route::post('/admin/loaitin/insert', [LoaitinController::class, 'insert']);
Route::post('/admin/loaitin/update', [LoaitinController::class, 'update']);
Route::get('/admin/loaitin/delete/{id}', [LoaitinController::class, 'delete']);
Route::get('/admin/loaitin/edit/{id}', [LoaitinController::class, 'edit']);

//admin taikhoan
Route::get('/admin/taikhoan', [UsersModelController::class, 'index']);
Route::get('/admin/taikhoan/add', [UsersModelController::class, 'create']);
Route::post('/admin/taikhoan/insert', [UsersModelController::class, 'insert']);
Route::post('/admin/taikhoan/update', [UsersModelController::class, 'update']);
Route::get('/admin/taikhoan/delete/{id}', [UsersModelController::class, 'delete']);
Route::get('/admin/taikhoan/edit/{id}', [UsersModelController::class, 'edit']);

//admin theloai
Route::get('/admin/theloai', [TheloaiController::class, 'index']);
Route::get('/admin/theloai/add', [TheloaiController::class, 'create']);
Route::post('/admin/theloai/insert', [TheloaiController::class, 'insert']);
Route::post('/admin/theloai/update', [TheloaiController::class, 'update']);
Route::get('/admin/theloai/delete/{id}', [TheloaiController::class, 'delete']);
Route::get('/admin/theloai/edit/{id}', [TheloaiController::class, 'edit']);

//admin tintuc
Route::get('/admin/tintuc', [TinController::class, 'index']);
Route::get('/admin/tintuc/private', [TinController::class, 'private']);
Route::get('/admin/tintuc/add', [TinController::class, 'create']);
Route::post('/admin/tintuc/insert', [TinController::class, 'insert']);
Route::post('/admin/tintuc/update', [TinController::class, 'update']);
Route::get('/admin/tintuc/delete/{id}', [TinController::class, 'delete']);
Route::get('/admin/tintuc/edit/{id}', [TinController::class, 'edit']);

//admin binhluan
Route::get('/admin/binhluan', [CommentController::class, 'index']);
Route::get('/admin/binhluan/delete/{id}', [CommentController::class, 'delete']);
Route::get('/detail/{id}', [CommentController::class, 'detail']);
