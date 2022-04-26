<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActuController;

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


Route::get('accueil', [ActuController::class,'index']);

Route::get('detail/{id}',[ActuController::class,'detail']);

Route::get('create', [ActuController::class,'create']);

Route::post('save', [ActuController::class,'save']);

Route::post('update/{id}', [ActuController::class,'update']);