<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach($rows as $row){
            User::create([
                'nis' => $row[0],
                'name' => $row[1],
                'email' => $row[2],
                'password' => bcrypt($row[3]),
                'class' => $row[4],
                'role' => $row[5]
            ]);
        }
    }
}
