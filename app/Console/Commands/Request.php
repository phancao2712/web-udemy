<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;
class Request extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:make-request {name} {module}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Request Module';

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

        $srcFolder = base_path('modules/' . $module . '/src');

        if (File::exists($srcFolder)) {
            $httpFolder = base_path('modules/' . $module . '/src/Http');

            if (File::exists($httpFolder)) {
                $requestsFolder = base_path('modules/' . $module . '/src/Http/Requests');

                if(!File::exists($requestsFolder)) {
                    File::makeDirectory($requestsFolder, 0755, true, true);
                }

                if (File::exists($requestsFolder)) {
                    $requestFile = app_path('Console/Commands/Templates/request.txt');
                    $requestContent = File::get($requestFile);
                    $requestContent = str_replace('{module}', $module, $requestContent);
                    $requestContent = str_replace('{name}', $name, $requestContent);

                    if (!File::exists($requestsFolder . '/' . $name . '.php')) {
                        File::put($requestsFolder . '/' . $name . '.php', $requestContent);

                        return $this->info('Request created successfully!');
                    } else {
                        return $this->error('Request already exists!');
                    }

                }
            }
        }

        return $this->error('Base Folder Module not exists');
    }
}
