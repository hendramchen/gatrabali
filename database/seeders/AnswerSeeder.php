<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Answer::create([
            'question_id' => 1,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium dolores quo ipsum distinctio iste laboriosam repudiandae. Quis ad perferendis et a fugiat pariatur amet id deleniti. Sapiente odio dicta quo.',
            'user_id' => 6
        ]);
    }
}
