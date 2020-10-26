<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    // public function getShop()
    // {
    //     $shops = Shop::get();

    //     return view('shop.index')->with('shops', $shops);
    // }

    public function index()
    {
        $shops = Shop::get();

        return view('shop.index')->with('shops', $shops);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => 'required',
                'price' => 'required',
                'description' => 'required',
                'image' => ''

            ]
        );

        $filenameWithExtension = $request->file('image')->getClientOriginalName();

        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        $extension = $request->file('image')->getClientOriginalExtension();

        $filenameToStore = $filename . '_' . time() . '.' . $extension;

        $path = $request->file('image')->storeAs('public/shop', $filenameToStore);


        $shop = new Shop();
        $shop->title = $request->title;
        $shop->price = $request->price;
        $shop->image = $filenameToStore;
        $shop->description = $request->description;

        $shop->save();

        return redirect('/admin-shop')->with('success', 'Shop item has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shops = Shop::find($id);

        return view('shop.edit')->with('shops', $shops);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'title' => 'required',
                'price' => 'required',
                'description' => 'required',
                'image' => 'required'

            ]
        );

        $filenameWithExtension = $request->file('image')->getClientOriginalName();

        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        $extension = $request->file('image')->getClientOriginalExtension();

        $filenameToStore = $filename . '_' . time() . '.' . $extension;

        $path = $request->file('image')->storeAs('public/shop', $filenameToStore);


        $shop = Shop::find($id);
        $shop->title = $request->title;
        $shop->price = $request->price;
        $shop->image = $filenameToStore;
        $shop->description = $request->description;

        $shop->save();

        return redirect('/admin-shop')->with('success', 'Shop item has been Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shops = Shop::find($id);
        $shops->delete();
        return redirect('/admin-shop')->with('success', 'Shop item has been Deleted ');
    }
}
