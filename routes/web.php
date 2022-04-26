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
    $parametri = [
        'links' => [
            [
                'name' => 'Pagina 1'
            ],
            [
                'name' => 'Pagina 2'
            ],
            [
                'name' => 'Pagina 3'
            ],
            [
                'name' => 'Pagina 4'
            ]
        ],
    ];
    return view('home', $parametri);
})->name('home');

Route::get('/head', function () {
    
    return view('header1');
})->name('head');

Route::get('/head2', function () {
    return view('header2');
})->name('head2');
