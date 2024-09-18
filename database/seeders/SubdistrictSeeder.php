<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubdistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subdistricts')->insert([
            ['name' => 'Abiansemal', 'district_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kuta', 'district_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kuta Selatan', 'district_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kuta Utara', 'district_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mengwi', 'district_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Petang', 'district_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bangli', 'district_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kintamani', 'district_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Susut', 'district_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tembuku', 'district_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Banjar', 'district_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Buleleng', 'district_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Busung Biu', 'district_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gerokgak', 'district_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kubutambahan', 'district_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sawan', 'district_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Seririt', 'district_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sukasada', 'district_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tejakula', 'district_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Blahbatuh', 'district_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gianyar', 'district_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Payangan', 'district_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sukawati', 'district_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tampaksiring', 'district_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tegallalang', 'district_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ubud', 'district_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jembrana', 'district_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Melaya', 'district_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mendoyo', 'district_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Negara', 'district_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pekutatan', 'district_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Abang', 'district_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bebandem', 'district_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Karangasem', 'district_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kubu', 'district_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Manggis', 'district_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rendang', 'district_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Selat', 'district_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sidemen', 'district_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Banjarangkan', 'district_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dawan', 'district_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Klungkung', 'district_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nusa Penida', 'district_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Baturiti', 'district_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kediri', 'district_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kerambitan', 'district_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Marga', 'district_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Penebel', 'district_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pupuan', 'district_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Selemadeg', 'district_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Selemadeg Barat', 'district_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Selemadeg Timur', 'district_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tabanan', 'district_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Denpasar Barat', 'district_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Denpasar Selatan', 'district_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Denpasar Timur', 'district_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Denpasar Utara', 'district_id' => 9, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
