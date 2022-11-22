<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Event;
use App\Models\Category;
use App\Models\LikePost;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\EventParticipant;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PagesController extends Controller
{
    public function home()
    {
        $events = Event::all();
        $posts = Post::where('status', '1')->get();
        return view('pages.home', ['title' => 'Home'], compact('posts', 'events'));
    }

    public function karya(Request $request)
    {
        $categories= Category::all();
        if(!$request->has('category')) {
            $posts = Post::where('status', '1')
                ->where('is_join_event', '0')
                ->get();
        } else {
            $category = Category::where('slug', $request->category)->first();
            $posts = Post::where([
                'category_id' => $category->id, 
                'status' => '1', 
                'is_join_event' => '0'])->get();
        }

        return view('pages.karya', ['title' => 'Karya'], compact('posts', 'categories'));
    }

    public function detail_karya($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if(!$post->status) {
            return back();
        }
        $post->visitsCounter()->increment();
        $visitsCount = $post->visits()->count();
        $totalLike = LikePost::where('post_id', $post->id)->count();

        if(Auth::check()) {
            $checkLike = LikePost::where(['post_id' => $post->id, 'user_id' => Auth::user()->id])->count();
        } else {
            $checkLike = false;
        }

        return view('pages.detail_karya', ['title' => $post->title], compact('post', 'totalLike', 'checkLike', 'visitsCount'));
    }

    public function event()
    {
        $events = Event::all();

        return view('pages.event', ['title' => 'Event'], compact('events'));
    }

    public function detail_event($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $posts = Post::where('status', '1')
            ->where('is_join_event', '1')
            ->get();
        return view('pages.detail_event', ['title' => 'Detail Event | ' . $event->title ], compact('event', 'posts'));
    }

    public function leaderboard()
    {
        $posts = Post::where(['status' => '1'])->orderBy('like_count', 'desc')->take(3)->get();
        return view('pages.leaderboard', ['title' => 'Leaderboard'], compact('posts'));
    }

    public function profile($username)
    {
        $user = User::where('username', $username)->first();
        $posts = Post::where('user_id', $user->id)->get();
        $totalPost = Post::where('user_id', $user->id)->count();
        $joinEvent = Post::where('is_join_event', 1)->where('user_id', $user->id)->get();
        $totalPostEvent = Post::where('is_join_event', 1)->where('user_id', $user->id)->count();


        return view('pages.profile', ['title' => $user->name . ' | ' . 'Profile'], compact('user', 'posts', 'totalPost', 'joinEvent', 'totalPostEvent'));
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

        if(!Auth::check()) {
            return back();
        }

        if(Auth::user()->username !== $username) {
            return back();
        }

        $user = User::where('username', $username)->first();
        $category = Category::all();

        return view('pages.create_post', ['title' => 'Create Post'], compact('user', 'category'));
    }

    public function store_post(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'title' => 'required|min:6',
            'body' => 'required|min:8',
            'category' => 'required'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $data = [
            'user_id' => Auth::user()->id,
            'category_id' => $request->category,
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'body' => $request->body,
            'img_url' => 'images/'. $imageName,
            'is_join_event' => false,
        ];

        Post::create($data);

        Alert::toast('Berhasil membuat postingan!', 'success');

        return redirect()->action(
            [PagesController::class, 'profile'], ['username' => Auth::user()->username]
        );
    }

    public function create_post_event($slug)
    {
        if(!Auth::check()) {
            return back();
        }
        $category = Category::all();
        $event = Event::where('slug', $slug)->first();
        return view('pages.create_post_event', ['title' => 'Create Post ' . $event->title], compact('event', 'category'));
    }

    public function store_post_event(Request $request, $slug)
    {

        $event = Event::where('slug', $slug)->first();

        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg',
        //     'title' => 'required|min:6',
        //     'body' => 'required|min:8',
        //     'category' => 'required'
        // ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $data = [
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'event_id' => $event->id,
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'body' => $request->body,
            'img_url' => 'images/'. $imageName,
            'is_join_event' => true,
        ];

        $post = Post::create($data);
        EventParticipant::create([
            'event_id' => $event->id,
            'post_id' => $post->id
        ]);

        return redirect(route('event.detail', $event->slug));
    }

    public function likePost($id)
    {

        if(!Auth::check()) {
            return redirect(route('login.index'));
            die;
        }

        $check = LikePost::where(['post_id' => $id, 'user_id' => Auth::user()->id])->first();
        $post = Post::where('id', $id)->first();
        if(!$check) {
            LikePost::create([
                'post_id' => $id,
                'user_id' => Auth::user()->id
            ]);
            $post->like_count += 1;
            $post->update();
            return back();
        } else {
            $check->delete();
            $post->like_count -= 1;
            $post->update();
            return back();
        }

        return back();
    }
}
