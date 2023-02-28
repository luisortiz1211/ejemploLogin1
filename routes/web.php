<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Image\ImageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('principal');
});
//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
//Registro
Route::get('/registro', [RegisterController::class, 'index'])->name('register.index');
Route::post('/registro', [RegisterController::class, 'store'])->name('register.store');

Route::middleware('auth')->group(function () {
    //logout
    Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
    //perfil
    Route::get('/{user:username}', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/posts', [PostController::class, 'store'])->name('post.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
    //imagenes
    Route::post('/images', [ImageController::class, 'store'])->name('images.store');

    //post
});
