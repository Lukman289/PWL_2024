<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     return "Hello World";
// });

// Route::get('/hello', function () {
//     return "Hello World";
// });

// Route::get('/world', function () {
//     return "World";
// });

// Route::get('/message', function () {
//     return "Selamat Datang";
// });

// Route::get('/about', function () {
//     return "Nama\t: Lukman Eka Septiawan NIM\t: 2241720049";
// });

// Route::get('/user/{name}', function ($name) {
//     return "Nama saya $name";
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return "Post ke-" . $postId . " Komentar ke-" . $commentId;
// });

// Route::get('/articles/{id}', function ($articleId) {
//     return "Halaman Artikel dengan ID $articleId";
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return "Nama saya $name";
// });

// Route::get('/user/profile', function () {
//     //
// }) -> name('profile');

// Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/', [HomeController::class,'index']);

// Route::get('/about', [AboutController::class,'about']);

// Route::get('/articles/{id}', [PageController::class,'articles']);

// Route::resource('/photos', PhotoController::class) -> only ([
//     'index', 'show'
// ]);

// Route::resource('/photos', PhotoController::class) -> except ([
//     'create', 'store', 'update', 'destroy'
// ]);

// Route::get('/greeting', function() {
//     return view('blog.hello', ['name' => 'Lukman']);
// });

Route::get('/greeting', [WelcomeController::class, 'greeting']);