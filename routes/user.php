<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/Event', [WelcomeController::class, 'event'])->name('Event');
Route::get('/Matches', [WelcomeController::class, 'matches'])->name('Matches');
