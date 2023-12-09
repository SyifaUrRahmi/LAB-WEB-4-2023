<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            'nama' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'Admin',
            'password' => Hash::make('admin123'),
        ];

        User::insert($users);
    }
}