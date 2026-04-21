<?php

namespace Tests\Unit;

use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorTest extends TestCase
{
    use RefreshDatabase;

    public function test_full_name_returns_name_and_surname_concatenation(): void
    {
        $author = Author::create([
            'name' => 'F. Scott',
            'surname' => 'Fitzgerald',
            'birthdate' => '1896-09-24',
        ]);

        $this->assertEquals('F. Scott Fitzgerald', $author->fullName());
    }
}
