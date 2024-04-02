<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Job;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create()->each(function ($user) {
            $jobs = Job::all();
            $user->job()->associate($jobs->random())->save();

            $skills = Skill::all();
            $skills->random(rand(1, $skills->count()))->each(function ($skill) use ($user) {
                $user->skills()->attach($skill->id, ['level' => rand(1, 5)]);
            });
        });
    }
}
