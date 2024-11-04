<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        // Get the search query if available
        $query = $request->input('query');
    
        if ($query) {
            // Filter services based on the search query for service name or description
            $services = Service::where('service', 'LIKE', "%{$query}%")
                ->orWhere('description', 'LIKE', "%{$query}%")
                ->get();
        } else {
            // Fetch all services if no search query is provided
            $services = Service::all();
        }
    
        // Pass both services and query back to the view
        return view('backend.services-list', compact('services', 'query'));
        
    }
    
    /**
     * Show the service details page for creating a new service.
     */
    public function create()
    {
        // Return the form to create a new service
        return view('backend.services-details'); // Adjust this if necessary for your view structure
    }

    /**
     * Retrieve and show the service details for editing.
     */
    public function serviceDetails($id)
    {
        // Retrieve the service by ID
        $service = Service::find($id);

        // Check if the service exists
        if (!$service) {
            return redirect()->back()->with('error', 'Service not found.');
        }

        // Pass the service details to the view
        return view('backend.services-details', ['serviceDetails' => $service]);
    }

    /**
     * Store or update the service details.
     */
 /**
 * Store or update the service details.
 */
public function serviceDetailsStore(Request $request)
{
    // Validation rules
    $validatedData = $request->validate([
        'service' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:services,slug,' . ($request->id ?? 'NULL'), // Unique rule
        'description' => 'nullable|string',
        'image' => 'nullable|string|url', // Validate image as a URL
        'status' => 'required|in:active,inactive',
    ]);
    Log::info("Received Description: " . $request->input('description'));
    // Create or update service
    $service = $request->id ? Service::find($request->id) : new Service();

    // Check if the service exists when updating
    if ($request->id && !$service) {
        return redirect()->back()->with('error', 'Service not found for updating.');
    }

    // Fill the service with validated data and save
    $service->fill($validatedData);
    $service->save();

    // Redirect back to the same service details page with a success message
    return redirect()->route('backend.serviceDetails', $service->id)->with('success', 'Service details saved successfully!');
}

    /**
     * Update an existing service.
     */
    public function update(Request $request, $id)
    {
        // Find the service by ID
        $service = Service::find($id);

        // Check if the service exists
        if (!$service) {
            return redirect()->back()->with('error', 'Service not found.');
        }

        // Validation rules for updating the service
        $validatedData = $request->validate([
            'service' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,' . $service->id, // Allow slug to be the same as the current service's slug
            'description' => 'nullable|string',
            'image' => 'nullable|string|url', // Validate image as a URL
            'status' => 'required|in:active,inactive',
        ]);

        // Fill and update the service
        $service->fill($validatedData);
        $service->save();

        // Redirect back with success message
        return redirect()->route('backend.serviceDetails', $service->id)->with('success', 'Service updated successfully!');
    }

    /**
     * Delete a service.
     */
    public function destroy($id)
    {
        Log::info("Attempting to delete service with ID: " . $id);
    
        // Find the service by ID
        $service = Service::find($id);
        
        if (!$service) {
            Log::warning("Service with ID {$id} not found for deletion.");
            return redirect()->back()->with('error', 'Service not found.');
        }
    
        // Attempt to delete the service
        try {
            $service->delete();
            return redirect()->route('backend.serviceDetails.create')->with('success', 'Service deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error occurred while deleting the service: ' . $e->getMessage());
        }
    }
}    
