<?php

namespace Customers\Providers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $moduleName= 'customers';
     $ds = DIRECTORY_SEPARATOR; 
     config([
        $moduleName => File::getRequire(__DIR__.$ds.'..'.$ds.'config'.$ds.'route.php')
    ]);

     $this->loadRoutesFrom(__DIR__.$ds.'..'.$ds.'routes'.$ds.'web.php');
     $this->loadViewsFrom(__DIR__.$ds.'..'.$ds.'resources'.$ds.'views' , $moduleName);
     $this->loadMigrationsFrom(__DIR__.$ds.'..'.$ds.'database'.$ds.'migrations');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
