<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PembacaController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\UseraccessController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/coba',function(){
    return 'coba';
});

// admin
Route::post('/admin/add', [AdminController::class,'store']);

// useraccess
Route::post('useraccess/add', [UseraccessController::class,'store']);

// pembaca
Route::post('pembaca/add', [PembacaController::class,'store']);

// penulis
Route::post('penulis/add', [PenulisController::class,'store']);