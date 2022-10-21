<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            return back();
        }
        return view('auth.login');
    }

    public function process(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = User::find(Auth::id());
            $user->logged_in = true;
            $user->update();
            if(Auth::user()->role == 'siswa') {
                return redirect(route('user.dashboard'));
            } else {
                return redirect(route('admin.dashboard'));
            }
        } else if(Auth::attempt(['nis' => $request->email, 'password' => $request->password])) {
            $user = User::find(Auth::id());
            $user->logged_in = true;
            $user->update();
            return redirect(route('user.dashboard'));
        } else {
            return redirect(route('login.index'))->with('error', 'Data akun tidak sesuai!');
        }
    }
}
