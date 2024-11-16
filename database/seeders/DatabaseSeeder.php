<?php

namespace Database\Seeders;

use App\Models\Component;
use App\Models\Detection;
use App\Models\Machine;
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
        // User::factory(10)->withPersonalTeam()->create();

        Machine::factory()->count(100)->create();
        Component::factory()->count(100)->create();
        Detection::factory()->count(100)->create();
    }
}
