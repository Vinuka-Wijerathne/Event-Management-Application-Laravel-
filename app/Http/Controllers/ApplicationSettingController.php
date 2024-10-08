<?php

namespace App\Http\Controllers;

use App\Models\ApplicationSetting;
use Illuminate\Http\Request;

class ApplicationSettingController extends Controller
{
    // Get all application settings
    public function index()
    {
        return ApplicationSetting::all(); // This will return an empty list if no settings exist
    }

    // Create a new application setting
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'contact_address' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'contact_phone' => 'nullable|string',
            'social_facebook' => 'nullable|string',
            'social_youtube' => 'nullable|string',
            'social_instagram' => 'nullable|string',
            'social_tiktok' => 'nullable|string',
        ]);

        // Create and return the new application setting (it will allow null values)
        return ApplicationSetting::create($validatedData);
    }

    // Update an existing application setting
    public function update(Request $request, ApplicationSetting $applicationSetting)
    {
        $validatedData = $request->validate([
            'contact_address' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'contact_phone' => 'nullable|string',
            'social_facebook' => 'nullable|string',
            'social_youtube' => 'nullable|string',
            'social_instagram' => 'nullable|string',
            'social_tiktok' => 'nullable|string',
        ]);

        // Update the application setting (it will allow null or empty values)
        $applicationSetting->update($validatedData);
        return $applicationSetting;
    }

    // Delete an application setting
    public function destroy(ApplicationSetting $applicationSetting)
    {
        $applicationSetting->delete();
        return response()->json(['message' => 'Application setting deleted successfully']);
    }
}
