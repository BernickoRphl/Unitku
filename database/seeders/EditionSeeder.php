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
            'edition_name' => "Basic"
        ]);
        edition::create([
            'edition_name' => "Special"
        ]);
        edition::create([
            'edition_name' => "Limited"
        ]);
    }
}
