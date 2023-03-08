<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;


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
Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('inicio');
});


Route::get('/formulario', [RegisterController::class,'index']);
Route::post('/formulario', [RegisterController::class, 'store']);

Route::get('/inicio', [LoginController::class, 'index'])->name('login');
Route::post('/inicio', [LoginController::class, 'store']);

Route::get('/{user:username}', [PostController::class, 'index'])->name('post.index');
Route::get('/dashboard/create', [PostController::class, 'create'])->name('post.create');

Route::get('/imagenes', [ImagenController::class, 'store'])->name('imagenes');

Route::post('/salir', [LogoutController::class, 'store'])->name('logout');
