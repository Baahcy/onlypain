<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::get();

        return view('video.index')->with('videos', $videos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('video.create');
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
                'video' => 'required',


            ]
        );


        // Video
        $filenameWithExtension = $request->file('video')->getClientOriginalName();

        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        $extension = $request->file('video')->getClientOriginalExtension();

        $filenameToStorevideo = $filename . '_' . time() . '.' . $extension;

        $path = $request->file('video')->storeAs('public/video', $filenameToStorevideo);



        $video = new Video();

        $video->title = $request->title;

        $video->video = $filenameToStorevideo;

        // dd($video);

        $video->save();

        return redirect('/admin-video')->with('success', 'Video Details has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videos = Video::find($id);

        return view('video.edit')->with('videos', $videos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'title' => 'required',
                'video' => 'required',


            ]
        );


        // Video
        $filenameWithExtension = $request->file('video')->getClientOriginalName();

        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        $extension = $request->file('video')->getClientOriginalExtension();

        $filenameToStorevideo = $filename . '_' . time() . '.' . $extension;

        $path = $request->file('video')->storeAs('public/video', $filenameToStorevideo);



        $video = Video::find($id);

        $video->title = $request->title;

        $video->video = $filenameToStorevideo;

        // dd($video);

        $video->save();

        return redirect('/admin-video')->with('success', 'Video Details has been added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $videos = Video::find($id);
        $videos->delete();
        return redirect('/admin-video')->with('success', 'Video Details has been Deleted ');
    }
}
