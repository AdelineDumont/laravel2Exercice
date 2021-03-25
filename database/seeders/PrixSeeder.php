<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PrixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prix')->insert([
            [
                'prix' => '85'
            ],
            [
                'prix' => '90'
            ],
            [
                'prix' => '65'
            ],
        ]);
    }
}