<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'Siswa')->get();
        return view('dashboard.admin.user.index', compact('users'));
    }

    public function import(Request $request)
    {
        Excel::import(new UsersImport, $request->file);

        return redirect(route('admin.user.index'))->with('success', 'Berhasil import data user!');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function edit($id)
    {
        $data = User::find($id);

        return view('dashboard.admin.user.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            'nis' => ['numeric'],
            'name' => ['string'],
            'email' => ['email'],
        ]);

        $user->nis = $request->nis;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        return redirect(route('admin.user.index'))->with('success', 'Berhasil edit data user!');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect(route('admin.user.index'));
    }
}
