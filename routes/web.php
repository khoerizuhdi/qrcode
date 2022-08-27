<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\GenerateController;

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
    return view('test');
});


Route::get('/qr-code', [QrController::class, 'index']);

Route::post('/create', [GenerateController::class, 'index']);

Route::get('/withlogo', [QrController::class, 'withlogo']);

Route::get('/standard', [QrController::class, 'standard']);

Route::post('/create_s', [GenerateController::class, 'create_s']);

Route::post('/create_w', [GenerateController::class, 'create_w']);

Route::get('/downloadpng/{name}', [DownloadController::class, 'png']);

Route::get('/downloadsvg/{name}', [DownloadController::class, 'svg']);

Route::get('/downloadeps/{name}', [DownloadController::class, 'eps']);

