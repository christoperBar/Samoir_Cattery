<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run()
    {
        // Contoh data untuk tabel "cats"
        $catsData = [
            [
                'cat_name' => 'Abimanyu',
                'birthday' => '2022-10-16',
                'color' => 'Blue and White',
                'ras_id' => 1, // Sesuaikan dengan ID ras yang sesuai
            ],
            [
                'cat_name' => 'Arjuna',
                'birthday' => '2023-06-19',
                'color' => 'Grey',
                'ras_id' => 2, // Sesuaikan dengan ID ras yang sesuai
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        // Masukkan data ke tabel "cats"
        DB::table('cats')->insert($catsData);
    }
}
