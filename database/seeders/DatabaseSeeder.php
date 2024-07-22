<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employer;
use App\Models\Job;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // User::factory(10)->create();
        // Employer::factory(10)->create();
        // Job::factory(10)->create();


        // User::factory()->create([
        //     'first_name'            => 'John Ronald',
        //     'last_name'             => 'John Ronald',
        //     'email'                 => 'ron.garcia.santos',
        //     'password'              => '123456789',
        // ]);

        // Employer::factory()->create();
        // Job::factory()->create();

        $this->call(JobSeeder::class);
    }
}
