<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin User
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'user_type' => 'admin',
            'number' => '1234567890',
            'pending' => 0,
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        // Create Student User
        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'user_type' => 'student',
            'number' => '0987654321',
            'pending' => 0,
            'email' => 'student@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        // Create another Student User
        User::create([
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'user_type' => 'student',
            'number' => '1122334455',
            'pending' => 0,
            'email' => 'student2@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
    }
}
