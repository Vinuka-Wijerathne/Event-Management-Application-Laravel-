<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Event;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
        // Logic to handle the request for the backend homepage
        return view('backend.index'); // Reference to the view to display
    }

    // Fetch Contact Details
    public function showContactDetails()
    {
        $contactDetails = Contact::first();
        return view('backend.contact-details', compact('contactDetails'));
    }

    // Fetch Event Details
    public function showeventdetails()
    {
        // Retrieve all events
        $events = Event::all();

        // Pass the events to the 'backend.event-details' view
        return view('backend.event-details', compact('events'));
    }
}
