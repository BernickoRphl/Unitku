<?php

namespace Database\Seeders;

use App\Models\status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        status::create(['name' => 'Menunggu Persetujuan']);
        status::create(['name' => 'Dipesan']);
        status::create(['name' => 'Diantar']);
        status::create(['name' => 'Sampai']);
    }
}
