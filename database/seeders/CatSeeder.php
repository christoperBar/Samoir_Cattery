<?php

namespace Database\Seeders;

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
            'cat_name' => 'Abimanyu',
            'birthday' => '2 Juli 2022',
            'color'=> 'White and Blue',
            'cat_photo'=> 'https://i.imgur.com/VOlsmjz.png',
            'ras_id'=> '3',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Arjuna',
            'birthday' => '12 Desember 2022',
            'color'=> 'Gray',
            'cat_photo'=> 'https://i.imgur.com/mmwLxkJ.jpeg',
            'ras_id'=> '3',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'I Am Groot',
            'birthday' => '9 Januari 2023',
            'color'=> 'Golden White',
            'cat_photo'=> 'https://i.imgur.com/FSkd7gb.jpeg',
            'ras_id'=> '1',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Baby Yoda',
            'birthday' => '17 Mei 2023',
            'color'=> 'Golden Brown',
            'cat_photo'=> 'https://i.imgur.com/CUt04gG.jpeg',
            'ras_id'=> '4',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Boombayah',
            'birthday' => '11 Januari 2023',
            'color'=> 'Golden White',
            'cat_photo'=> 'https://i.imgur.com/hYIYCz0.jpeg',
            'ras_id'=> '1',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Mango Sticky Rice',
            'birthday' => '29 July 2023',
            'color'=> 'Golden White',
            'cat_photo'=> 'https://i.imgur.com/j1baEj9.jpeg',
            'ras_id'=> '2',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Jennie',
            'birthday' => '28 Februari 2023',
            'color'=> 'White',
            'cat_photo'=> 'https://i.imgur.com/9P6TuN6.jpeg',
            'ras_id'=> '1',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Raras',
            'birthday' => '9 Januari 2023',
            'color'=> 'Golden Brown',
            'cat_photo'=> 'https://i.imgur.com/z5X1AUl.jpeg',
            'ras_id'=> '3',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Winky',
            'birthday' => '17 September 2023',
            'color'=> 'Golden White',
            'cat_photo'=> 'https://i.imgur.com/nko4BYv.jpeg',
            'ras_id'=> '1',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Rocky',
            'birthday' => '5 Oktober 2023',
            'color'=> 'White and Blue',
            'cat_photo'=> 'https://i.imgur.com/4JI0OhK.jpeg',
            'ras_id'=> '3',
        ]);
    }
}
