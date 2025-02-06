<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'full_name' => 'Admin User',
                'email' => 'admin@mail.com',
                'password' => Hash::make('12345678'),
                'phone' => '1234567890',
                'image' => 'admin.jpg',
                'is_active' => 1,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => 2,
                'full_name' => 'Regular User',
                'email' => 'user@mail.com',
                'password' => Hash::make('12345678'),
                'phone' => '0987654321',
                'image' => 'user.jpg',
                'is_active' => 1,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
