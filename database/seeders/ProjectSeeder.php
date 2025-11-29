<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Portfolio Website',
            'description' => 'My personal portfolio website (this one!). Built with Laravel and Tailwind CSS. Showcases my projects and skills.',
            'image' => 'portfolio-project.png',
            'link' => '/',
            'tags' => ['Laravel', 'Tailwind CSS', 'SQLite'],
            'category' => 'development'
        ]);
    }
}
