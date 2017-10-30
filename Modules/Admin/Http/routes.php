<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{


    Route::group(['middleware' => ['web'], 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
    {


        //Admin dashboard
        Route::name('admin.dashboard')->get('/dashboard', 'AdminController@index');

        //Admin Login
        Route::name('admin.login')->get('/login', 'Auth\LoginController@showLoginForm');
        Route::name('admin.login.post')->post('/login', 'Auth\LoginController@login');
        Route::name('admin.logout')->get('/logout', 'Auth\LoginController@logout');

    });


});
