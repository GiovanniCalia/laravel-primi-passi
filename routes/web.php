<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Foreach_;

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
    $parametri = [
        'links' => [
            [
                'name' => 'Link1'
            ],
            [
                'name' => 'Link2'
            ],
        ],
    ];
    return view('home', $parametri);
})->name('home');

Route::get('/head', function () {
    return view('header1');
})->name('Link1');

Route::get('/head2', function () {
    return view('header2');
})->name('Link2');