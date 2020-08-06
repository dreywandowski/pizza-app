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
Route::get('/mine', 'Pizzas@index');


/** Wildcard parameter
We can use Wilcards to query information from the database in Laravel, e.g. adura.xyz/users/{{id}}, where {{id}}
is the id we are querying.
We do this by creating sepearte route paths and a seperate view
**/

Route::get('/mine/{id}', 'Pizzas@show');

