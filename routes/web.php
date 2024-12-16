<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ToernooiController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
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
    return view('homepage');
});

Route::get('/dashboard', function () {
    return view('homepage');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

    // **Toernooi**
    Route::get('/toernooien', [ToernooiController::class, 'index'])->name('toernooien.index');
    Route::get('/toernooien/create', [ToernooiController::class, 'create'])->name('toernooien.create');
    Route::post('/toernooien', [ToernooiController::class, 'store'])->name('toernooien.store');
    Route::get('/toernooien/edit/{toernooi}', [ToernooiController::class, 'edit'])->name('toernooien.edit');
    Route::put('/toernooien/update/{toernooi}', [ToernooiController::class, 'update'])->name('toernooien.update');
    Route::delete('/toernooien/delete/{toernooi}', [ToernooiController::class, 'destroy'])->name('toernooien.destroy');
    Route::get('/toernooien/{toernooi}', [ToernooiController::class, 'show'])->name('toernooien.show');
    Route::post('toernooien/{toernooi}/add-team', [ToernooiController::class, 'addTeam'])->name('toernooien.addTeam');



    // **Teams**
    Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
    Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
    Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');
    Route::get('/teams/edit/{team}', [TeamController::class, 'edit'])->name('teams.edit');
    Route::put('/teams/update/{team}', [TeamController::class, 'update'])->name('teams.update');
    Route::delete('/teams/delete/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');
    Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');


    //**games**
    Route::get('/games', [GameController::class, 'index'])->name('games.index');
    Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
    Route::post('/games', [GameController::class, 'store'])->name('games.store');
    Route::get('/games/edit/{game}', [GameController::class, 'edit'])->name('games.edit');
    Route::put('/games/update/{game}', [GameController::class, 'update'])->name('games.update');
    Route::delete('/games/delete/{game}', [GameController::class, 'destroy'])->name('games.destroy');
    Route::get('/games/{game}', [GameController::class, 'show'])->name('games.show');
