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
    return view('welcome');
});

Route::get('/technology', function () {
    return view('technology');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::post('/incoming', 'ContactFormController@submit')->name('incoming');
