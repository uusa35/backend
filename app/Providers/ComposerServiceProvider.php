<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // frontend
        view()->composer([
//            'frontend.partials.header_one',
//            'frontend.partials.header_four',
//            'frontend.partials._pop_up_cart'
        ], 'App\Services\ViewComposers@getCart');

        view()->composer([
            'frontend.*.*.home',
            'frontend.wokiee.four.modules.*.*',
            'backend.modules.currency.create',
            'backend.modules.currency.edit',
            'backend.partials.sidebar',
            'auth.register',
        ], 'App\Services\ViewComposers@getCountries');

        view()->composer([
            'frontend.*.*.*._search_form',
            'frontend.*.*.*._search_menu_services',
        ], 'App\Services\ViewComposers@getAllTimingsAvailable');

        view()->composer([
            'frontend.modules.cart.index',
        ], 'App\Services\ViewComposers@getShipmentPackages');


        view()->composer([
            'frontend.modules.checkout.index',
            'frontend.modules.order.show',
            'auth.register',
        ], 'App\Services\ViewComposers@getCountriesWorld');


        view()->composer([
            'frontend.modules.cart.index',
            'frontend.partials._branches_footer'], 'App\Services\ViewComposers@getBranches');

        view()->composer([
            'frontend.wokiee.four.home',
            'frontend.wokiee.four.*.show',
            'frontend.wokiee.four.*.index',
            'auth.register',
            'auth.login',
        ], 'App\Services\ViewComposers@getCurrency');


        view()->composer([
            'frontend.*.*.home',
            'auth.*',
            'frontend.wokiee.four.modules.*.*',
            'frontend.wokiee.four.modules.product.index',
        ], 'App\Services\ViewComposers@getCurrencies');


        view()->composer([
            'frontend.*.*.home',
            'frontend.wokiee.four.modules.*.*',
            'frontend.partials.header_four',
        ], 'App\Services\ViewComposers@getCategories');

        view()->composer([
            'frontend.*.*.home',
            'frontend.wokiee.four.modules.*.*',
            'frontend.wokiee.four.modules.product.index',
//            'frontend.*.*.*.head',
//            'frontend.*.*.*._top_bar',
//            'frontend.*.*.*._main_menu',
//            'frontend.*.*.*._social_icons_home',
//            'frontend.*.*.*.footer',
//            'frontend.*.*.*.scripts',
//            'frontend.*.*.*.show',
//            'frontend.*.*.*.index',
            'auth.*',
//            'backend.*.*.*.scripts',
            'backend.modules.order.show',
            'backend.partials.nav',
        ], 'App\Services\ViewComposers@getSettings');

        view()->composer([
            'frontend.*.*.home',
            'frontend.wokiee.four.modules.*.*',
            'frontend.wokiee.four.modules.product.index',
        ], 'App\Services\ViewComposers@getPages');

        view()->composer([
            'frontend.*.*.home',
            'frontend.wokiee.four.modules.*.*',
            'frontend.modules.product.show'
        ], 'App\Services\ViewComposers@getBrands');

        view()->composer([
            'backend.modules.product.attribute.create',
        ], 'App\Services\ViewComposers@getActiveSizes');

        view()->composer([
            'backend.modules.product.attribute.create',
        ], 'App\Services\ViewComposers@getActiveColors');


    }

    /**
     * automatically composer() method will be registered
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}
