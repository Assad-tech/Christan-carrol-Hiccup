<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_payments')->insert([
            [
                'user_id' => 1,
                'name_on_card' => 'Admin User',
                'credit_card_number' => '4111111111111111',
                'cvv' => 123,
                'expiration_date' => '2025-12-01',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'name_on_card' => 'Regular User',
                'credit_card_number' => '4222222222222222',
                'cvv' => 456,
                'expiration_date' => '2026-01-01',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'name_on_card' => 'Secondary Card',
                'credit_card_number' => '4333333333333333',
                'cvv' => 789,
                'expiration_date' => '2027-06-01',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
