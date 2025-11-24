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
            'image' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1355&q=80',
            'link' => '/',
            'tags' => ['Laravel', 'Tailwind CSS', 'SQLite']
        ]);
    }
}
