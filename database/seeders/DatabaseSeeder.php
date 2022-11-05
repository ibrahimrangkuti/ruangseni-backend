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

        // \App\Models\User::create([
        //     'nis' => '1234567',
        //     'name' => 'Ibrahim Rangkuti',
        //     'email' => 'rangkutyibrahim765@gmail.com',
        //     'password' => bcrypt('alfarizi24'),
        //     'class' => '11 RPL 1',
        //     'role' => 'siswa'
        // ]);

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        \App\Models\User::create([
            'name' => 'luqman',
            'email' => 'luqman@gmail.com',
            'password' => bcrypt('luqman'),
            'role' => 'siswa'
        ]);
        
        \App\Models\User::create([
            'name' => 'Akrom',
            'email' => 'akrom@gmail.com',
            'password' => bcrypt('akrom'),
            'role' => 'siswa'
        ]);

        \App\Models\User::create([
            'name' => 'faril',
            'email' => 'faril@gmail.com',
            'password' => bcrypt('faril'),
            'role' => 'siswa'
        ]);

        \App\Models\Category::create([
            'slug' => 'puisi',
            'name' => 'Puisi',
            'description' => 'Kategori Puisi'
        ]);

        \App\Models\Category::create([
            'slug' => 'video-animasi',
            'name' => 'Video Animasi',
            'description' => 'Kategori Video Animasi'
        ]);

        \App\Models\Category::create([
            'slug' => 'seni-lukis',
            'name' => 'Seni Lukis',
            'description' => 'Kategori Seni Lukis'
        ]);

        \App\Models\Category::create([
            'slug' => 'cerpen',
            'name' => 'Cerpen',
            'description' => 'Kategori Cerpen'
        ]);

        \App\Models\Category::create([
            'slug' => 'Pantun',
            'name' => 'Pantun',
            'description' => 'Kategori Pantun'
        ]);
    }
}
