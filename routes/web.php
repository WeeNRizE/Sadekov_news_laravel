<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;

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
Route::resource('article', ArticleController::class);

#Route::get('/articles/show', [ArticleController::class, 'index']);

Route::get('/signup', [AuthController::class, 'create']);
Route::post('/auth/login', [AuthController::class, 'registration']);

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
