<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function process(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if(Auth::user()->role == 'siswa') {
                return redirect(route('user.dashboard'));
            } else {
                return redirect(route('admin.dashboard'));
            }
        } else if(Auth::attempt(['nis' => $request->email, 'password' => $request->password])) {
            return redirect(route('user.dashboard'));
        } else {
            return redirect(route('login.index'));
        }
    }
}
