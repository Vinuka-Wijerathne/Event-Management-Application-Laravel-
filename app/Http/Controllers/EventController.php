<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return Event::with('images')->get();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'slug' => 'required|unique:events',
            'event' => 'required',
            'event_date_from' => 'required|date',
            'venue' => 'required',
            'status' => 'required|in:active,inactive',
        ]);

        return Event::create($validatedData);
    }

    public function show(Event $event)
    {
        return $event->load('images');
    }

    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'slug' => 'required|unique:events,slug,' . $event->id,
            'event' => 'required',
            'event_date_from' => 'required|date',
            'venue' => 'required',
            'status' => 'required|in:active,inactive',
        ]);

        $event->update($validatedData);
        return $event;
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return response()->json(['message' => 'Event deleted successfully']);
    }
}
