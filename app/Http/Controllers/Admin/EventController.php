<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('dashboard.admin.event.index', compact('events'));
    }

    public function create()
    {
        return view('dashboard.admin.event.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|file|image|mimes:jpeg,jpg,png',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ]);

        $file = $request->file('thumbnail');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        Event::create([
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'description' => $request->description,
            'thumbnail' => $nama_file,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
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

    }

    public function delete($id)
    {

    }
}
