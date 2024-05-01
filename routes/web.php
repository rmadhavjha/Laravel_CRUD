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

//Route::get('/', function () {
//    return view('welcome');
//});

//Group

Route::controller(UserController::class)->group(function ()
{
    Route::get('/','ShowUser')->name('alluser');
    Route::get('/userprofile/{id}','singleUser')->name('user.view');
    Route::get('/updateuser/{id}',  'updateUser')->name('update.user');
    Route::get('/deleteuser/{id}',  'deleteUser')->name('delete.user');
    Route::post('/updating/{id}',  'updatingUser')->name('updating.user');
    Route::post('/adduser',  'addUser')->name('addUser');


});






//
//Route::get('/user', function () {
//    return view('user.index');
//})->name('post');
//
//Route::get('/', [\App\Http\Controllers\UserController::class, 'ShowUser'])->name('alluser');
//Route::get('/userprofile/{id}', [\App\Http\Controllers\UserController::class, 'singleUser'])->name('user.view');
//
//Route::get('/updateuser/{id}', [\App\Http\Controllers\UserController::class, 'updateUser'])->name('update.user');
//
//Route::get('/deleteuser/{id}', [\App\Http\Controllers\UserController::class, 'deleteUser'])->name('delete.user');
//
//Route::post('/adduser', [\App\Http\Controllers\UserController::class, 'addUser'])->name('addUser');

//Route::post('/adduser', [\App\Http\Controllers\UserController::class, 'addUser']);

Route::view('newuser', '/addUser');

//Route::view('welcome', '/welcome');
