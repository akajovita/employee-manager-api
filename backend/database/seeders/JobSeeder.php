<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            ['title' => 'Desarrollador Backend', 'description' => 'Trabajo enfocado en el desarrollo de APIs y lógica de servidor.'],
            ['title' => 'Desarrollador Frontend', 'description' => 'Trabajo enfocado en la interfaz y experiencia de usuario.'],
        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }
    }
}
