<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getRegisterForms()
    {
        return view('pages.registerforms');
    }

    public function getLoginForms()
    {
        return view('pages.loginforms');
    }

    // For Testing Purpose

    public function getTestLogin()
    {
        return view('pages.testlogin');
    }

    public function getTestRegister()
    {
        return view('pages.testregister');
    }
    // For Testing Purpose
}
