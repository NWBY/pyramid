<?php

namespace NWBY\Pyramid;

use Illuminate\Support\ServiceProvider;

class PyramidServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            if (!class_exists('CreateStacksTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_stacks_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_stacks_table.php')
                ], 'migrations');
            }
        }
    }
}
