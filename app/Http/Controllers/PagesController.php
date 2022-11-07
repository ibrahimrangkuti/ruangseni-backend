<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home', ['title' => 'Home']);
    }

    public function karya()
    {
        $posts = Post::all();

        return view('pages.karya', ['title' => 'Karya'], compact('posts'));
    }

    public function detail_karya($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('pages.detail_karya', ['title' => $post->title], compact('post'));
    }

    public function event()
    {
        return view('pages.event', ['title' => 'Event']);
    }

    public function leaderboard()
    {
        return view('pages.leaderboard', ['title' => 'Leaderboard']);
    }

    public function profile($username)
    {
        $user = User::where('username', $username)->first();
        $posts = Post::where('user_id', $user->id)->get();

        return view('pages.profile', ['title' => $user->name . ' | ' . 'Profile'], compact('user', 'posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('pages.show', ['title' => 'Karya'], compact('post'));
    }
}
