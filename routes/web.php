<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\BcacvController;
use App\Http\Controllers\KdbankController;
use App\Http\Controllers\NorekeningController;
use App\Http\Controllers\MyExportImportController;
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

/*Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', [TestController::class, 'blank']);

//Route::resource('posts', PostController::class);

//Route::resource('bsb',BsbController::class);

//test 
Route::get('/test', [TestController::class, 'index']);
Route::get('/test/template', [TestController::class, 'template']);
Route::get('/test/blank', [TestController::class, 'blank']);
Route::get('/test/datatable', [TestController::class, 'datatable']);
Route::get('/test/viewimage', [TestController::class, 'viewimage']);

//User
Route::get('users', [UserController::class, 'index'])->name('users.index');
//Route::delete('/users/{id}','UserController@destroy')->name('users.destroy');
//Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('karyawan/tambah', [KaryawanController::class, 'tambah'])->name('karyawan.tambah');
Route::post('karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');
Route::get('karyawan/profil/{id}', [KaryawanController::class, 'profil'])->name('karyawan.profil');

//BANK
Route::get('bcacv', [bcacvController::class, 'index'])->name('bcacv.index');
Route::get('kdbank', [KdbankController::class, 'index'])->name('kdbank.index');
Route::get('norekening', [NorekeningController::class, 'index'])->name('norekening.index');



//Post
Route::get('/posts', [PostController::class, 'index']);



//password
Route::get('/password', [PasswordController::class, 'index']);
Route::get('password/ajax', [PasswordController::class, 'ajax'])->name('password.ajax');
Route::post('/password/store', [PasswordController::class, 'store']);
Route::get('/password/destroy/{id}', [PasswordController::class, 'destroy']);
Route::get('/password/edit/{id}', [PasswordController::class, 'edit']);
Route::post('/password/update/{id}', [PasswordController::class, 'update']);


// BCA CV 
Route::get('/bank/bcacv', [BankController::class, 'bcacv']);
Route::get('bank/index', [BankController::class, 'index'])->name('bank.index');
Route::get('/bank/bcaardian', [BankController::class, 'bcaardian']);
Route::get('/bank/bcaakhdan', [BankController::class, 'bcaakhdan']);
Route::get('/bank/bcacvimport', [BankController::class, 'bcacvimport']);
Route::post('/bank/bcacvimportsave', [BankController::class, 'bcacvimportsave']);
Route::get('/bank/bcacvexport', [ BankController::class, 'bcacvexport' ])->name('bcacvexport');
Route::get('/bank/bcatempempty', [ BankController::class, 'bcatempempty' ])->name('bcatempempty');
Route::get('/bank/bcatemptocv', [ BankController::class, 'bcatemptocv' ])->name('bcatemptocv');




//Produk
Route::get('/produk', [produkController::class, 'index']);
Route::get('/produk/create', [produkController::class, 'create']);
Route::post('/produk/store', [produkController::class, 'store']);
Route::get('/produk/edit/{id}', [produkController::class, 'edit']);
Route::post('/produk/update/{id}', [produkController::class, 'update']);
Route::get('/produk/destroy/{id}', [produkController::class, 'destroy']);

//Kategori
Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/store', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::post('/kategori/update/{id}', [KategoriController::class, 'update']);
Route::get('/kategori/destroy/{id}', [KategoriController::class, 'destroy']);


// Export Import Controller
Route::get('importExportView', [ MyExportImportController::class, 'importExportView' ]);
Route::get('export', [ MyExportImportController::class, 'export' ])->name('export');
Route::post('import', [ MyExportImportController::class, 'import' ])->name('import');