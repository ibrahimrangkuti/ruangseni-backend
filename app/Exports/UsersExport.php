<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\User;

class UsersExport implements FromView
{
    public function view(): View
    {
        return view('dashboard.admin.user.export', ['users' => User::all()]);
    }
}
