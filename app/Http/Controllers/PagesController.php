<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home', ['title' => 'Home']);
    }

    public function karya()
    {
        return view('pages.karya', ['title' => 'Karya']);
    }

    public function event()
    {
        return view('pages.event', ['title' => 'Event']);
    }

    public function leaderboard()
    {
        return view('pages.leaderboard', ['title' => 'Leaderboard']);
    }
}
