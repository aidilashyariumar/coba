<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\PembacaController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\TulisanController;
use App\Http\Controllers\KomentarController;
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
Route::put('/admin/{id}', [AdminController::class,'update']);


// useraccess
Route::post('useraccess/add', [UseraccessController::class,'store']);

// pembaca
Route::post('pembaca/add', [PembacaController::class,'store']);

// penulis
Route::post('penulis/add', [PenulisController::class,'store']);

// tulisan
Route::post('tulisan/add', [TulisanController::class,'store']);

// komentar
Route::post('komen/add', [KomentarController::class,'store']);

// label
Route::post('label/add', [LabelController::class,'store']);