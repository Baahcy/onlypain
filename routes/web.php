<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Client Routes

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homepage', 'PagesController@getHomePage')->name('homepage');

Route::get('/music', 'PagesController@getMusicPage')->name('musicpage');

Route::get('/shop', 'PagesController@getShopPage')->name('shoppage');

Route::get('/subscribe', 'PagesController@getSubscribePage')->name('subscribepage');


// Admin Routes

Route::get('/admin-dashboard', 'DashboardController@getDashboard')->name('dashboard');

Route::get('/admin-subscriber', 'SubscriberController@getSubscriber')->name('subscriber');

Route::get('/admin-shop', 'ShopController@getShop')->name('shop');

Route::get('/admin-music', 'MusicController@getMusic')->name('music');

Route::get('/admin-newsletter', 'NewsletterController@getNewsletter')->name('newsletter');













