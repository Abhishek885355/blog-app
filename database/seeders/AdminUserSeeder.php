<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin User',          // Name of the admin user
            'email' => 'admin@example.com',  // Email of the admin user (should be unique)
            'password' => Hash::make('adminpassword'), // Hashed password
            'role' => 'admin',               // Set the role to admin
        ]);
    }
}