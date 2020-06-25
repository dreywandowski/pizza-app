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
    return view('welcome');
});


// Routes are responsible for rendering the pages (views) for the end-user, by using Controllers
Route::get('/mine', 'Pizza@index');


// Wildcard parameter
Route::get('/mine/{id}', 'Pizza@show');

