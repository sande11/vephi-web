<?php

use App\Http\Controllers\PostController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobPostController;

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


Route::get('profile', function () {
    return view('profile');
})->name('profile.index');

Route::get('users', function () {
    return view('users');
})->name('users.index');

Route::get('job-details', function(){
    return view('job-details');
})->name('job-details.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// job posts CRUD routes
Route::post('/home', [JobPostController::class, 'store'])->name('job-post.store');
Route::get('/home', [JobPostController::class, 'index'])->name('job-posts.index');
