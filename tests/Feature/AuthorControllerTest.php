<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_author_via_post_request(): void
    {
        $payload = [
            'name' => 'Ernest',
            'surname' => 'Hemingway',
            'birthdate' => '1899-07-21',
        ];

        $response = $this->postJson('/authors', $payload);

        $response->assertStatus(302);
        $response->assertRedirect();

        $this->assertDatabaseHas('authors', [
            'name' => 'Ernest',
            'surname' => 'Hemingway',
        ]);

        $author = \App\Models\Author::where('name', 'Ernest')->first();
        $this->assertNotNull($author);
        $this->assertEquals('1899-07-21', $author->birthdate->format('Y-m-d'));
    }
}
