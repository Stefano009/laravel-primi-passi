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
            'pacco' => [
                    'salsiccia',
                    '\'nduja',
                    'soppressata',
                    'pancetta arrotolata',
                    'guanciale'
            ]
            ];
    return view('homepage', $data);
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('us');
Route::get('/contacts', function () {
    return view('contacts');
})->name('them');
