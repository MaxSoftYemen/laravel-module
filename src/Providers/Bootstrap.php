<?php

namespace MaxsoftYemen\Module\Providers;

use Illuminate\Support\ServiceProvider;
use MaxsoftYemen\Module\Contracts\RepositoryInterface;

class Bootstrap extends ServiceProvider
{
    /**
     * Booting the package.
     */
    public function boot()
    {
        $this->app[RepositoryInterface::class]->boot();
    }

    /**
     * Register the provider.
     */
    public function register()
    {
        $this->app[RepositoryInterface::class]->register();
    }
}
