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

Route::get('/payment', 'PagesController@getPaymentPage')->name('paymentpage');

Route::post('/payment', 'PagesController@purchase')->name('stripe.payment');



Route::get('/video', 'PagesController@getVideoPage')->name('videopage');


// Dashboard Routes and Controller

Route::get('/admin-dashboard', 'DashboardController@getDashboard')->name('dashboard');


// Subscriber Route and Controller
Route::resource('/admin-subscriber', 'SubscriberController');

Route::get('/subscribe', 'SubscriberController@getSubscribePage')->name('subscribepage');

Route::get('/signup', 'SubscriberController@getSignupPage')->name('signuppage');

Route::post('/signup', 'SubscriberController@getSignupPagestore')->name('signuppagestore');




// Shop Route and Controller
Route::resource('admin-shop', 'ShopController');


// Music Route and Controller
Route::resource('/admin-music', 'MusicController');


// Newsletter Route and Controller
Route::get('/admin-newsletter', 'NewsletterController@getNewsletter')->name('newsletter');

// Video Route and Controller
Route::resource('/admin-video', 'VideoController');

// Stripe Route and Controller
// Route::get('stripe-payment', 'StripeController@handleGet');
// Route::post('stripe-payment', 'StripeController@handlePost')->name('stripe.payment');

// Route::get('/payment', 'PaymentController@index');
// Route::post('/payment', 'PaymentController@purchase')->name('stripe.payment');
