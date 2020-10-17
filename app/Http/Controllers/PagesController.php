<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getRegisterForms()
    {
        return view('pages.registerforms');
    }

    public function getLoginForms()
    {
        return view('pages.loginforms');
    }
}
