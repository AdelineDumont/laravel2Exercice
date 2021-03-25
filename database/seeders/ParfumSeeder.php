<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParfumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parfums')->insert([
            [
                'nom' => 'Jadore',
                'marque' => 1,
                'prix' => 85,
            ],
            [
                'nom' => 'Black opium',
                'marque' => 3,
                'prix' => 90,
            ],
            [
                'nom' => 'Trésor',
                'marque' => 2,
                'prix' => 65,
            ],
        ]);
    }
}