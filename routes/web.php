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

    $data = [
        'name'=> 'Pino',
        'film'=> [
            "Fantozzi",
            "Il secondo tragico Fantozzi",
            "Fantozzi contro tutti"
        ],
        'stampa'=> false,
    ];

    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contatti', function () {
    return view('contact');
})->name('contact');
