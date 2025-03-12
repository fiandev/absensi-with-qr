<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->admin(superadmin: true)->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@asfatour.com',
            'password' => Hash::make('superadmin55'),
            'raw_password' => 'superadmin55',
        ]);
        User::factory()->admin()->create([
            'name' => 'Admin',
            'email' => 'admin@asfatour.com',
            'password' => Hash::make('admin55'),
            'raw_password' => 'admin55',
        ]);
    }
}
