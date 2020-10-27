<?php

namespace App\Http\Controllers;

use App\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function getMusic()
    {
        $musics = Music::get();

        return view('admin.music')->with('musics', $musics);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics = Music::get();

        return view('music.index')->with('musics', $musics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('music.create');
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
                'music' => 'required',
                'artist' => 'required',
                'image' => ''

            ]
        );

        // Image
        $filenameWithExtension = $request->file('image')->getClientOriginalName();

        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        $extension = $request->file('image')->getClientOriginalExtension();

        $filenameToStore = $filename . '_' . time() . '.' . $extension;

        $path = $request->file('image')->storeAs('public/music', $filenameToStore);


        // Music
        $filenameWithExtension = $request->file('music')->getClientOriginalName();

        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        $extension = $request->file('music')->getClientOriginalExtension();

        $filenameToStoremusic = $filename . '_' . time() . '.' . $extension;

        $path = $request->file('music')->storeAs('public/mp3', $filenameToStoremusic);



        $music = new Music();

        $music->title = $request->title;
        $music->music = $filenameToStoremusic;
        $music->artist = $request->artist;
        $music->image = $filenameToStore;

        // dd($music);

        $music->save();

        return redirect('/admin-music')->with('success', 'Music Details has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $musics = Music::find($id);

        return view('music.edit')->with('musics', $musics);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'title' => 'required',
                'music' => 'required',
                'artist' => 'required',
                'image' => ''

            ]
        );

        //Image
        $filenameWithExtension = $request->file('image')->getClientOriginalName();

        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        $extension = $request->file('image')->getClientOriginalExtension();

        $filenameToStore = $filename . '_' . time() . '.' . $extension;

        $path = $request->file('image')->storeAs('public/music', $filenameToStore);

        // Music
        $filenameWithExtension = $request->file('music')->getClientOriginalName();

        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        $extension = $request->file('music')->getClientOriginalExtension();

        $filenameToStoremusic = $filename . '_' . time() . '.' . $extension;

        $path = $request->file('music')->storeAs('public/mp3', $filenameToStoremusic);


        $musics = Music::find($id);

        $musics->title = $request->title;
        $musics->music = $filenameToStoremusic;
        $musics->artist = $request->artist;
        $musics->image = $filenameToStore;


        $musics->save();

        return redirect('/admin-music')->with('success', 'Music Details has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $musics = Music::find($id);
        $musics->delete();
        return redirect('/admin-music')->with('success', 'Music Details has been Deleted ');
    }
}
