<?php

namespace App\Http\Controllers;

use App\Models\EventImage;
use Illuminate\Http\Request;

class EventImageController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'event_id' => 'required|exists:events,id',
            'image' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        return EventImage::create($validatedData);
    }

    public function update(Request $request, EventImage $eventImage)
    {
        $validatedData = $request->validate([
            'image' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        $eventImage->update($validatedData);
        return $eventImage;
    }

    public function destroy(EventImage $eventImage)
    {
        $eventImage->delete();
        return response()->json(['message' => 'Event image deleted successfully']);
    }
}
