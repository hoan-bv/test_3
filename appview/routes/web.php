<?php

/**
 * Xem hướng dẫn sử dụng app('route') tại link:
 * https://github.com/mrjgreen/phroute
 */


use VatGia\Helpers\Facade\Route;

Route::get(
    ['/', 'test'],
    [\AppView\Controllers\HomeController::class, 'render']
);


Route::get(['/posts/{slug}-{id}', 'post.detail'], [\AppView\Controllers\PostController::class, 'detail']);

Route::get(
    ['/login', 'login'],
    [\AppView\Controllers\Auth\AuthController::class, 'showLoginForm']
);

Route::get(
    ['/idvg/login-callback', 'login-callback'],
    [\AppView\Controllers\Auth\AuthController::class, 'loginCallback']
);

Route::group([
    'before' => [
        \AppView\Middlewares\LoginRequire::class
    ]
], function () {

    Route::get(
        ['/logout', 'logout'],
        [\AppView\Controllers\Auth\AuthController::class, 'logout']
    );

    Route::get(
        ['/profile', 'profile'],
        [\AppView\Controllers\Auth\AuthController::class, 'showProfile'],
        [
            'before' => ['auth'],
        ]
    );

});

//wepay

Route::get(
    ['/wepay', 'home'],
    [\AppView\Controllers\UsersController::class, 'render']
);
Route::get('vay-von',
    [\AppView\Controllers\NewsController::class, 'render_news']);
Route::get('goi-vay',
    [\AppView\Controllers\LoansController::class, 'render']);




Route::group(['prefix', 'ajax'], function () {
    Route::get(
        ['/get_district', 'ajax.get_district'],
        [\AppView\Controllers\Ajax\CityController::class, 'district']
    );
    Route::get(
        ['/get_news', 'ajax.get_news'],
        [\AppView\Controllers\NewsController::class, 'getMoreNews']
    );
    Route::get(
        ['/get_orders', 'ajax.get_orders'],
        [\AppView\Controllers\Ajax\OrdersController::class, 'getFilterOrders']
    );
});
