<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@mvei.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Dr. Meron',
            'email' => 'doctor@mvei.com',
            'password' => Hash::make('doctor123'),
            'role' => 'doctor',
        ]);

        User::create([
            'name' => 'Nurse Sara',
            'email' => 'nurse@mvei.com',
            'password' => Hash::make('nurse123'),
            'role' => 'nurse',
        ]);

        User::create([
            'name' => 'Finance Officer',
            'email' => 'finance@mvei.com',
            'password' => Hash::make('finance123'),
            'role' => 'finance',
        ]);

        User::create([
            'name' => 'Patient John',
            'email' => 'patient@mvei.com',
            'password' => Hash::make('patient123'),
            'role' => 'patient',
        ]);
    }
}