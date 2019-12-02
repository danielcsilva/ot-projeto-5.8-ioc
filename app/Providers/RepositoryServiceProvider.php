<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //service

        $this->app->bind(\App\Services\ContatoService::class, \App\Services\ContatoServiceImpl::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        //service

        //repository
        $this->app->bind(\App\Repositories\ContatoRepository::class, \App\Repositories\ContatoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\TelefoneRepository::class, \App\Repositories\TelefoneRepositoryEloquent::class);
        //:end-bindings:
    }
}
