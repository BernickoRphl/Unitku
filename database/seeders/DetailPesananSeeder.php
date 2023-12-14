<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detailPesanans = [
            [
                'jumlah' => '5',
                'pesanan_id' => 1,
                'product_id' => 1,
            ],
            [
                'jumlah' => '3',
                'pesanan_id' => 2,
                'product_id' => 2,
            ],
            // Add more detail__pesanans as needed
        ];

        // Insert detail__pesanans into the 'detail__pesanans' table
        foreach ($detailPesanans as $detailPesanan) {
            DB::table('detail__pesanans')->insert($detailPesanan);
        }
    }
}

