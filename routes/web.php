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

/*
Route::get('/', function () {
    return '<h1 style=text-align:center>Welcome!<h1>';
});
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/head', function () {
    return view('header');
})->name('head');
