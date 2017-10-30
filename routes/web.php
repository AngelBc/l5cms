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

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('/', function () {

    return view('welcome');
});

//Route::group([
//    'prefix' => LaravelLocalization::setLocale(),
////    'middleware' => [ 'localeSessionRedirect' ]
//    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//], function()
//{
//    Route::group([
//        'prefix' => 'admin',
////        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
////    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//    ], function() {
//
//
//
//        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
//        Route::get('/home', function () {
//
//            //        dd(LaravelLocalization::getCurrentLocale());
//
//            return view('home');
//            //        return View::make('hello');
//        });
//
//        Route::get('test', function () {
//
//            //        dd(LaravelLocalization::getCurrentLocale());
//
//            return view('test');
//
//            //        return View::make('test');
//        });
//    });
//});
