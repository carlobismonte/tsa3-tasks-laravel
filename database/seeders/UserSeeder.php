<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'carlo@example.com'],
            [
                'name' => 'Carlo Bismonte',
                'username' => 'carlo',
                'full_name' => 'Carlo Bismonte',
                'password' => Hash::make('DemoPassword123!'),
            ]
        );
    }
}
