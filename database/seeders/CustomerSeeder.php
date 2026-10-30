<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'John Smith', 'email' => 'john@example.com', 'phone' => '09171234567'],
            ['full_name' => 'Jane Doe', 'email' => 'jane@example.com', 'phone' => '09181234567'],
            ['full_name' => 'Michael Brown', 'email' => 'michael@example.com', 'phone' => '09191234567'],
            ['full_name' => 'Sarah Wilson', 'email' => 'sarah@example.com', 'phone' => '09201234567'],
            ['full_name' => 'David Garcia', 'email' => 'david@example.com', 'phone' => '09211234567'],
        ];

        foreach ($customers as $customer) {
            DB::table('customers')->updateOrInsert(
                ['email' => $customer['email']],
                $customer
            );
        }
    }
}