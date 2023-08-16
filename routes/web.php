<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\dashboardController;
use  App\Http\Controllers\admin\categoryController;
//use app\Http\Controllers\admin\categoryController;
use  App\Http\Controllers\postController;
use  App\Http\Controllers\admin\plantController;
use App\Http\Controllers\AutheController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('qb', [db::class,'queryb']);




Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::resource('category',categoryController::class);
Route::resource('post', postController::class);
Route::resource('plant',plantController::class);


Route::get('login' , [\App\Http\Controllers\AutheController::class , 'login'])->name('login');
Route::get('logout' , [\App\Http\Controllers\AutheController::class,'logout'])->name('logout');
Route::post('authenticate' ,  [\App\Http\Controllers\AutheController::class , 'authnticate'])->name('authenticate');
Route::get('register' , [\App\Http\Controllers\AutheController::class,'Register'])->name('Register');
Route::post('doRegister' , [\App\Http\Controllers\AutheController::class , 'doRegister'])->name('do_register');







//localization 
//Route::get("locale/{lang}",localizationcontroller::class,'setlang');