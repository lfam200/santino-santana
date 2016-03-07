<?php

namespace App\Providers;


use Illuminate\Contracts\View\Factory;
use Illuminate\Support\ServiceProvider;
use App\Composers\CurrentUserComposer;

class ViewComposerServiceProvider extends ServiceProvider
{

    /**
     * @param Factory $factory
     */
    public function boot(Factory $factory)
    {
        $factory->composer('*',CurrentUserComposer::class);
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // TODO: Implement register() method.
    }
}