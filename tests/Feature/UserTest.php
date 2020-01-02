<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function testAdminLoginSuccess()
    {
        $userAdmin = $this->getNewAdmin();
        $userAdmin->save();

        $data = [
            'email' => $userAdmin->email,
            'password' => $userAdmin->password
        ];

        $response = $this->post('/login', $data);
        $response->assertStatus(302);

        $response = $this->get('/admin');
        $response->assertStatus(302);
    }
}
