<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'bruh@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'role_id' => 2,
            'is_login' => '0',
            'is_active' => '1',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Daniel',
            'email' => 'daniel@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'role_id' => 2,
            'is_login' => '0',
            'is_active' => '1',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Aldrich',
            'email' => 'aldrich@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'role_id' => 2,
            'is_login' => '0',
            'is_active' => '1',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Bryanna',
            'email' => 'bryanna@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'role_id' => 2,
            'is_login' => '0',
            'is_active' => '1',
            'remember_token' => Str::random(10),
        ]);
        User::factory(3)->create();

        User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'role_id' => 1,
            'is_login' => '0',
            'is_active' => '1',
            'remember_token' => Str::random(10),
        ]);
    }
}
