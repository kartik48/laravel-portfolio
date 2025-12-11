<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_create_project()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $projectData = [
            'title' => 'New Project',
            'description' => 'Project Description',
            'link' => 'https://example.com',
            'tags' => 'laravel, vue',
            'category' => 'development',
        ];

        $response = $this->post(route('admin.projects.store'), $projectData);

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertDatabaseHas('projects', [
            'title' => 'New Project',
            'description' => 'Project Description',
        ]);
    }

    public function test_project_creation_requires_validation()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post(route('admin.projects.store'), []);

        $response->assertSessionHasErrors(['title', 'description']);
    }

    public function test_admin_can_update_project()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $project = Project::factory()->create();

        $updatedData = [
            'title' => 'Updated Title',
            'description' => 'Updated Description',
            'link' => 'https://updated.com',
            'tags' => 'php, react',
            'category' => 'development',
        ];

        $response = $this->put(route('admin.projects.update', $project), $updatedData);

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertDatabaseHas('projects', [
            'id' => $project->id,
            'title' => 'Updated Title',
        ]);
    }

    public function test_admin_can_delete_project()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $project = Project::factory()->create();

        $response = $this->delete(route('admin.projects.destroy', $project));

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertDatabaseMissing('projects', ['id' => $project->id]);
    }

    public function test_guests_cannot_manage_projects()
    {
        $project = Project::factory()->create();

        $this->post(route('admin.projects.store'), [])->assertRedirect('/login');
        $this->put(route('admin.projects.update', $project), [])->assertRedirect('/login');
        $this->delete(route('admin.projects.destroy', $project))->assertRedirect('/login');
    }
}
