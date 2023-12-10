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
        DB::table("teams")->insert([
            'name' => 'Ferrio Gent Landy',
            'email' => 'fgentlandy@gmail.com',
            'photo' => 'https://cdn.tuoitre.vn/thumb_w/640/471584752817336320/2023/2/10/tieu-su-justin-bieber-3678-167601620270457998666.jpg',
            'description' => 'Pemilik',
            'instagram' => 'https://www.instagram.com/gentlandy/',
            'tiktok' => ''
        ]);
        DB::table("teams")->insert([
            'name' => 'Christoper Barnaby',
            'email' => 'cbarnaby@gmail.com',
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/1/10/Zayn_Wiki_%28cropped%29.jpg',
            'description' => 'Admin',
            'instagram' => 'https://www.instagram.com/christoper__b/',
            'tiktok' => 'https://www.tiktok.com/@dsts10101010?_t=8i2QdO7CvYI&_r=1'
        ]);
        
    }
}
