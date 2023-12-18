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
            'birthday' => '07/02/2022',
            'color'=> 'White and Blue',
            'cat_photo'=> '',
            'is_adoptable'=> false,
            'maturity' => 'adult',
            'gender' => 'jantan',
            'ras_id'=> '3',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Arjuna',
            'birthday' => '12/12/2022',
            'color'=> 'Gray',
            'cat_photo'=> '',
            'is_adoptable'=> true,
            'maturity' => 'adult',
            'gender' => 'jantan',
            'ras_id'=> '3',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'I Am Groot',
            'birthday' => '01/09/2023',
            'color'=> 'Golden White',
            'cat_photo'=> '',
            'is_adoptable'=> false,
            'maturity' => 'adult',
            'gender' => 'jantan',
            'ras_id'=> '1',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Baby Yoda',
            'birthday' => '05/17/2023',
            'color'=> 'Golden Brown',
            'cat_photo'=> '',
            'is_adoptable'=> true,
            'maturity' => 'adult',
            'gender' => 'jantan',
            'ras_id'=> '4',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Boombayah',
            'birthday' => '01/11/2023',
            'color'=> 'Golden White',
            'cat_photo'=> '',
            'is_adoptable'=> true,
            'maturity' => 'adult',
            'gender' => 'betina',
            'ras_id'=> '1',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Mango Sticky Rice',
            'birthday' => '07/29/2023',
            'color'=> 'Golden White',
            'cat_photo'=> '',
            'is_adoptable'=> false,
            'maturity' => 'adult',
            'gender' => 'jantan',
            'ras_id'=> '2',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Jennie',
            'birthday' => '02/28/2023',
            'color'=> 'White',
            'cat_photo'=> '',
            'is_adoptable'=> true,
            'maturity' => 'adult',
            'gender' => 'betina',
            'ras_id'=> '1',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Raras',
            'birthday' => '01/09/2023',
            'color'=> 'Golden Brown',
            'cat_photo'=> '',
            'is_adoptable'=> true,
            'maturity' => 'adult',
            'gender' => 'betina',
            'ras_id'=> '3',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Winky',
            'birthday' => '09/17/2023',
            'color'=> 'Golden White',
            'cat_photo'=> '',
            'is_adoptable'=> true,
            'maturity' => 'adult',
            'gender' => 'jantan',
            'ras_id'=> '1',
        ]);
        DB::table("cats")->insert([
            'cat_name' => 'Rocky',
            'birthday' => '10/05/2023',
            'color'=> 'White and Blue',
            'cat_photo'=> '',
            'is_adoptable'=> true,
            'maturity' => 'adult',
            'gender' => 'jantan',
            'ras_id'=> '3',
        ]);
    }
}
