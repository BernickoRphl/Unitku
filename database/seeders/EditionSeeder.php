<?php

namespace Database\Seeders;

use App\Models\edition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        edition::create([
            'name' => "Basic"
        ]);
        edition::create([
            'name' => "Special"
        ]);
        edition::create([
            'name' => "Limited"
        ]);
    }
}
