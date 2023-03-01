<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\Experience;
use App\Models\JobTitle;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void {
        $user = User::factory()->create([
            'name' => 'akramulfata',
            'email' => 'fata@gmail.com',
        ]);
        $user2 = User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
        ]);
        Company::factory(10)->create();
        JobTitle::factory(5)->create();
        Experience::factory(10)->create([
            'profile_id' => $user->profile->id,
        ]);

    }
}