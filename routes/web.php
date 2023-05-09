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

Route::get('/coin/',   [ CoinController::class, 'showAll' ] )->name('coins.index');

Route::get('/coin/create', [CoinController::class, 'create'] )->name('coins.create');
Route::post('/coin/store', [CoinController::class, 'store'] )->name('coins.store');
Route::get('/coin/{slug}', [CoinController::class, 'show'] )->name('coins.show');
Route::get('/coin/{slug}/edit', [CoinController::class, 'edit'] )->name('coins.edit');
Route::put('/coin/{slug}/update', [CoinController::class, 'update'] )->name('coins.update');

Route::resource('artist', ArtistController::class);
