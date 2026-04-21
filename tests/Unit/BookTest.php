<?php

namespace Tests\Unit;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    public function test_short_title_attribute_is_stored_and_retrieved_correctly(): void
    {
        $author = Author::factory()->create();

        $book = Book::create([
            'title' => 'The Great Gatsby',
            'short_title' => 'Gatsby',
            'year' => 1925,
            'author_id' => $author->id,
        ]);

        $this->assertEquals('Gatsby', $book->short_title);
        $this->assertDatabaseHas('books', [
            'id' => $book->id,
            'short_title' => 'Gatsby',
        ]);
    }
}
