<?php

namespace MaxsoftYemen\Module\Providers;

use Illuminate\Support\ServiceProvider;
use MaxsoftYemen\Module\Contracts\RepositoryInterface;
use MaxsoftYemen\Module\Laravel\LaravelFileRepository;

class Contracts extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
