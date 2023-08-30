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

Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')->header('Content-Type', 'text/xml');
});

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

Route::redirect('/contact', config('app.linkedin'), 301);

Route::redirect('/music', '/projects', 301);

Auth::routes();
