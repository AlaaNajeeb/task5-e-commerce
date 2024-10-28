<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
        { User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password'=>bcrypt('secret'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=> bcrypt('secret'),
            'role' => 'user',
        ]);
        User::create([
            'name' => 'Test User2',
            'email' => 'test2@example.com',
            'password'=> bcrypt('secret'),
            'role' => 'user',
        ]);
       
    }
    }