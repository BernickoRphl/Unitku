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
                ['description' => 'Great product!', 'pesanan_id' => 0],
                ['description' => 'Excellent quality.', 'pesanan_id' => 0],
                // Add more reviews as needed
            ];

            // Insert reviews into the 'reviews' table
            foreach ($reviews as $review) {
                DB::table('reviews')->insert($review);
            }
     }
}
