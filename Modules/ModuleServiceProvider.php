<?php

namespace Modules;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Modules\Auth\src\Repositories\AuthRepository;
use Modules\Auth\src\Repositories\AuthRepositoryInterface;
use Modules\Categories\src\Repositories\CategoriesRepository;
use Modules\Categories\src\Repositories\CategoriesRepositoryInterface;
use Modules\Courses\src\Repositories\CoursesRepository;
use Modules\Courses\src\Repositories\CoursesRepositoryInterface;
use Modules\Teacher\src\Repositories\TeacherRepository;
use Modules\Teacher\src\Repositories\TeacherRepositoryInterface;
use Modules\User\src\Repositories\UserRepository;
use Modules\User\src\Repositories\UserRepositoryInterface;

class ModuleServiceProvider extends ServiceProvider
{

    private $middlewares = [];

    private $commands = [];

    public function bindingRepository()
    {

        //User Repository
        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );

        //Categories Repository
        $this->app->singleton(
            CategoriesRepositoryInterface::class,
            CategoriesRepository::class
        );

        //Courses Repository
        $this->app->singleton(
            CoursesRepositoryInterface::class,
            CoursesRepository::class
        );

        //Teacher Repository
        $this->app->singleton(
            TeacherRepositoryInterface::class,
            TeacherRepository::class
        );

        //Auth Repository
        $this->app->singleton(
            AuthRepositoryInterface::class,
            AuthRepository::class
        );
    }

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
        Route::group([
            'middleware' => 'web',
            'namespace' => "Modules\\{$module}\src\Http\Controllers",
        ], function () use ($modulePath) {
            if (File::exists($modulePath . "routes/web.php")) {
                $this->loadRoutesFrom($modulePath . "routes/web.php");
            }
        });

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

        $this->bindingRepository();
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
