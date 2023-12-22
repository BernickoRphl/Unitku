<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pesanans = [
            [
                'user_id' => 1,
                'status_id' => 1,
                'address' => 'Semarang',
                'jumlah' => 1,
                'tanggal_pemesanan' => now()->toDateTimeString(),
                'description' => 'Sample order 1 description.',
            ],
            [
                'user_id' => 2,
                'status_id' => 1,
                'address' => 'Surabaya',
                'jumlah' => 1,
                'tanggal_pemesanan' => now()->toDateTimeString(),
                'description' => 'Sample order 2 description.',
            ],
            // Add more pesanans as needed
        ];

        // Insert pesanans into the 'pesanans' table
        foreach ($pesanans as $pesanan) {
            DB::table('pesanans')->insert($pesanan);
        }
    }
}
