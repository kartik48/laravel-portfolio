<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_page_is_accessible()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertSee('Admin Login');
    }

    public function test_admin_can_login_with_correct_credentials()
    {
        $user = User::factory()->create([
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);

        $response = $this->post('/login', [
            'username' => 'admin',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticatedAs($user);
    }

    public function test_admin_cannot_login_with_incorrect_credentials()
    {
        $user = User::factory()->create([
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);

        $response = $this->post('/login', [
            'username' => 'admin',
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors('username');
        $this->assertGuest();
    }

    public function test_admin_can_logout()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post('/logout');

        $response->assertRedirect('/');
        $this->assertGuest();
    }

    public function test_admin_dashboard_is_protected()
    {
        $response = $this->get(route('admin.dashboard'));
        $response->assertRedirect('/login');
    }
}
