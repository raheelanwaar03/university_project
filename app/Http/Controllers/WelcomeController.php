<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function event()
    {
        return view('event');
    }

    public function matches()
    {
        return view('matches');
    }

    public function teams()
    {
        $teams = User::where('status', 'approved')->get();
        return view('team', compact('teams'));
    }

    public function index()
    {
        return view('dashboard');
    }
}
