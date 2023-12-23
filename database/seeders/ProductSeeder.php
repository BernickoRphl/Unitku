<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(
            [
                'edition_id' => 1,
                'product_name' => 'Full Set',
                'product_desc' => 'Spine + Sleeves + Sheets',
                'product_image' => 'images/full set.JPG',
                'price' => '375,000',
                'color' => 'Dark Green + Pink + White'
            ]
        );

        DB::table('products')->insert(
            [
                'edition_id' => 1,
                'product_name' => 'Full Set',
                'product_desc' => 'Spine + Sleeves + Sheets',
                'product_image' => 'images/full set white.JPG',
                'price' => '375,000',
                'color' => 'Full White'
            ]
        );

        DB::table('products')->insert(
            [
                'edition_id' => 1,
                'product_name' => 'Sheets',
                'product_desc' => 'Sheets Only',
                'product_image' => 'images/sheets.JPG',
                'price' => '75,000',
                'color' => 'White'
            ]
        );

        DB::table('products')->insert(
            [
                'edition_id' => 1,
                'product_name' => 'Sheets',
                'product_desc' => 'Sheets Only',
                'product_image' => 'images/sheets black.JPG',
                'price' => '75,000',
                'color' => 'Black'
            ]
        );
    }
}
