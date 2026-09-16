<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        company::create([
            'name' => 'Company 1',
            'address' => '123 Main St',
            'email' => 'informasi@example',
            'phone_number' => '1234567890',
        ]);
    }
}
