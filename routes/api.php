<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\API\logincontroller;
use app\Http\Controllers\postController;
use app\Http\Controllers\admin\plantController;
use app\Http\Controllers\admin\categoryController;

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

Route::get('/categories', [categoryController::class, 'index']);
Route::get('/categories/{id}', [categoryController::class, 'show']);
Route::get('/categories/search', [categoryController::class, 'search']);
Route::get('/plants', [plantController::class, 'index']);
Route::get('/plants/{id}', [plantController::class, 'show']);
Route::get('/plants/by-category/{categoryId}', [plantController::class, 'getByCategoryId']);
Route::post('/login', [logincontroller::class, 'login']);

Route::get('/posts', [postController::class, 'index']);
Route::get('/posts/{id}', [postController::class, 'show']);


