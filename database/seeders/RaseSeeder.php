<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("rases")->insert([
            'ras_name' => 'Scottish Fold'
        ]);
        DB::table("rases")->insert([
            'ras_name' => 'Scottish Straight'
        ]);
        DB::table("rases")->insert([
            'ras_name' => 'British Short Hair'
        ]);
        DB::table("rases")->insert([
            'ras_name' => 'Devon Rex'
        ]);
    }
}
