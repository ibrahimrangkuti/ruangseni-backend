<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.admin.user.index', compact('users'));
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect(route('admin.user.index'));
    }
}