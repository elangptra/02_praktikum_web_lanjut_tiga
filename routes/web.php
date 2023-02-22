<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Nomor 1
Route::get('/', [HomeController::class, 'index']);

// Nomor 2
Route::prefix('/category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'edu']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'kids']);
    Route::get('/riri-story-books', [ProductController::class, 'books']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kidsSongs']);
});

// Nomor 3
Route::get('/news/{berita?}', [NewsController::class,'news']);

// Nomor 4
Route::prefix('/program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'ki']);
});

// Nomor 5
Route::get('/about-us', function(){
    return redirect() -> to('https://www.educastudio.com/about-us');
});

// Nomor 6
Route::resource('/contact-us', ContactController::class, [
    'only' => ['index', 'create', 'store']
]);