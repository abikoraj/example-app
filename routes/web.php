<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\PostController;
use App\Models\Post;
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


Route::view('/', 'home');

Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post:id}', [PostController::class,'show'])->name('posts.show');
Route::post('/posts',[PostController::class, 'store'])->name('posts.store');
