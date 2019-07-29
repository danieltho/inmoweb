<?php

namespace DanielSann\InmoWeb;

use Illuminate\Support\ServiceProvider;


class InmoWebServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->dbMigrations();

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views/admin', 'InmoWebAdmin');
        $this->loadViewsFrom(__DIR__.'/resources/views/web', 'InmoWeb');

        $this->publishes([
            __DIR__.'/resources/assets' => public_path('vendor/inmoweb'),
        ], 'public_inmoweb');
    }

    public function register()
    {

    }

    public function dbMigrations()
    {
        $this->loadMigrationsFrom(dirname(__DIR__).'/databases/migrations/2019_07_16_135239_moneda.php');
        $this->loadMigrationsFrom(dirname(__DIR__).'/databases/migrations/2019_07_16_135548_estado.php');
        $this->loadMigrationsFrom(dirname(__DIR__).'/databases/migrations/2019_07_16_135711_tipo.php');
        $this->loadMigrationsFrom(dirname(__DIR__).'/databases/migrations/2019_07_16_135854_categoria.php');
        $this->loadMigrationsFrom(dirname(__DIR__).'/databases/migrations/2019_07_16_135856_create_propiedades.php');
        $this->loadMigrationsFrom(dirname(__DIR__).'/databases/migrations/2019_07_16_135857_create_desarrollos.php');
        $this->loadMigrationsFrom(dirname(__DIR__).'/databases/migrations/2019_07_16_135944_medio.php');
        $this->loadMigrationsFrom(dirname(__DIR__).'/databases/migrations/2019_07_16_140205_medios_propiedades.php');
        $this->loadMigrationsFrom(dirname(__DIR__).'/databases/migrations/2019_07_20_140206_medios_desarrollos.php');
        $this->loadMigrationsFrom(dirname(__DIR__).'/databases/migrations/2014_10_12_000000_create_users_table.php');
        $this->loadMigrationsFrom(dirname(__DIR__).'/databases/migrations/2014_10_12_100000_create_password_resets_table.php');
    }
}