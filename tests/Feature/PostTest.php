<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function it_shows_specific_post()
    {
        $post = factory(Post::class)->create();

        $response = $this->get("/post/{$post->id}");

        $response->assertSee($post->title);

    }

    /**
     * @test
     */
    public function it_shows_all_posts()
    {
        $posts = factory(Post::class, 4)->create();

        $response = $this->get('/');

        $posts->each(function (Post $post) use ($response) {
            $response->assertSee($post->title);
        });

    }

}
