<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert(
            [
                'name' => 'William Rogue',
                'email' => 'WRougue@myemail.com',
                'phone_number' => '08123456789',
            ]
        );

        DB::table('customers')->insert(
            [
                'name' => 'Merry Kathrin',
                'email' => 'MKathrin@myemail.com',
                'phone_number' => '08198765432',
            ]
        );
    }
}
