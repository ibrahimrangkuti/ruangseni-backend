<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Event;
use App\Models\Category;
use App\Models\LikePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $totalLike = LikePost::where('post_id', $post->id)->count();

        if(Auth::check()) {
            $checkLike = LikePost::where(['post_id' => $post->id, 'user_id' => Auth::user()->id])->count();
        } else {
            $checkLike = false;
        }

        return view('pages.detail_karya', ['title' => $post->title], compact('post', 'totalLike', 'checkLike'));
    }

    public function event()
    {
        $events = Event::all();

        return view('pages.event', ['title' => 'Event'], compact('events'));
    }

    public function detail_event($slug)
    {
        $event = Event::where('slug', $slug)->first();

        return view('pages.detail_event', ['title' => 'Detail Event | ' . $event->title ], compact('event'));
    }

    public function leaderboard()
    {
        return view('pages.leaderboard', ['title' => 'Leaderboard']);
    }

    public function profile($username)
    {
        $user = User::where('username', $username)->first();
        $posts = Post::where('user_id', $user->id)->orWhere('status', 1)->get();
        $totalPost = Post::where('user_id', $user->id)->orWhere('status', 1)->count();

        return view('pages.profile', ['title' => $user->name . ' | ' . 'Profile'], compact('user', 'posts', 'totalPost'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $posts = Post::where('category_id', $category->id)->get();;

        return view('pages.category', ['title' => 'Kategori' . ' ' . $category->name], compact('category', 'posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('pages.show', ['title' => 'Karya'], compact('post'));
    }

    public function create_post($username)
    {
        if(Auth::user()->username !== $username) {
            return back();
        }

        $user = User::where('username', $username)->first();

        return view('pages.create_post', ['title' => 'Create Post'], compact('user'));
    }

    public function likePost($id)
    {

        if(Auth::check()) {
            $check = LikePost::where(['post_id' => $id, 'user_id' => Auth::user()->id])->first();
            if(!$check) {
                LikePost::create([
                    'post_id' => $id,
                    'user_id' => Auth::user()->id
                ]);
                return back();
            } else {
                $check->delete();
                return back();
            }
        }

        return back();
    }
}
