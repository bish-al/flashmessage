<?php

namespace Bishal\FlashMessage\App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Bishal\FlashMessage\App\View\Components\flash;

class flashServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {   
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'FlashBladeViewPath');
        
        $this->loadViewComponentsAs('flashmessagecomponent', [
            flash::class
        ]);
    }
}
