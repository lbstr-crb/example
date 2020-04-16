<?php
namespace Lbstr\Example;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider {

    public function boot(){

        require_once __DIR__.'/Http/routes.php';

        $this->loadViewsFrom(__DIR__.'/Views', 'example');

    }

    /*public function register()

    {

        $this->app['example'] = $this->app->share(function(){

           return new Example;

        });

    }*/

}