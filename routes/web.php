<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KategoriControllers;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\BcacvController;
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

Route::resource('posts', PostController::class);

//Route::resource('bsb',BsbController::class);

//test 
Route::get('/test', [TestController::class, 'index']);
Route::get('/test/template', [TestController::class, 'template']);
Route::get('/test/blank', [TestController::class, 'blank']);
Route::get('/test/datatable', [TestController::class, 'datatable']);


//password
Route::get('/password', [PasswordController::class, 'index']);
Route::post('/password/store', [PasswordController::class, 'store']);
Route::get('/password/destroy/{id}', [PasswordController::class, 'destroy']);

// BCA CV 
Route::get('/bca_cv', [PasswordController::class, 'index']);