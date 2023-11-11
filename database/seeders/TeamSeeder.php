<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert(
            [
                'name' => 'DANIEL KARIYADI',
                'position' => 'CEO',
                'team_image' => 'daniel.png'
            ]
        );

        DB::table('teams')->insert(
            [
                'name' => 'BRYANNA JERSEY',
                'position' => 'CTO',
                'team_image' => 'bry.png'
            ]
        );

        DB::table('teams')->insert(
            [
                'name' => 'ALDRICH JEREMIAH',
                'position' => 'CFO',
                'team_image' => 'jj.png'
            ]
        );
    }
}
