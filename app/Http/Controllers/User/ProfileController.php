<?php

namespace App\Http\Controllers\User;

use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $data = User::where('id', Auth::user()->id)->get()[0];
        return view('dashboard.user.profile', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate(['email', ['email', 'unique']]);

        $user = User::find(Auth::user()->id);
        $user->username = Str::lower($request->username);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        return redirect(route('user.profile'))->with('success', 'Profil berhasil diubah!');
    }

    public function changePassword(Request $request)
    {
        if(Hash::check($request->old_password, Auth::user()->password)) {
            $user = User::findOrFail(Auth::user()->id);
            $user->password = bcrypt($request->new_password);
            $user->update();

            return redirect(route('user.profile'))->with('success', 'Password berhasil diubah!');
        }

        return redirect(route('user.profile'))->with('error', 'Password tidak sesuai!');
    }
}
