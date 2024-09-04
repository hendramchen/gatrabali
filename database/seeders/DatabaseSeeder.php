<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Putu',
            'email' => 'putu@example.com',
            'role' => 'visitor',
        ]);

        User::factory()->create([
            'name' => 'Kadek',
            'email' => 'kadek@example.com',
            'role' => 'visitor',
        ]);

        User::factory()->create([
            'name' => 'Wayan',
            'email' => 'wayan@example.com',
            'role' => 'visitor',
        ]);

        User::factory()->create([
            'name' => 'Komang',
            'email' => 'komang@example.com',
            'role' => 'visitor',
        ]);

        User::factory()->create([
            'name' => 'Manika',
            'email' => 'manika@example.com',
            'role' => 'doctor',
        ]);

        $this->call([
            AboutSeeder::class,
            CategorySeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            DoctorSeeder::class,
            ConsultationSeeder::class,
        ]);
    }
}
