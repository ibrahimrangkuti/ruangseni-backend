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
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        \App\Models\User::create([
            'name' => 'Ibrahim',
            'username' => 'Ibrahim',
            'nis' => '123451',
            'email' => 'ibrahim@gmail.com',
            'password' => bcrypt('ibrahim'),
            'class' => '11 RPL 1',
            'role' => 'siswa'
        ]);

        \App\Models\User::create([
            'name' => 'luqman',
            'username' => 'luqman',
            'nis' => '123452',
            'email' => 'luqman@gmail.com',
            'password' => bcrypt('luqman'),
            'class' => '11 RPL 1',
            'role' => 'siswa'
        ]);

        \App\Models\User::create([
            'name' => 'Akrom',
            'nis' => '123453',
            'email' => 'akrom@gmail.com',
            'password' => bcrypt('akrom'),
            'class' => '11 RPL 1',
            'role' => 'siswa'
        ]);

        \App\Models\User::create([
            'name' => 'Faril',
            'nis' => '123454',
            'email' => 'faril@gmail.com',
            'password' => bcrypt('faril'),
            'class' => '11 RPL 1',
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

        // $this->call([
        //     PostSeeder::class
        // ]);

    }
}
