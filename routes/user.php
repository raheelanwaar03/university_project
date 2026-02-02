<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'welcome'])->name('Welcome');
Route::get('/Event', [WelcomeController::class, 'event'])->name('Event');
Route::get('/Matches', [WelcomeController::class, 'matches'])->name('Matches');
Route::get('/Teams', [WelcomeController::class, 'teams'])->name('Team');


Route::name('User.')->prefix('User')->middleware('auth', 'user','status')->group(function () {
    Route::get('/Dashboard', [WelcomeController::class, 'index'])->name('Dashboard');
});
