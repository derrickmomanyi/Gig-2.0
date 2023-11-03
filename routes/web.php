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
    return view('app');
});

Route::get('/login', function() {
    return view('pages.login');
});

Route::get('/register', function() {
    return view('pages.register');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/booth', function () {
    return view('pages.select');
});

Route::get('/select-booth', function () {
    return view('pages.selectbooth');
});

Route::get('/payment', function () {
    return view('pages.payment');
});