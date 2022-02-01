<?php

namespace App\Http\Controllers;

use App\Models\Event;
 use App\Models\Photo;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Event::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Event::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Event::find($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->update($request->all());
        return $event;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Event::destroy($id);
    }

    public function saveImage(Request $request)
    {
        $request->photo->store('games');
        
        // $photo = new Photo;
        // $photo->name = $request->photo->getClientOriginalName();
        // $photo->path = $request->photo->store('public/images');
        // $photo->event_id = $request->event_id;
        // return $photo->path;

        $path = $request->photo->store('public/images');
        return $path;
    }

    public function showOrgaEventList()
    {
        return $events = auth()->user()->orga->events;
    }
}
