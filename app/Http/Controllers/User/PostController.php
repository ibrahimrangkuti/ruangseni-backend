<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard.user.post.index');
    }

    public function create()
    {
        return view('dashboard.user.post.create');
    }
}
