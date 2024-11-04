<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\ApplicationSetting;
use App\Models\Event;

class EventController extends Controller
{
    public function events()
    {
        $contactDetails = ApplicationSetting::where('id', 1)->first();
        $event = Event::all(); // Fetch all services

        // Pass services and contact details to the viewe
        return view('frontend.events', ['contactDetails' => $contactDetails, 'events' => $event]);
    }
    public function eventDetails($id)
    {
        $contactDetails = ApplicationSetting::where('id', 1)->first();
        $event = Event::findOrFail($id); // Fetch the specific event by ID
    
        return view('frontend.eventDetails', [
            'contactDetails' => $contactDetails,
            'event' => $event,
            'topEvents' => Event::where('status', 'active')->take(5)->get() // Example to fetch top events
        ]);
    }
    

}
