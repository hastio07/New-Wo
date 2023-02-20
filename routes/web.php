<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/Dashboard');
});
Route::get('/manageakun', function () {
    return view('ManageAkun');
});
Route::get('/dashboard', function () {
    return view('Dashboard');
});
Route::get('/managejadwal', function () {
    return view('ManageJadwal');
});
Route::get('/manage-produk', function () {
    return view('ManageProduk');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/manage-gallery', function () {
    return view('ManageGallery');
});
Route::get('/manage-pesanan', function () {
    return view('ManagePesanan');
});
