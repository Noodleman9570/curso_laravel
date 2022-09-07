<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;

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

Route::get('/games', [GamesController::class, 'index'])->name('games');
Route::get('/games/create', [GamesController::class, 'create'])->name('gamesCreate');
Route::get('/games/{name_game}/{category?}', [GamesController::class, 'help']);
Route::post('/games/storeVideogames', [GamesController::class, 'storeVideogame'])->name('createVideogame');
route::get('/view/{gameId}', [GamesController::class, 'view'])->name('viewGame');
Route::post('/games/updateVideogame', [GamesController::class, 'updateVideogame'])->name('updateVideogame');

