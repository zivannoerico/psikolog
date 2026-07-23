<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@anmoerty.com'],
            [
                'name'     => 'Administrator An Moerty',
                'email'    => 'admin@anmoerty.com',
                'password' => Hash::make('AnMoerty@2026!'),
            ]
        );
    }
}
