<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name'         => 'Admin',
                'role'         => 'admin',
                'phone'        => '0000000000',
                'address'      => 'Adresse admin',
                'city'         => 'Ville admin',
                'country'      => 'Pays admin',
                'postal_code'  => '00000',
                'password'     => Hash::make(value: 'admin123'), // Change en prod
                'email_verified_at' => now(),
            ]
        );
    }
}
