<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
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

Route::get('/', [PostController::class, 'index'])
    ->name('welcome');

Route::resource('/posts', PostController::class)
    ->only(['show']);

Route::post('/posts/{post}/like', [PostController::class, 'like'])
    ->name('post.like');

Route::post('/posts/{post}/dislike', [PostController::class, 'dislike'])
    ->name('post.dislike');

// Criar rota post /subscribe
