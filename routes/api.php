<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnelController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=> env('PREFIX'),'as'=>'personnel'], function(){
    Route::get('personnel/', PersonnelController::class . '@index')->name('index');
    Route::get('personnel/{id}', PersonnelController::class . '@getById')->name('getById');
    Route::post('personnel/', PersonnelController::class . '@create')->name('create');
    Route::put('personnel/{id}', PersonnelController::class . '@update')->name('update');
    Route::delete('personnel/{id}', PersonnelController::class . '@delete')->name('delete');
});