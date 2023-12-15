<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("certifications")->insert([
            'name' => 'World Cat Federation',
            'logo_photo' => 'https://seeklogo.com/images/W/wcf-world-cat-federation-logo-E2766B496C-seeklogo.com.png',
            'description' => 'Terdaftar di World Cat Federation (WCF)',
            'link_url' => 'https://www.icc-wcf.org/',
        ]);
    }
}