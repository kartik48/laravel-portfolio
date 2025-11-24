<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Project;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_loads()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Kartik');
    }

    public function test_about_page_loads()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response->assertSee('About Me');
    }

    public function test_projects_page_loads()
    {
        Project::create([
            'title' => 'Test Project',
            'description' => 'This is a test project',
            'tags' => ['Laravel', 'PHP']
        ]);

        $response = $this->get('/projects');
        $response->assertStatus(200);
        $response->assertSee('Test Project');
    }

    public function test_contact_page_loads()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
        $response->assertSee('Get in Touch');
    }
}
