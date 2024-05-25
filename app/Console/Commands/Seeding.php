<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Seeding extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:seeding {name} {module}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $namespace = "Modules\\{$this->argument('module')}\\seeders\\{$this->argument('name')}";
        $this->call("db:seed", [
            '--class' => $namespace
        ]);
    }
}
