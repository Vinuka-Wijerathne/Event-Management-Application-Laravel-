<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use App\Models\ApplicationSetting;
class ContactController extends Controller
{
    public function contactUs()
    {
        
        $contactDetails = ApplicationSetting::where('id', 1)->first();
        return view('frontend.contact-us', ['contactDetails' => $contactDetails]);
    }
    
    public function store(Request $request)
{
    Log::info('Contact form submission started');

    // Log the incoming request data
    Log::info('Contact form submission received', $request->all());

    // Validate form data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:15',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    Log::info('Contact form validation passed');

    try {
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        Log::info('Contact form submission successful', [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    } catch (\Exception $e) {
        Log::error('Error saving contact form submission', [
            'error' => $e->getMessage(),
            'data' => $request->all(),
        ]);

        return redirect()->back()->with('error', 'There was an error sending your message. Please try again later.');
    }
}

}
