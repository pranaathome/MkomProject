<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Ketua;
use App\Anggota;

class FormMahasiswaServiceProvider extends ServiceProvider
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
        view()->composer('user.form', function($view){
            $view->with('list_ketua', Ketua::pluck('nama_ketua', 'id'));
        });

        view()->composer('ketua.form', function($view){
            $view->with('list_anggota', Anggota::pluck('nama_anggota', 'id'));
        });
    }
}
