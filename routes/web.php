<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\User;

Route::group(['namespace' => 'Backend', 'prefix' => 'backend', 'as' => 'backend.', 'middleware' => ['auth', 'onlyActiveUsers']], function () {
    // Route may be same But
    // 1- Date will be displayed are different (therefore made many controllers for the same exact Model)
    // 2- Action Also is different therefore ModelPolicy applied for each Model Action

    // Backend :: super only
    Route::group(['namespace' => 'Admin', 'as' => 'super.', 'prefix' => 'super', 'middleware' => ['super']], function () {
        Route::resource('role', 'RoleController');
        Route::resource('privilege', 'PrivilegeController');
        Route::resource('setting', 'SettingController');
    });
    // Backend :: super + admin
    Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['admin']], function () {
        Route::get('backup/db', ['as' => 'backup.db', 'uses' => 'HomeController@BackupDB']);
        Route::get('export/translations', ['as' => 'export.translation', 'uses' => 'HomeController@exportTranslations']);
        Route::resource('country', 'CountryController');
        Route::resource('currency', 'CurrencyController');
        Route::resource('category', 'CategoryController');
        Route::resource('user', 'UserController');
        Route::resource('product', 'ProductController');
        Route::resource('service', 'ServiceController');
        Route::resource('color', 'ColorController');
        Route::resource('size', 'SizeController');
        Route::resource('slide', 'SlidController');
        Route::resource('coupon', 'CouponController');
        Route::resource('survey', 'SurveyController');
        Route::resource('questionnaire', 'QuestionnaireController');
        Route::resource('question', 'QuestionController');
        Route::resource('answer', 'AnswerController');
        Route::resource('report', 'ReportController');
        Route::resource('brand', 'BrandController');
        Route::resource('page', 'PageController');
        Route::resource('term', 'TermController');
        Route::resource('order', 'OrderController');
        Route::resource('collection', 'CollectionController');
        Route::resource('package', 'ShipmentPackageController');
        Route::resource('tag', 'TagController');
    });
    // Backend :: companies
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('activate', 'HomeController@toggleActivate')->name('activate');
    Route::get('language/{locale}', 'HomeController@changeLanguage')->name('language.change');
    Route::get('reset/password', 'UserController@getResetPassword')->name('reset.password');
    Route::post('reset/password', 'UserController@postResetPassword')->name('reset');
    Route::resource('user', 'UserController')->only(['edit', 'update', 'show']);
    Route::resource('product', 'ProductController');
    Route::resource('attribute', 'ProductAttributeController');
    Route::resource('service', 'ServiceController');
    Route::resource('slide', 'SlideController');
    Route::resource('branch', 'BranchController');
    Route::resource('order', 'OrderController')->except(['destroy', 'show']);
    Route::resource('image', 'ImageController');
    Route::resource('tag', 'TagController');
    Route::resource('product', 'ProductController');
    Route::resource('coupon', 'CouponController');
    Route::resource('package', 'ShipmentPackageController');
    Route::get('trashed', 'ProductController@trashed')->name('product.trashed');
    Route::get('restore/{id}', 'ProductController@restore')->name('product.restore');
    // designers
    Route::resource('collection', 'CollectionController');
});

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.', 'middleware' => []], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('product', 'ProductController');
    Route::get('product/{id}/{name}', 'ProductController@show')->name('product.show.name');
    Route::resource('service', 'ServiceController');
    Route::get('service/{id}/{name}', 'ServiceController@show')->name('service.show.name');
    Route::resource('cart', 'CartController')->only(['index']);
    Route::post('cart/add/service', 'CartController@addService')->name('cart.add.service');
    Route::post('cart/add/product', 'CartController@addProduct')->name('cart.add.product');
    Route::get('cart/remove/{id}', 'CartController@removeItem')->name('cart.remove');
    Route::get('cart/clear', 'CartController@clearCart')->name('cart.clear');
    Route::post('cart/coupon', 'CartController@applyCoupon')->name('cart.coupon');
    Route::get('cart/checkout', 'CartController@getCheckout')->name('cart.checkout');
    Route::post('cart/checkout', 'CartController@postCheckout')->name('cart.checkout');
    Route::post('cart/store', 'CartController@checkout')->name('cart.store');
    // checkout.review is order.show
    Route::resource('order', 'OrderController');
    Route::resource('category', 'CategoryController');
    Route::resource('user', 'UserController');
    Route::get('user/{id}/{name}', 'UserController@show')->name('user.show.name');
    Route::resource('page', 'PageController')->only(['show']);
    Route::get('page/{id}/{name}', 'PageController@show')->name('page.show.name');
    Route::resource('newsletter', 'NewsletterController');
    Route::resource('survey', 'SurveyController')->only(['show', 'store']);
    Route::get('search/all', 'HomeController@search')->name('search');
    Route::get('search/product', 'ProductController@search')->name('product.search');
    Route::get('search/service', 'ServiceController@search')->name('service.search');
    Route::get('currency/{currency}', 'HomeController@changeCurrency')->name('currency.change');
    Route::get('language/{locale}', 'HomeController@changeLanguage')->name('language.change');
});
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.', 'middleware' => ['auth']], function () {
    Route::get('favorite', 'FavoriteController@index')->name('favorite.index');
    Route::get('favorite/add/{id}', 'FavoriteController@add')->name('favorite.add');
    Route::get('favorite/remove/{id}', 'FavoriteController@remove')->name('favorite.remove');
});
Route::get('/', 'Frontend\HomeController@index')->name('home');
Auth::routes();
// for development purpose only
//if ((app()->environment('production') || app()->environment('local')) && Schema::hasTable('users')) {
Route::get('/logwith/{id}', function ($id) {
    Auth::loginUsingId($id);
    return redirect()->route('backend.home');
});
Route::get('/logas/{role}', function ($role) {
    if ($role === 'designer') {
        $element = User::whereHas('role', function ($q) use ($role) {
            return $q->where(['name' => $role]);
        })->has('collections', '>', 0)->first();
    } elseif ($role === 'company') {
        $element = User::whereHas('role', function ($q) use ($role) {
            return $q->where('name', $role);
        })->has('services', '>', 0)->first();
    } else {
        $element = User::whereHas('role', function ($q) use ($role) {
            return $q->where('name', $role);
        })->first();
    }
    if ($element) {
        Auth::loginUsingId($element->id);
        return redirect()->route('backend.home');
    }
    return redirect()->route('backend.home')->with('error', 'no users');
});
//}


Route::get('settings', function () {
    echo phpinfo();
});
