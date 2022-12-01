<?php

namespace Ts2013\RealEstateContactForm;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class RealEstateContactFormServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'realestatecontactform');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->mergeConfigFrom(__DIR__.'/../config/settings.php', 'realestatecontactform'); 
        
        Livewire::component('real-estate-contact-form', Http\Livewire\RealEstateContactForm::class);
    }

    /**
     *
     * @return void
     */
    public function register()
    {
    }
}
