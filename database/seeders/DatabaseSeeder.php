<?php

namespace Database\Seeders;

use App\Models\Project;
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
            'name' => 'Aylin',
            'email' => 'Aylinlin@gmail.com',
            'password' => bcrypt('26oliver23'),
            'email_verified_at' => time()
        ]);
        
        User::factory()->create([
            'name' => 'Berinais',
            'email' => 'Berebonita@gmail.com',
            'password' => bcrypt('Bere2208'),
            'email_verified_at' => time()
        ]);

        Project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
    }
}
