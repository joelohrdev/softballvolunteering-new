<?php

namespace App\Http\Controllers;

use App\VolunteerEvent;
use Illuminate\Http\Request;

class VolunteerEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = VolunteerEvent::get()->where('volunteereventable', '=', null);
        return view('volunteerevent.index', compact('events'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VolunteerEvent  $volunteerEvent
     * @return \Illuminate\Http\Response
     */
    public function show(VolunteerEvent $volunteerEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VolunteerEvent  $volunteerEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(VolunteerEvent $volunteerEven, $id)
    {
        $event = VolunteerEvent::findOrFail($id);
        return view('volunteerevent.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VolunteerEvent  $volunteerEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VolunteerEvent $volunteerEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VolunteerEvent  $volunteerEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(VolunteerEvent $volunteerEvent)
    {
        //
    }
}
