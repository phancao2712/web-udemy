<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use File;

class Migration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:make-migration {name} {module}';

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
        $name = $this->argument('name');
        $module = $this->argument('module');

        if (!File::exists(base_path('modules/' . $module))) {
            return $this->error('Module not exists!');
        }

        $migrationFolder = base_path('modules/' . $module . '/migrations');

        if (File::exists($migrationFolder)) {
                $migrationFile = app_path('Console/Commands/Templates/Migration.txt');
                $migrationContent = File::get($migrationFile);

                $migrationContent = str_replace('{table}', strtolower($module), $migrationContent);
                $name = Carbon::now()->format('Y_m_d_His') . '_' . $name;

                if (!File::exists($migrationFolder . '/' . $name . '.php')) {
                    File::put($migrationFolder . '/' . $name . '.php', $migrationContent);

                    return $this->info('Migrations created successfully!');
                } else {
                    return $this->error('Migrations already exists!');
                }
        }

        return $this->error('Base Folder Module not exists');
    }
}
