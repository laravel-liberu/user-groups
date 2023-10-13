<?php

namespace LaravelLiberu\UserGroups;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->load()
            ->publish();
    }

    private function load(): self
    {
        $this->mergeConfigFrom(__DIR__.'/../config/user-groups.php', 'liberu.user-groups');

        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        return $this;
    }

    private function publish(): void
    {
        $this->publishes([
            __DIR__.'/../config' => config_path('liberu'),
        ], ['user-groups-config', 'liberu-config']);

        $this->publishes([
            __DIR__.'/../database/factories' => database_path('factories'),
        ], ['user-groups-factories', 'liberu-factories']);

        $this->publishes([
            __DIR__.'/../database/seeders' => database_path('seeders'),
        ], ['user-groups-seeders', 'liberu-seeders']);
    }
}
