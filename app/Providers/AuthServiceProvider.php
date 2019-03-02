<?php

namespace App\Providers;

use App\Http\Controllers\CountryPolicy;
use App\Models\Country;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Country::class => CountryPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdminOrAbove', function () {
            return auth()->user()->isAdminOrAbove; // means if isSuper then go ahead
        });

        Gate::define('isAdmin', function () {
            return auth()->user()->isAdmin; // means if isSupern then go ahead
        });

        Gate::define('isSuper', function () {
            return auth()->user()->isSuper;
        });

        Gate::define('isCompany', function () {
            return auth()->user()->role->is_company;
        });

        Gate::define('isDesigner', function () {
            return auth()->user()->role->is_designer;
        });
    }
}
