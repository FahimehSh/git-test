<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashController::class, 'index'])->name('dashboard.index');
    Route::prefix('/categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::post('/update/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('/destroy/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });
    Route::prefix('/posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('posts.index');
        Route::get('/create', [PostController::class, 'create'])->name('posts.create');
        Route::post('/store', [PostController::class, 'store'])->name('posts.store');
        Route::get('/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
        Route::post('/update/{post}', [PostController::class, 'update'])->name('posts.update');
        Route::get('/destroy/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    });
    Route::prefix('tags')->group(function (){
        Route::get('/', [TagController::class, 'index'])->name('tags.index');
        Route::get('/create', [TagController::class, 'create'])->name('tags.create');
        Route::post('/store', [TagController::class, 'store'])->name('tags.store');
        Route::get('/show/{tag}', [TagController::class, 'show'])->name('tags.show');
        Route::get('/edit/{tag}', [TagController::class, 'edit'])->name('tags.edit');
        Route::post('/update/{tag}', [TagController::class, 'update'])->name('tags.update');
        Route::get('/destroy/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');
    });
});

//Route::resource('tags', TagController::class);


require __DIR__ . '/auth.php';
