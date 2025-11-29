<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_login_with_username()
    {
        $user = User::factory()->create([
            'username' => 'kartik48',
            'password' => bcrypt('kaikarebhola'),
        ]);

        $response = $this->post('/login', [
            'username' => 'kartik48',
            'password' => 'kaikarebhola',
        ]);

        $response->assertRedirect('/admin/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    public function test_admin_cannot_login_with_invalid_credentials()
    {
        $user = User::factory()->create([
            'username' => 'kartik48',
            'password' => bcrypt('kaikarebhola'),
        ]);

        $response = $this->post('/login', [
            'username' => 'kartik48',
            'password' => 'wrongpassword',
        ]);

        $response->assertSessionHasErrors('username');
        $this->assertGuest();
    }

    public function test_admin_can_create_project()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/admin/projects', [
            'title' => 'New Project',
            'description' => 'Project Description',
            'category' => 'development',
            'tags' => 'Laravel, Vue',
            'thumbnail' => 'https://example.com/thumb.png',
        ]);

        $response->assertRedirect('/admin/dashboard');
        $this->assertDatabaseHas('projects', ['title' => 'New Project']);
    }

    public function test_admin_can_update_project()
    {
        $user = User::factory()->create();
        $project = Project::factory()->create();

        $response = $this->actingAs($user)->put("/admin/projects/{$project->id}", [
            'title' => 'Updated Title',
            'description' => 'Updated Description',
            'category' => 'data',
        ]);

        $response->assertRedirect('/admin/dashboard');
        $this->assertDatabaseHas('projects', ['title' => 'Updated Title', 'category' => 'data']);
    }

    public function test_admin_can_delete_project()
    {
        $user = User::factory()->create();
        $project = Project::factory()->create();

        $response = $this->actingAs($user)->delete("/admin/projects/{$project->id}");

        $response->assertRedirect('/admin/dashboard');
        $this->assertDatabaseMissing('projects', ['id' => $project->id]);
    }

    public function test_projects_page_loads()
    {
        $response = $this->get('/projects');
        $response->assertStatus(200);
        $response->assertSee('All Projects');
    }
}
