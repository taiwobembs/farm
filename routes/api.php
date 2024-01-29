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

$prefix = "/v1/";
Route::get($prefix . 'personnel', [PersonnelController::class, 'index']);

// Route::group(['prefix'=>'personnels','as'=>'personnel.'], function(){
//     Route::get('/', 'PersonnelController@index')->name('index');
//     Route::get('connect', 'PersonnelController@connect')->name('connect');
// });


// Route::get($prefix . 'getProducts', [ProductController::class, 'getProducts']);
// Route::get($prefix . 'getProduct/{id}', [ProductController::class, 'getProduct']);
// Route::get($prefix . 'deleteProduct/{id}', [ProductController::class, 'deleteProduct']);