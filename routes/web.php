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


// Dashboard Routes and Controller

Route::get('/admin-dashboard', 'DashboardController@getDashboard')->name('dashboard');


// Subscriber Route and Controller

Route::get('/admin-subscriber', 'SubscriberController@getSubscriber')->name('subscriber');


// Shop Route and Controller

// Route::get('/admin-shop', 'ShopController@getShop')->name('shop');

// Route::post('/admin-shop/store', 'ShopController@store')->name('shop-store');

// Route::get('/admin-shop/create', 'ShopController@create')->name('shop-create');

// Route::get('admin-shop/{id}/edit','ShopController@edit')->name('shop-edit');

Route::resource('/admin-shop', 'ShopController');



// Music Route and Controller

Route::get('/admin-music', 'MusicController@getMusic')->name('music');


// Newsletter Route and Controller

Route::get('/admin-newsletter', 'NewsletterController@getNewsletter')->name('newsletter');
