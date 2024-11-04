<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EventsController extends Controller
{
    public function index(Request $request)
    {
        // Search functionality
        $query = $request->input('query');
        if ($query) {
            $events = Event::where('event', 'like', '%' . $query . '%')
                           ->orWhere('description', 'like', '%' . $query . '%')
                           ->get();
        } else {
            $events = Event::all(); // Retrieve all events if no search query
        }
        
        return view('backend.events-list', compact('events'));
    }
    
    /**
     * Show the event details page for creating a new event.
     */
    public function create()
    {
        return view('backend.event-details');
    }

    /**
     * Retrieve and show the event details for editing.
     */
    public function eventDetails($id)
    {
        // Retrieve the event by ID
        $event = Event::find($id);

        // Check if the event exists
        if (!$event) {
            return redirect()->back()->with('error', 'Event not found.');
        }

        // Pass the event details to the view
        return view('backend.event-details', ['event' => $event]);
    }

    /**
     * Store a new event.
     */
    public function store(Request $request)
    {
        // Validation rules
        $validatedData = $request->validate([
            'event' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:events,slug',
            'description' => 'nullable|string',
            'event_date_from' => 'nullable|date',
            'venue' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        // Create the new event
        Event::create($validatedData);

        // Redirect back to the events list with success message
        return redirect()->route('backend.events.list')->with('success', 'Event created successfully!');
    }

    /**
     * Update an existing event.
     */
    public function update(Request $request, $id)
    {
        // Find the event by ID
        $event = Event::find($id);

        // Check if the event exists
        if (!$event) {
            return redirect()->back()->with('error', 'Event not found.');
        }

        // Validation rules for updating the event
        $validatedData = $request->validate([
            'event' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:events,slug,' . $event->id, // Allow slug to be the same as the current event's slug
            'description' => 'nullable|string',
            'event_date_from' => 'nullable|date',
            'venue' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        // Fill and update the event
        $event->fill($validatedData);
        $event->save();

        // Redirect back with success message
        return redirect()->route('backend.eventDetails', $event->id)->with('success', 'Event updated successfully!');
    }

    /**
     * Delete an event.
     */
    public function destroy($id)
    {
        Log::info("Attempting to delete event with ID: " . $id);

        // Find the event by ID
        $event = Event::find($id);

        if (!$event) {
            Log::warning("Event with ID {$id} not found for deletion.");
            return redirect()->back()->with('error', 'Event not found.');
        }

        // Attempt to delete the event
        try {
            $event->delete();
            return redirect()->route('backend.events.list')->with('success', 'Event deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error occurred while deleting the event: ' . $e->getMessage());
        }
    }
}
