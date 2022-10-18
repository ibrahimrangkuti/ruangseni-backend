<?php

namespace App\Http\Controllers\User;

use Auth;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard.user.post.index');
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.user.post.create', compact('categories'));
    }

    public function store(Request $request)
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
            'status' => 0
        ];

        Post::create($data);

        return redirect(route('user.post.index'))->with('success', 'Berhasil membuat postingan!');
    }
}
