<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Newsletter;
use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscriber::get();
        return view('subscriber.index')->with('subscribers', $subscribers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);

        $newletters = new Newsletter([
            'title' => $request->input('title'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),

        ]);


        $subscribers = Subscriber::get();

        $newletters->save();

        foreach ($subscribers as $subscriber) {
            $details = [
                'name' => $subscriber->name,
                'email' => $subscriber->email,
                'title' => $newletters->title,
                'subject' => $newletters->subject,
                'message' => $newletters->message

            ];

            SendEmail::dispatchNow($details);
        }
        return redirect('admin-subscriber')->with('success', 'Newsletter Sent Successfully');




        // foreach ($subscribers as $subscriber) {

        //     $details = [
        //         'name' => $subscriber->name,
        //         'email' => $subscriber->email

        //     ];

        //       dd($details);
        //       SendEmail::dispatchNow($details);

        // };

        // dd($subscriber);
        // $subscriber->save();
        // return redirect('admin-subscriber')->with('success', 'Newsletter Sent Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }
}
