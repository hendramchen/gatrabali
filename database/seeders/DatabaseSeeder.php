<?php

namespace Database\Seeders;

use App\Models\Subdistrict;
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
            'email' => 'admin@gatrabali.org',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Putu',
            'email' => 'putu@mail.com',
            'role' => 'visitor',
        ]);

        User::factory()->create([
            'name' => 'Kadek',
            'email' => 'kadek@mail.com',
            'role' => 'visitor',
        ]);

        User::factory()->create([
            'name' => 'Wayan',
            'email' => 'wayan@mail.com',
            'role' => 'visitor',
        ]);

        User::factory()->create([
            'name' => 'Komang',
            'email' => 'komang@mail.com',
            'role' => 'visitor',
        ]);

        User::factory()->create([
            'name' => 'Manika',
            'email' => 'manika@mail.com',
            'role' => 'doctor',
        ]);

        User::factory()->create([
            'name' => 'Hendra',
            'email' => 'hendra@mail.com',
            'role' => 'doctor',
        ]);

        $this->call([
            AboutSeeder::class,
            CategorySeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            DoctorSeeder::class,
            ConsultationSeeder::class,
            DistrictSeeder::class,
            SubdistrictSeeder::class,
        ]);
    }
}
