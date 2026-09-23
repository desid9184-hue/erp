<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Illuminate\Support\now;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'desi',
            'email'=> 'desi@gmail.com',
            'password'=> 'desi123',
            'email_verified_at' => now(),
        ]);
    }
}
