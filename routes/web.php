<?php

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
    return view('start');
});
Route::get('/all', function () {
    return view('catalog');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/cart', function () {
    return view('cart');
});

Route::view('/admin', 'admin.dashboard.index');
