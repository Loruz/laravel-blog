<?php

namespace Tests\Unit;

use App\Post;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function it_has_a_path()
    {
        $post = factory(Post::class)->create();

        $this->assertEquals('/post/' . $post->id, $post->path());
    }


    /**
     * @test
     */
    public function it_belongs_to_an_author()
    {
        $post = factory(Post::class)->create();

        $this->assertInstanceOf(User::class, $post->author);
    }
}
