<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'title' => 'Apa obat panas dalam?',
            'slug' => 'apa-obat-panas-dalam?',
            'description' => 'Saya mengalami panas dalam lorem ipsum dol emat bla',
            'user_id' => 1
        ]);

        Question::create([
            'title' => 'Mengapa pengobatan tradisional manjur?',
            'slug' => 'mengapa-pengobatan-tradisional?',
            'description' => 'Pengobatan tradisional mengalami panas dalam lorem ipsum dol emat bla',
            'user_id' => 1
        ]);
    }
}
