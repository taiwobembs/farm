<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\SupplyController;
use App\Http\Controllers\ResponsibilityController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ToolController;


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
    Route::get('personnel/responsibilities/{id}', PersonnelController::class . '@getResponsibilities')->name('getResponsibilities');
    Route::get('personnel/supplies/{id}', PersonnelController::class . '@getSupplies')->name('getSupplies');
    Route::post('personnel', PersonnelController::class . '@create')->name('create');
    Route::put('personnel/{id}', PersonnelController::class . '@update')->name('update');
    Route::delete('personnel/{id}', PersonnelController::class . '@delete')->name('delete');
});

Route::group(['prefix'=> env('PREFIX'),'as'=>'supply.'], function(){
    Route::get('supply', SupplyController::class . '@index')->name('index');
    Route::get('supply/{id}', SupplyController::class . '@getById')->name('getById');
    Route::get('supply/status/{status}', SupplyController::class . '@getByStatus')->name('getByStatus');
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

Route::group(['prefix'=> env('PREFIX'),'as'=>'product.'], function(){
    Route::get('product', ProductController::class . '@index')->name('index');
    Route::get('product/{id}', ProductController::class . '@getById')->name('getById');
    Route::post('product', ProductController::class . '@create')->name('create');
    Route::put('product/{id}', ProductController::class . '@update')->name('update');
    Route::delete('product/{id}', ProductController::class . '@delete')->name('delete');
});

Route::group(['prefix'=> env('PREFIX'),'as'=>'tool.'], function(){
    Route::get('tool', ToolController::class . '@index')->name('index');
    Route::get('tool/{id}', ToolController::class . '@getById')->name('getById');
    Route::post('tool', ToolController::class . '@create')->name('create');
    Route::put('tool/{id}', ToolController::class . '@update')->name('update');
    Route::delete('tool/{id}', ToolController::class . '@delete')->name('delete');
});