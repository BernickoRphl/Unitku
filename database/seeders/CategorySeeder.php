<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                'category_name' => 'Full Set',
                'description' => 'Spine + Sleves + Sheets',
            ]
        );
        DB::table('categories')->insert(
            [
                'category_name' => 'Sleeves',
                'description' => 'Sleves Only',
            ]
        );DB::table('categories')->insert(
            [
                'category_name' => 'Sheets',
                'description' => 'Sheets Only',
            ]
        );
    }
}
