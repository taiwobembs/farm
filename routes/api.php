<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\SupplyController;
use App\Http\Controllers\ResponsibilityController;


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

Route::group(['prefix'=> env('PREFIX'),'as'=>'personnel.'], function(){
    Route::get('personnel', PersonnelController::class . '@index')->name('index');
    Route::get('personnel/{id}', PersonnelController::class . '@getById')->name('getById');
    Route::post('personnel', PersonnelController::class . '@create')->name('create');
    Route::put('personnel/{id}', PersonnelController::class . '@update')->name('update');
    Route::delete('personnel/{id}', PersonnelController::class . '@delete')->name('delete');
});

Route::group(['prefix'=> env('PREFIX'),'as'=>'supply.'], function(){
    Route::get('supply', SupplyController::class . '@index')->name('index');
    Route::get('supply/{id}', SupplyController::class . '@getById')->name('getById');
    Route::post('supply', SupplyController::class . '@create')->name('create');
    Route::put('supply/{id}', SupplyController::class . '@update')->name('update');
    Route::delete('supply/{id}', SupplyController::class . '@delete')->name('delete');
});

Route::group(['prefix'=> env('PREFIX'),'as'=>'responsibility.'], function(){
    Route::get('responsibility', ResponsibilityController::class . '@index')->name('index');
    Route::get('responsibility/{id}', ResponsibilityController::class . '@getById')->name('getById');
    Route::get('responsibility/status/{status}', ResponsibilityController::class . '@getByStatus')->name('getByStatus');
    Route::post('responsibility', ResponsibilityController::class . '@create')->name('create');
    Route::put('responsibility/{id}', ResponsibilityController::class . '@update')->name('update');
    Route::delete('responsibility/{id}', ResponsibilityController::class . '@delete')->name('delete');
});