<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function pending()
    {
        $users = User::where('status', 'pending')->get();
        return $users;
        return view('admin.users.pending', compact('users'));
    }
}
