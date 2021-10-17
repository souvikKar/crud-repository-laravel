<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[UserController::class,'showUsers'])->name('user.list');
Route::get('/user/add',[UserController::class,'addUser'])->name('add.user');
Route::post('/store/user',[UserController::class,'storeUser'])->name('store.user');
Route::get('/user/edit/{id}',[UserController::class,'getUser'])->name('user.edit');
Route::post('/update/user/{id}',[UserController::class,'updateUser'])->name('update.user');;
Route::get('/user/delete/{id}',[UserController::class,'deleteUser'])->name('user.delete');
