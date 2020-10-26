<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

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
        return view('pages.musicpage');
    }

    public function getShopPage()
    {
        $shops = Shop::get();
        return view('pages.shoppage')->with('shops', $shops);
    }

    public function getSubscribePage()
    {
        return view('pages.subscribe');
    }
}
