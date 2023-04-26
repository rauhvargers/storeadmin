<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CoinController;
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
})->name("home");

Route::get('/coin/',   [ CoinController::class, 'showAll' ] )->name('coins.show');

Route::get('/coin/create', function () {
    return "TODO: return a form where user can enter information about a new coin";
});

Route::get('/coin/{slug}', function (string $slug) {
    return "TODO: look up coin by its url slug (" . htmlspecialchars($slug) . ") and display its data";
});

Route::get('/coin/{slug}/edit', function (string $slug) {
    return "TODO: look up coin by its url slug (" . htmlspecialchars($slug) . ") and display an edit form of that coin";
});

Route::resource('artist', ArtistController::class);
