<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'nis' => '1234567',
            'name' => 'Ibrahim Rangkuti',
            'email' => 'rangkutyibrahim765@gmail.com',
            'password' => bcrypt('alfarizi24'),
            'class' => '11 RPL 1',
            'role' => 'siswa'
        ]);

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);
    }
}
