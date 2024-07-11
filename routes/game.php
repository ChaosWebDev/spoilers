<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::group(['prefix' => '/game'], function () {
    Route::get('/', [GameController::class, 'index'])->name('game.index');
    Route::get('/create', [GameController::class, 'create'])->name('game.create');
    Route::get('/edit/{game}', [GameController::class, 'edit'])->name('game.edit');
    Route::get('/{game}', [GameController::class, 'show'])->name('game.show');

    Route::post('/', [GameController::class, 'store'])->name('game.store');

    Route::put('/{game}', [GameController::class, 'update'])->name('game.update');

    Route::delete('/{game}', [GameController::class, 'destroy'])->name('game.destroy');
});
