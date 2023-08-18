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

Route::get('/categories', [categoryApi::class, 'index']);
Route::get('/categories/{id}', [categoryApi::class, 'show']);
Route::get('/categories/search', [categoryApi::class, 'search']);
Route::get('/plants', [planttApi::class, 'index']);
Route::get('/plants/{id}', [planttApi::class, 'show']);
Route::get('/plants/by-category/{categoryId}', [planttApi::class, 'getByCategoryId']);
Route::post('/login', [logincontroller::class, 'login']);

Route::get('/posts', [postController::class, 'index']);
Route::get('/posts/{id}', [postController::class, 'show']);


