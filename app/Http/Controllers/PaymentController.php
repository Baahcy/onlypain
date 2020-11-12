<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Stripe;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.index');
    }

    public function purchase(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 150,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This is new thanks"
        ]);

        // Session::flash('success', 'Payment has been successfully processed.');

        // return back();

        return redirect('/shoppage')->with('success', 'Payment has been successfully processed.');
    }
}
