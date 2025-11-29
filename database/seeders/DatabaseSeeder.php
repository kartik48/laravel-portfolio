<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Kartik Mathur',
            'email' => 'kartik48@example.com', // Using a placeholder email for the username login
            'username' => 'kartik48',
            'password' => bcrypt('kaikarebhola'),
        ]);

        $this->call(ProjectSeeder::class);
    }
}
