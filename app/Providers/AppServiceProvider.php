<?php

namespace App\Providers;

use App\Repositories\Backend\Admin\ApplicantContract;
use App\Repositories\Backend\Admin\EloquentApplicantRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * Applicant binding
         */
        $this->app->bind(ApplicantContract::class,
            EloquentApplicantRepository::class);
    }
}
