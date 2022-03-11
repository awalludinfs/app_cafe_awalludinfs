<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuadminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PesananadminController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\TempatdudukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UseradminController;
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

//user

//kasir 
Route::get('/kasir',[TempatdudukController::class, 'kasir']);

//login
Route::get('/',[LoginController::class, 'index']);
Route::get('admincafe',[LoginController::class, 'admincafe'])->name('admincafe')->middleware('role');
Route::post('login',[LoginController::class,'Authencitace'])->name('login');

//logout
Route::post('logout',[LoginController::class, 'logout'])->name('logout');

//daftar
Route::get('/daftar',[DaftarController::class, 'index']);
Route::post('daftar',[DaftarController::class, 'store'])->name('daftar');

//menu
Route::get('/menu',[MenuController::class,'index']);

//tempat duduk
Route::get('/tempatduduk', [TempatdudukController::class, 'nomer']);//revisi

//pesanan
Route::get('/pesanan',[PesananController::class, 'index']);
// Route::get('/tpesanan',[PesananController::class, 'create']);
Route::post('tpesan',[PesananController::class, 'store'])->name('tpesan');

//navbar
Route::get('/navbar', function () {
    return view('user.navbar.main');
});

//transaksi
Route::get('/transaksi',[TransaksiController::class, 'index']);
Route::get('ttransaksi',[TransaksiController::class, 'create']);
Route::post('ttransaksi',[TransaksiController::class,  'store'])->name('ttransaksi');


//admin

//dashboard
Route::get('/manager',[TempatdudukController::class,'dashboard']);



//Menu
Route::get('/adminmenu',[MenuadminController::class, 'index']);
Route::get('/tmenu',[MenuadminController::class, 'create']);
Route::post('tmenu',[MenuadminController::class, 'store'])->name('tmenu');
Route::resource('adminmenu',MenuadminController::class); 
Route::get('/datamenu/status/{id}',[MenuadminController::class, 'status']);

//tempat Duduk
Route::get('/admintempatduduk',[TempatdudukController::class, 'index']);
Route::get('/tmeja',[TempatdudukController::class, 'create']);
Route::post('tmeja',[TempatdudukController::class,'store'])->name('tmeja');

//Pesanan
Route::get('/adminpesanan',[PesananadminController::class, 'index']);//revisi


//Data Pegawai
Route::get('/admindatapegawai',[PegawaiController::class, 'index']);
Route::get('/tpegawai',[PegawaiController::class, 'create']);
Route::post('tpegawai',[PegawaiController::class, 'store'])->name('tpegawai');
Route::resource('admindatapegawai',PegawaiController::class);// revisi

//data User
Route::get('/adminuser',[UseradminController::class, 'index']);
Route::get('/tuser',[UseradminController::class, 'create']);
Route::post('tuser',[UseradminController::class, 'store'])->name('tuser');
Route::resource('adminuser',UseradminController::class);

//Laporan
Route::get('/adminlaporantransaksi',[LaporanController::class, 'index']);
