<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function event()
    {
        return view('event');
    }

    public function matches()
    {
        return view('matches');
    }

}
