<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function karya()
    {
        return view('pages.karya');
    }

    public function event()
    {
        return view('pages.event');
    }

    public function leaderboard()
    {
        return view('pages.leaderboard');
    }
}
