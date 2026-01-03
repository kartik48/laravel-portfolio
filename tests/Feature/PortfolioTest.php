<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioTest extends TestCase
{

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
        $response = $this->get('/projects');
        $response->assertStatus(200);
        $response->assertSee("Kartik's Portfolio Website");
        $response->assertSee("Crumbs & Co.");
    }

    public function test_contact_page_loads()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
        $response->assertSee('Get in Touch');
    }
}
