<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Model::unguard();

       $this->call ([
        RoleSeeder::class,
        UserSeeder::class,
        CategorySeeder::class,
        CustomerSeeder::class,
        EditionSeeder::class,
        StatusSeeder::class,
        TeamSeeder::class,
        // ValidasiSeeder::class,
        ProductSeeder::class,
        // ReviewSeeder::class,
        PesananSeeder::class,
        // DetailPesananSeeder::class,
       ]);
       Model::reguard();
    }
}
