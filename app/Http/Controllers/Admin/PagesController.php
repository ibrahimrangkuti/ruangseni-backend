<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function dashboard()
    {
        $user = User::where('role', 'Siswa')->get();
        $category = Category::all();
        $event = Event::all();
        return view('dashboard.admin.index', compact('user', 'category', 'event'));
    }
}
