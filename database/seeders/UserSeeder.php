<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'ELC 357',
                'email' => 'elc357@fajarpaper.com',
                'password' => Hash::make('rahasia'),
                'department' => 'EI2',
            ],
            [
                'name' => 'INST 357',
                'email' => 'inst357@fajarpaper.com',
                'password' => Hash::make('rahasia'),
                'department' => 'EI2',
            ]
        ];

        User::insert($users);
    }
}
