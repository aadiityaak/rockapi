<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //default admin users
        $user = User::create([
            'name'              => 'admin',
            'email'             => 'admin@example.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
            'role'              => 'admin',
            'remember_token'    => Str::random(10),
        ]);
        //default pemilik users
        $user = User::create([
            'name'              => 'pemilik',
            'email'             => 'pemilik@example.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
            'role'              => 'pemilik',
            'remember_token'    => Str::random(10),
        ]);
        //default manajer users
        $user = User::create([
            'name'              => 'manajer',
            'email'             => 'manajer@example.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
            'role'              => 'manajer',
            'remember_token'    => Str::random(10),
        ]);
        //default users
        $user = User::create([
            'name'              => 'user1',
            'email'             => 'user1@example.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
            'role'              => 'user',
            'remember_token'    => Str::random(10),
        ]);
    }
}
