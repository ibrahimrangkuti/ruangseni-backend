<?php

namespace App\Http\Controllers\User;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $posts = Post::where('title', 'LIKE', '%' .$request->search. '%')
                ->orWhere('body', 'LIKE', '%' .$request->search. '%')->get();
            // $checkPosts = Post::where('title', 'LIKE', '%' . $request->search . '$')->orWhere('body', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $posts = Post::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        }
        return view('dashboard.user.post.index', compact('posts'));
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
        ];

        Post::create($data);

        return redirect(route('user.post.index'))->with('success', 'Berhasil membuat postingan!');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('dashboard.user.post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();

        return view('dashboard.user.post.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required|min:6',
            'body' => 'required|min:8',
            'category' => 'required'
        ]);

        if($request->hasFile('image')) {
            // untuk menghapus gambar lama
                if($request->oldImage) {
                    File::delete(public_path($post->img_url));
                }
            // end

            $request->validate([
                'image' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $post->img_url = 'images/'.$imageName;
        }

        $data = [
            'user_id' => Auth::user()->id,
            'category_id' => $request->category,
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'body' => $request->body,
            'is_join_event' => false,
        ];

        $post->update($data);

        return redirect(route('user.post.index'))->with('success', 'Postingan berhasil diedit');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        unlink($post->img_url);
        Post::where("id", $post->id)->delete();

        return redirect(route('user.post.index'))->with('success', 'Postingan berhasil dihapus');
    }
}
