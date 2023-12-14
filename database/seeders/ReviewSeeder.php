<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            // Define sample reviews data
            $reviews = [
                ['description' => 'Great product!', 'product_id' => 1],
                ['description' => 'Excellent quality.', 'product_id' => 2],
                // Add more reviews as needed
            ];

            // Insert reviews into the 'reviews' table
            foreach ($reviews as $review) {
                DB::table('reviews')->insert($review);
            }
     }
}
