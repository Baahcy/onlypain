<?php

namespace App\Http\Controllers;

use App\Music;
use App\Shop;
use App\Video;
use Illuminate\Http\Request;
use Stripe;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getHomePage()
    {
        return view('pages.homepage');
    }

    public function getMusicPage()
    {
        $musics = Music::get();
        return view('pages.musicpage')->with('musics', $musics);
    }

    public function getShopPage()
    {
        $shops = Shop::get();
        return view('pages.shoppage')->with('shops', $shops);
    }

    public function getPaymentPage(){
        return view('pages.paymentpage');
    }

    public function purchase(Request $request)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 25,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This is new thanks"

        ]);

        // Session::flash('success', 'Payment has been successfully processed.');

        // return back();

        return redirect('/shop')->with('success', 'Payment has been successfully processed.');
    }

    public function getSubscribePage()
    {
        return view('pages.subscribe');
    }

    public function getVideoPage()
    {
        $videos = Video::get();
        return view('pages.videopage')->with('videos', $videos);
    }
}
