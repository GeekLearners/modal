<?php

namespace Geeklearners\Modalbox;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Geeklearners\Modalbox\Modal;
class ModalServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/Route.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(Modal::class,function($app){
            return new Modal;
        });
    }

    public function registerBladeDirectives($args){
        Blade::directive('modalButton',function(){

        });
    }

    public function getArgs($args){
        return explode(',',str_replace(['(',')'],'',$args));
    }
}
