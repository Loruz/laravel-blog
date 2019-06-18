<?php

namespace Tests\Feature;

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

        $posts = factory(Post::class, 2)->create([
            'category_id' => $category1->id
        ]);

        $category2 = factory(Category::class)->create();

        $posts2 = factory(Post::class, 4)->create([
            'category_id' => $category2->id
        ]);

        $response = $this->get('/category/1');

        $posts->each(function (Post $post) use ($response) {
            $response->assertSee($post->title);
        });

        $posts2->each(function (Post $post) use ($response) {
            $response->assertDontSee($post->title);
        });
    }
}
