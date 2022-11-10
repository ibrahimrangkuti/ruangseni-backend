<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('dashboard.admin.event.index', compact('events'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.admin.event.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|file|image|mimes:jpeg,jpg,png',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'category' => 'required'
        ]);

        $file = $request->file('thumbnail');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'thumbnail';
        $file->move($tujuan_upload, $nama_file);

        Event::create([
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'description' => $request->description,
            'thumbnail' => $nama_file,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'category_id' => $request->category
        ]);

        return redirect(route('admin.event.index'))->with('success', 'Event berhasil ditambah');
    }

    public function edit($id)
    {
        $data = Event::findOrFail($id);

        return view('dashboard.admin.event.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $events = Event::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ]);

        if($request->hasFile('thumbnail')) {
            // untuk menghapus gambar lama
                if($request->oldThumbnail) {
                    File::delete(public_path("thumbnail/".$events->thumbnail));
                }
            // end
            
            $request->validate([
                'thumbnail' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);

            $file = $request->file('thumbnail');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'thumbnail';
            $file->move($tujuan_upload, $nama_file);
            $events->thumbnail = $nama_file;
        }

        $events->title = $request->title;
        $events->description = $request->description;
        $events->start_date = $request->start_date;
        $events->end_date = $request->end_date;
        $events->save();

        return redirect(route('admin.event.index'))->with('success', 'Event berhasil diedit');
    }

    public function delete($id)
    {
        $events = Event::findOrFail($id);
        unlink("thumbnail/".$events->thumbnail);
        Event::where("id", $events->id)->delete();

        return redirect(route('admin.event.index'))->with('success', 'Event berhasil dihapus');
    }
}
