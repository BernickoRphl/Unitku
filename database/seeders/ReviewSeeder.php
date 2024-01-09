<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define sample reviews data with a range of sentiments
        $reviews = [
            [
                'description' => "No Review",
                // 'pesanan_id' => 1,
            ],
            [
                'description' => 'Jelek banget, buruk sekali!',
                // 'pesanan_id' => 1,

            ],
            [
                'description' => 'Kualitas sangat buruk.',
                // 'pesanan_id' => 1,

            ],
            [
                'description' => 'Tidak sesuai ekspektasi.',
                // 'pesanan_id' => 1,

            ],
            [
                'description' => 'Biasa saja, perlu perbaikan.',
                // 'pesanan_id' => 1,

            ],
            [
                'description' => 'Cukup bagus, tetapi bisa ditingkatkan lagi.',
                // 'pesanan_id' => 1,

            ],
            [
                'description' => 'Produk bagus dengan harga yang wajar.',
                // 'pesanan_id' => 1,

            ],
            [
                'description' => 'Kualitas luar biasa, sangat memuaskan!',
                // 'pesanan_id' => 1,

            ],
            [
                'description' => 'Sempurna! Sangat direkomendasikan.',
                // 'pesanan_id' => 1,

            ],
            // Add more reviews as needed
        ];

        // Insert reviews into the 'reviews' table
        foreach ($reviews as $review) {
            DB::table('reviews')->insert($review);
        }
    }
}
