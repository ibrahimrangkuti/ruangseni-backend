<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $data = User::where('id', Auth::user()->id)->get()[0];
        return view('dashboard.user.profile', compact('data'));
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        return redirect(route('user.profile'))->with('success', 'Profil berhasil diubah!');
    }
}
