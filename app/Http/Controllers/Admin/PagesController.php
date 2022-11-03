<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function dashboard()
    {
        $user = User::all();
        $category = Category::all();
        return view('dashboard.admin.index', compact('user', 'category'));
    }
}
