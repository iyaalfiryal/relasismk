<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\AuthorController;

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



Route::post('register', [UserController::class, 'registerUser']);
Route::post('login', [UserController::class, 'loginUser']);
Route::post('logout', [UserController::class, 'logoutUser']);
Route::get('user/get/{id}', [UserController::class, 'getUser']);
Route::post('user/update/{id}', [UserController::class, 'updateUser']);
Route::delete('user/delete/{id}', [UserController::class, 'deleteUser']);

Route::get('books/get/{id}', [BookController::class, 'readBook']);
Route::post('books/create', [BookController::class, 'createBook']);
Route::post('books/update/{id}', [BookController::class, 'updateBook']);
Route::delete('books/delete/{id}', [BookController::class, 'deleteBook']);

Route::get('authors/get/{id}', [BookController::class, 'getAuthor']);
Route::post('authors/create', [BookController::class, 'createAuthor']);
Route::post('authors/update/{id}', [BookController::class, 'updateAuthor']);
Route::delete('authors/delete/{id}', [BookController::class, 'deleteAuthor']);

Route::get('publisher/get/{id}', [BookController::class, 'getPublisher']);
Route::post('publisher/create', [BookController::class, 'createPublisher']);
Route::post('publisher/update/{id}', [BookController::class, 'updatePublisher']);
Route::delete('publisher/delete/{id}', [BookController::class, 'deletPublisher']);

