<?php

namespace Modules;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;


class ModuleServiceProvider extends ServiceProvider
{

    private $middlewares = [

    ];

    private $commands = [

    ];

    public function boot()
    {
        $modules = $this->directory();
        if (!empty($modules)) {
            foreach ($modules as $module) {
                $this->registerModule($module);
            }
        }
    }

    private function registerModule($module)
    {
        $modulePath = __DIR__ . "/{$module}/";

        // Khai báo routes
        if (File::exists($modulePath . "routes/routes.php")) {
            $this->loadRoutesFrom($modulePath . "routes/routes.php");
        }

        // Khai báo migration
        if (File::exists($modulePath . "migrations")) {
            $this->loadMigrationsFrom($modulePath . "migrations");
        }

        // Khai báo lang
        if (File::exists($modulePath . "migrations")) {
            $this->loadTranslationsFrom($modulePath . "resources/lang", strtolower($module));
            $this->loadJSONTranslationsFrom($modulePath . 'resources/lang');
        }

        // Khai báo views
        if (File::exists($modulePath . "resources/views")) {
            $this->loadViewsFrom($modulePath . "resources/views", strtolower($module));
        }

        // Khai báo helper
        if (File::exists($modulePath . "helpers")) {
            $helper_dir = File::allFiles($modulePath . "helpers");
            foreach ($helper_dir as $key => $value) {
                $file = $value->getPathName();
                require $file;
            }
        }
    }

    public function register()
    {
        $directories = $this->directory();
        // Khai báo config
        $this->registerConfig($directories);

        // Khai báo middleware
        if (!empty($this->middlewares)) {
            foreach ($this->middlewares as $key => $value) {
                $this->app['router']->pushMiddlewareToGroup($key, $value);
            }
        }

        // Khai báo command
        $this->commands($this->commands);
    }

    private function directory()
    {
        $directories = array_map('basename', File::directories(__DIR__));
        return $directories;
    }

    private function registerConfig($directories)
    {
        if (!empty($directories)) {
            foreach ($directories as $directory) {
                $configPath = __DIR__ . "/" . $directory . "/configs";

                $configFiles = array_map('basename', File::allFiles($configPath));

                foreach ($configFiles as $path) {
                    $alias = basename($path, '.php');
                    $this->mergeConfigFrom($configPath . "/" . $path, $alias);
                }
            }
        }
    }
}
