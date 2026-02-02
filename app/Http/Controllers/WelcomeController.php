<?php

namespace App\Http\Controllers;

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
        return view('team');
    }

    public function index()
    {
        return view('dashboard');
    }
}
