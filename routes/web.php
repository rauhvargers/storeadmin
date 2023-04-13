<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('emonetas-welcome');
});

Route::get('/coin/', function () {
    return 'TODO: show a list of all coins';
});

Route::get('/coin/create', function () {
    return "TODO: return a form where user can enter information about a new coin";
});

Route::get('/coin/{slug}', function (string $slug) {
    return "TODO: look up coin by its url slug (" . htmlspecialchars($slug) . ") and display its data";
});

Route::get('/coin/{slug}/edit', function (string $slug) {
    return "TODO: look up coin by its url slug (" . htmlspecialchars($slug) . ") and display an edit form of that coin";
});

