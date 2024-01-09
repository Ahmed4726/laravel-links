<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CaptchaController;

Route::get('/', function () {
    return view('index');
})->name('welcome');

Route::get('/reload-captcha','CaptchaController@reloadCaptcha');

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function() {

    Route::get('/links', 'LinkController@index');
    Route::get('/links/new', 'LinkController@create');
    Route::post('/links/new', 'LinkController@store');
    Route::get('/links/{link}', 'LinkController@edit');
    Route::post('/links/{link}', 'LinkController@update');
    Route::delete('/links/{link}', 'LinkController@destroy');

    Route::get('/settings', 'UserController@edit');
    Route::post('/settings', 'UserController@update');
    //payment
    Route::get('/payment-prove', 'PaymentController@show_payment')->name('prove.payment');
    Route::post('/payment-prove', 'PaymentController@store')->name('post.payment');
    //banner
    Route::get('/add/banner', 'BannerController@create')->name('add.banner');
    Route::post('/save/banner', 'BannerController@store')->name('save.banner');
    Route::get('/banners', 'BannerController@index')->name('banners.index');
    Route::get('/edit/{banner}', 'BannerController@edit')->name('banners.edit');
    Route::post('/update/{banner}', 'BannerController@update')->name('banners.update');
});

Route::post('/visit/{link}', 'VisitController@store');

Route::get('{user}', 'UserController@show')->name('profile');
