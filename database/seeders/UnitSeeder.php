<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Unit::create([
                'unit_name' => 'Unit ' . $i,
                'unit_desc' => 'Description for Unit ' . $i,
                'unit_image' => 'apartment2.jpg',
                'price' => rand(100000, 10000000) / 10
            ]);
        }
    }
}
