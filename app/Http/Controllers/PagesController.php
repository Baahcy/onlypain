<?php

namespace App\Http\Controllers;

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
        return view('pages.shoppage');
    }

    public function getSubscribePage()
    {
        return view('pages.subscribe');
    }
}
