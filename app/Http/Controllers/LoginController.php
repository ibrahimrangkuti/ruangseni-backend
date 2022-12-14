<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return back();
        }
        return view('auth.login');
    }

    public function process(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = User::find(Auth::id());
            $user->logged_in = true;
            $user->update();
            Alert::toast('Selamat datang di website kami!', 'success');
            if(Auth::user()->role == 'siswa') {
                if(Auth::user()->username == null) {
                    return redirect(route('user.profile'));
                } else {
                    return redirect(route('profile', Auth::user()->username));
                }
            } elseif(Auth::user()->role == 'admin') {
                return redirect(route('admin.dashboard'));
            }
        } else if (Auth::attempt(['nis' => $request->email, 'password' => $request->password])) {
            $user = User::find(Auth::id());
            $user->logged_in = true;
            $user->update();
            Alert::toast('Selamat datang di website kami!', 'success');
            if (Auth::user()->username == null) {
                return redirect(route('user.profile'));
            } else {
                return redirect(route('profile', Auth::user()->username));
            }
        } else {
            return redirect(route('login.index'))->with('error', 'Email atau password salah!');
        }
    }
}
