<?php

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
    return view('home_pages/home');
});

Route::view('/article', 'article');
Route::view('/welcome', 'welcome');


Route::view('/article1', 'article1');

Route::view('/article2', 'article2');


Route::view('/first', 'Taps/first');

Route::view('/home', 'home_pages/home');



Route::view('/goal', 'goal');

// =========================== //
