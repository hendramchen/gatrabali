<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'title' => 'Apa itu pengobatan herbal?',
            'slug' => 'apa-itu-pengobatan-herbal?',
            'description' => 'Saya mencari jawaban di internet tentang Pengobatan herbal adalah praktik menggunakan tanaman atau ekstrak tumbuhan untuk mencegah dan mengobati berbagai penyakit.',
            'question_status' => 'pending',
            'user_id' => 2
        ]);

        Question::create([
            'title' => 'Apa contoh tanaman yang sering digunakan dalam pengobatan herbal?',
            'slug' => 'Apa contoh tanaman yang sering digunakan dalam pengobatan herbal?',
            'description' => 'Apa saja contoh tanaman yang sering digunakan termasuk jahe, kunyit, daun sirih, dan lidah buaya.',
            'question_status' => 'pending',
            'user_id' => 3
        ]);

        Question::create([
            'title' => 'Apakah pengobatan herbal aman?',
            'slug' => 'Apakah pengobatan herbal aman?',
            'description' => 'Apakah Pengobatan herbal bisa aman jika digunakan dengan benar, namun ada juga risiko interaksi dengan obat lain atau efek samping. Penting untuk berkonsultasi dengan profesional kesehatan.',
            'question_status' => 'pending',
            'user_id' => 4
        ]);

        Question::create([
            'title' => 'Bagaimana cara kerja pengobatan tradisional?',
            'slug' => 'Bagaimana cara kerja pengobatan tradisional?',
            'description' => 'Bagaimana Pengobatan tradisional bekerja dengan memanfaatkan senyawa alami dalam tanaman yang memiliki efek biologis tertentu pada tubuh.',
            'question_status' => 'pending',
            'user_id' => 4
        ]);
    }
}
