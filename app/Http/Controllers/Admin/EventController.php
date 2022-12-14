<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('id', 'desc')->get();

        return view('dashboard.admin.event.index', compact('events'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.admin.event.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $today = date('Y-m-d');
        if($request->start_date < $today) {
            Alert::error('Gagal', 'Tidak bisa memilih tanggal tersebut');
            return back();
        }
        if($request->end_date < $request->start_date) {
            Alert::error('Gagal', 'Tidak bisa memilih tanggal tersebut');
            return back();
        }

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|file|image|mimes:jpeg,jpg,png',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'category' => 'required'
        ]);

        if($request->start_date < $today) {

        }

        $file = $request->file('thumbnail');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'thumbnail';
        $file->move($tujuan_upload, $nama_file);

        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            'thumbnail' => $nama_file,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'category_id' => $request->category
        ]);

        Alert::toast('Berhasil menambahkan event', 'success');

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
