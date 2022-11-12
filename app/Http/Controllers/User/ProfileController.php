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
        // $request->validate([
        //     'email' => 'required|unique:users',
        //     'username' => 'required|unique:users'
        // ]);

        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:191'],
            'username' => ['required', 'alpha_num', 'min:3', 'max:16'],
            'email' => ['required', 'email', 'min:3', 'max:191']
        ]);

        // $user = User::find(Auth::user()->id);
        // $user->update([
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'email' => $request->email
        // ]);
        Auth::user()->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email
        ]);

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
