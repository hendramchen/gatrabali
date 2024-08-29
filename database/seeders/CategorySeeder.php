<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Usada Rare',
            'slug' => 'usada-rare',
        ]);

        DB::table('categories')->insert([
            'name' => 'Usada Dalem',
            'slug' => 'usada-dalem',
        ]);

        DB::table('categories')->insert([
            'name' => 'Usada Paneseh',
            'slug' => 'usada-paneseh',
        ]);
    }
}
