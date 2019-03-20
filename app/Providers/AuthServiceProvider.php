<?php

namespace App\Providers;

use App\Http\Controllers\CountryPolicy;
use App\Policies\AreaPolicy;
use App\Policies\BrandPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\CollectionPolicy;
use App\Policies\ColorPolicy;
use App\Policies\CouponPolicy;
use App\Policies\DayPolicy;
use App\Policies\ImagePolicy;
use App\Policies\OrderPolicy;
use App\Policies\PagePolicy;
use App\Policies\PrivilegePolicy;
use App\Policies\ProductPolicy;
use App\Policies\RolePolicy;
use App\Policies\ServicePolicy;
use App\Policies\SettingPolicy;
use App\Policies\SizePolicy;
use App\Policies\SlidePolicy;
use App\Policies\TagPolicy;
use App\Policies\TimingPolicy;
use App\Policies\UserPolicy;
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
//        Country::class => CountryPolicy::class,
//        Product::class => ProductPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::resource('user', UserPolicy::class);
        Gate::resource('product', ProductPolicy::class);
        Gate::resource('service', ServicePolicy::class);
        Gate::resource('country', CountryPolicy::class);
        Gate::resource('area', AreaPolicy::class);
        Gate::resource('role', RolePolicy::class);
        Gate::resource('privilege', PrivilegePolicy::class);
        Gate::resource('category', CategoryPolicy::class);
        Gate::resource('slide', SlidePolicy::class);
        Gate::resource('tag', TagPolicy::class);
        Gate::resource('size', SizePolicy::class);
        Gate::resource('color', ColorPolicy::class);
        Gate::resource('collection', CollectionPolicy::class);
        Gate::resource('timing', TimingPolicy::class);
        Gate::resource('day', DayPolicy::class);
        Gate::resource('order', OrderPolicy::class);
        Gate::resource('image', ImagePolicy::class);
        Gate::resource('brand', BrandPolicy::class);
        Gate::resource('coupon', CouponPolicy::class);
        Gate::resource('page', PagePolicy::class);
        Gate::resource('setting', SettingPolicy::class);

        Gate::define('isAdminOrAbove', function () {
            return auth()->user()->isAdminOrAbove; // means if isSuper or isAdmin then go ahead
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
