<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\View\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    return redirect()->route('home');
});
