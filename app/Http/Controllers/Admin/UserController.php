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

        return redirect(route('admin.user.index'));
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect(route('admin.user.index'));
    }
}
