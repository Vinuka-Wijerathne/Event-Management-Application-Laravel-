<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ApplicationSetting;
use Illuminate\Http\Request;

class ApplicationSettingController extends Controller
{

    public function contactDetails(){
        // Retrieve the existing contact details
        $contactDetails = ApplicationSetting::where('id', 1)->first();
        return view('backend.contact-details', ['contactDetails' => $contactDetails]);
    }

    public function contactDetailsStore(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'address' => 'nullable|string',
        ]);

        // Check if contact details already exist
        $contactDetails = ApplicationSetting::where('id', 1)->first();
        if (!empty($contactDetails)) {
            // Update existing contact details
            $contactDetails->update($validatedData);
        }

        // Redirect back with success message and the contact details
        return redirect()->route('backend.contactDetails')->with('success', 'Contact details saved successfully!');
    }
}
