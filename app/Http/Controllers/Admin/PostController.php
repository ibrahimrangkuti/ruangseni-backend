<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('dashboard.admin.post.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('dashboard.admin.post.show', compact('post'));
    }

    public function approve($slug)
    {
        Post::where('slug', $slug)->update(['status' => '1']);

        return redirect(route('admin.post.index'))->with('success', 'Postingan disetujui');
    }

    public function disapprove($id)
    {
        Post::findOrFail($id)->update(['status' => '2']);

        return redirect(route('admin.post.index'))->with('success', 'Postingan tidak disetujui');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect(route('admin.post.index'))->with('success', 'Postingan berhasil dihapus');
    }
}
