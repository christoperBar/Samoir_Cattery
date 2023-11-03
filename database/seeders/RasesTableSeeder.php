<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RasesTableSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run()
    {
        // Contoh data untuk tabel "rases"
        $rasesData = [
            ['ras_name' => 'British Shorthair'],
            ['ras_name' => 'Scottish Fold'],
            ['ras_name' => 'Scottish Straight'],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        // Masukkan data ke tabel "rases"
        DB::table('rases')->insert($rasesData);
    }
}
