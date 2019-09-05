<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class MkomProjectAppServiceProvider extends ServiceProvider
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
        $halaman = '';
        if (Request::segment(1) == 'profile'){
            $halaman = 'profile';
        }

        if (Request::segment(1) == 'ketua'){
            $halaman = 'ketua';
        }

        if (Request::segment(1) == 'user'){
            $halaman = 'user';
        }

        view()->share('halaman', $halaman);
    }
}
