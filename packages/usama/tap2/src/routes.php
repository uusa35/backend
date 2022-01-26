<?php


Route::group(['namespace' => 'Usama\Tap2\Controllers'], function () {
    Route::group(['middleware' => 'api'], function () {
        Route::post('api/tap2/payment', 'Tap2PaymentController@makePaymentApi')->name('tap2.api.payment.create');
    });

    Route::group(['middleware' => ['web', 'auth']], function () {
        Route::post('tap2/payment', 'Tap2PaymentController@makePayment')->name('tap2.web.payment.create');
    });
    Route::group(['middleware' => ['web']], function () {
        Route::get('tap2/result', 'Tap2PaymentController@result')->name('tap2.web.payment.result');
        Route::get('tap2/error', 'Tap2PaymentController@error')->name('tap2.web.payment.error');

        Route::get('tap2/return', 'Tap2PaymentController@tapReturn')->name('tap2.web.payment.return');
        Route::get('tap2/post', 'Tap2PaymentController@tapPost')->name('tap2.web.payment.post');
    });
});




