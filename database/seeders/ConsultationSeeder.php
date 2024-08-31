<?php

namespace Database\Seeders;

use App\Models\Consultation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Consultation::create([
            'problem' => 'Panas dalam',
            'phone' => '08512345',
            'user_id' => 3,
            'consult_status' => 'pending'
        ]);
    }
}
