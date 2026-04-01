<?php

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
    return view('components/home');
})->name('home');

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
