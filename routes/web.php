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
        'nome' =>'Luca',
        'cognome' => 'Ponz.',
        'corso' => 'boolean',
        'classe' => '70',
        'teachers' => [
            'Gianluca L.',
            'Mauro F.',
            'Tiziano N.',
        ],
    ];
    return view('home', $data);
});
