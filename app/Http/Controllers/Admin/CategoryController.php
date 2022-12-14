<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();

        return view('dashboard.admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Category::create([
            'slug' => Str::slug($request->name),
            'name' => $request->name,
            'description' => $request->description
        ]);

        Alert::toast('Berhasil menambahkan kategori', 'success');

        return redirect(route('admin.category.index'));
    }

    public function edit($id)
    {
        $data = Category::findOrFail($id);

        return view('dashboard.admin.category.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $categories = Category::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $categories->name = $request->name;
        $categories->description = $request->description;
        $categories->update();

        return redirect(route('admin.category.index'))->with('success', 'Kategori berhasil diedit');
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect(route('admin.category.index'))->with('success', 'Kategori berhasil dihapus');
    }
}
