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
// Route::get($prefix . 'personnel', [PersonnelController::class, 'index']);

Route::group(['prefix'=> env('PREFIX'),'as'=>'personnel'], function(){
    Route::get('personnel/', PersonnelController::class . '@index')->name('index');
    Route::get('personnel/{id}', PersonnelController::class . '@getById')->name('getById');
    Route::post('personnel/', PersonnelController::class . '@create')->name('create');
    Route::put('personnel/{id}', PersonnelController::class . '@update')->name('update');
    Route::delete('personnel/{id}', PersonnelController::class . '@delete')->name('delete');
});

// // returns the home page with all posts
// Route::get('/', PostController::class .'@index')->name('posts.index');
// // returns the form for adding a post
// Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
// // adds a post to the database
// Route::post('/posts', PostController::class .'@store')->name('posts.store');
// // returns a page that shows a full post
// Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');
// // returns the form for editing a post
// Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');
// // updates a post
// Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');
// // deletes a post
// Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');

// Route::get($prefix . 'getProducts', [ProductController::class, 'getProducts']);
// Route::get($prefix . 'getProduct/{id}', [ProductController::class, 'getProduct']);
// Route::get($prefix . 'deleteProduct/{id}', [ProductController::class, 'deleteProduct']);