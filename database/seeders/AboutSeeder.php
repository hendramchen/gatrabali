<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'title' => 'Kami adalah orang-orang dibalik Gatrabali',
            'subtitle' => 'Media berbasis website untuk pengobatan alternatif',
            'founders' => null,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. In magnam numquam eaque voluptatibus at, explicabo dicta quisquam delectus neque iusto, provident minima similique. Voluptatibus, quis dignissimos sed reiciendis voluptatum fuga.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
