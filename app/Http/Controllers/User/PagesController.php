<?php

namespace App\Http\Controllers\User;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function dashboard()
    {
        $post = Post::where('user_id', Auth::user()->id)->get();
        return view('dashboard.user.index', compact('post'));
    }
}
