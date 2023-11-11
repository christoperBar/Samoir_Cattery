<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("cats")->insert([
            'cat_name' => 'Sebastian',
            'birthday' => '2 Oktober 2022',
            'color'=> 'Gray',
            'cat_photo'=> 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/02/03/1268249997.jpeg',
            'ras_id'=> '6',
        ]);
    }
}
