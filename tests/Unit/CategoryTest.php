<?php

namespace Tests\Unit;

use App\Category;
use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function it_shows_posts_by_category()
    {
        /** @var Category $category1 */
        $category1 = factory(Category::class)->create();

        factory(Post::class, 2)->create([
            'category_id' => $category1->id
        ]);

        $category2 = factory(Category::class)->create();

        factory(Post::class, 4)->create([
            'category_id' => $category2->id
        ]);

        $this->assertCount(2, $category1->posts);
    }
}
