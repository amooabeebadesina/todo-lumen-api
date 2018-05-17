<?php
/**
 * Created by PhpStorm.
 * User: abeeb
 * Date: 5/17/18
 * Time: 12:34 PM
 */

namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\TodoInterface',
            'App\Repositories\Concrete\TodoRepository'
        );
    }

}