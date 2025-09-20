<?php

namespace Database\Seeders;

use App\Models\ModelA;
use App\Models\ModelB;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ModelA::factory(10)
            ->has(ModelB::factory()->count(3), 'b')
            ->create();
    }
}
