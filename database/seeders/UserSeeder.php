<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            'name' => 'admin',
            'email' => 'admin1234@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt("admin123"),
            'contact' => '082244838463',
            'is_admin' => true
        ]);
    }
}
