<?php

namespace App\Console\Commands;

use App\Post;
use Illuminate\Console\Command;

class FakerPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'faker:posts {count=1 : Number of post to create}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates fake posts';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $count = (int) $this->argument('count');

        if (!$count) {
            $count = 1;
        }

        factory(Post::class, $count)->create();

        $this->info('Posts created');
    }
}
