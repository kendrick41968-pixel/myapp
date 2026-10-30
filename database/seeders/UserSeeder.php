<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'admin', 'full_name' => 'Administrator'],
            ['username' => 'cashier1', 'full_name' => 'Alice Johnson'],
            ['username' => 'cashier2', 'full_name' => 'Robert Lee'],
            ['username' => 'staff1', 'full_name' => 'Maria Santos'],
            ['username' => 'staff2', 'full_name' => 'James Cruz'],
        ];

        foreach ($users as $user) {
            DB::table('users')->updateOrInsert(
                ['username' => $user['username']],
                [
                    'name' => $user['full_name'],
                    'email' => $user['username'] . '@example.com',
                    'password' => Hash::make('password'),
                    'full_name' => $user['full_name'],
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );
        }
    }
}