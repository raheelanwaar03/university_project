<?php

use App\Http\Controllers\admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin')->middleware('auth', 'admin')->group(function () {
    Route::get('/Dashboard', [AdminDashboardController::class, 'index'])->name('Dashboard');
    Route::get('Pending/Users', [AdminDashboardController::class, 'pending'])->name('Pending.Users');
    Route::get('Approve/User/{id}', [AdminDashboardController::class, 'approve'])->name('approve.User');
    Route::get('Approved/Teams', [AdminDashboardController::class, 'approvedTeam'])->name('approve.Team');
    Route::get('Make/Team/Pending/{id}', [AdminDashboardController::class, 'pendingTeam'])->name('Pending.Team');
});
