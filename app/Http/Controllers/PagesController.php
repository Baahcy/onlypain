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

    public function index()
    {
        return view('pages.index');
    }

    public function getShop()
    {
        $shops = Shop::get();
        return view('pages.shop')->with('shops', $shops);
    }

    public function getMusic()
    {
        $musics = Music::get();
        return view('pages.music')->with('musics', $musics);
    }

    public function getVideo()
    {
        $videos = Video::get();
        return view('pages.video')->with('videos', $videos);
    }

    // public function purchase(Request $request)
    // {

    //     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    //     Stripe\Charge::create ([
    //             "amount" => 100 * 25,
    //             "currency" => "usd",
    //             "source" => $request->stripeToken,
    //             "description" => "This is new thanks"

    //     ]);

    //     // Session::flash('success', 'Payment has been successfully processed.');

    //     // return back();

    //     return redirect('/shop')->with('success', 'Payment has been successfully processed.');
    // }

}
