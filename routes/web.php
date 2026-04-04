<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

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
Route::resource('article', ArticleController::class)->middleware('auth:sanctum');

Route::post('/article/{article}/comments', [CommentController::class, 'store'])
    ->middleware('auth:sanctum')
    ->name('comments.store');

Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])
    ->middleware('auth:sanctum')
    ->name('comments.destroy');

#Route::get('/articles/show', [ArticleController::class, 'index']);

Route::get('/auth/create', [AuthController::class, 'create']);
Route::post('/auth/registration', [AuthController::class, 'registration']);
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/signIn', [AuthController::class, 'customLogin']);
Route::get('/auth/logout', [AuthController::class, 'logout']);

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/galery/{full_image}', [MainController::class, 'show']);

Route::get('/about', function () {
    return view('components/about');
})->name('about');

Route::get('/contacts', function () {
    $contacts = [
        'address' => 'г. Москва, ул. Несеменовская, д. 42',
        'phone' => '+7 (999) 123-45-99',
        'email' => 'onnews@yandex.ru',
        'work_time' => 'Пн–Пт: 09:00–21:00',
    ];

    return view('components/contacts', compact('contacts'));
})->name('contacts');
