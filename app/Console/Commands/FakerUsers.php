<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class FakerUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'faker:users {count=1 : Number of users to create}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates fake users';


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

        factory(User::class, $count)->create();

        $this->info('Users created');
    }
}
