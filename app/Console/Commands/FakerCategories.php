<?php

namespace App\Console\Commands;

use App\Category;
use Illuminate\Console\Command;

class FakerCategories extends Command
{
    protected $signature = 'faker:categories {count=1 : Number of categories to create}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates fake categories';

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

        factory(Category::class, $count)->create();

        $this->info($count . ' categories created');
    }
}
