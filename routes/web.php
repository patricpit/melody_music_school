<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Admin\UserController;

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

/*
 Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', [PagesController::class, 'index']);



Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blog', [\App\Http\Controllers\PagesController::class, 'blog'])->name('blog');

Route::get('/enroll', [\App\Http\Controllers\PagesController::class, 'enroll'])->name('enroll');

Route::get('/about', [\App\Http\Controllers\PagesController::class, 'about'])->name('about');

//Admin Routes
Route::prefix('admin')->middleware(['auth', 'auth.isAdmin', 'verified'])->name('admin.')->group(function (){
    Route::resource('/users', UserController::class);      
});

Route::middleware(['auth'])->group(function () {
    Route::resource('/music_lessons', PostsController::class);
});



