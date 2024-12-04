<?php

use App\Http\Controllers\PostController;
use GuzzleHttp\Promise\Create;
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
    return view('welcome');
});

Route::get(
    'posts',
    function () {
        return view('posts');
    }
)->name('posts.index');
Route::get('/posts', [PostController::class, 'index'])->name('name.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::delete('/posts/{id}', [PostController::class, 'delete'])->name('posts.delete');
Route::put('/posts/{id}', [PostController::class, 'updatePost'])->name('posts.update');

Route::get('profile', function () {
    return view('profile');
})->name('profile.index');

Route::get('users', function () {
    return view('users');
})->name('users.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
