<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('districts')->insert([
            ['name' => 'Badung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bangli', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Buleleng', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gianyar', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jembrana', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Karangasem', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Klungkung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tabanan', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Denpasar', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
