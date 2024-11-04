<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ApplicationSetting;

class ServiceController extends Controller
{
    public function services()
    {
        $contactDetails = ApplicationSetting::where('id', 1)->first();
        $services = Service::all(); // Fetch all services

        // Pass services and contact details to the view
        return view('frontend.services', [
            'contactDetails' => $contactDetails,
            'services' => $services
        ]);
    }

    public function serviceDetails($id)
    {
        $contactDetails = ApplicationSetting::where('id', 1)->first();
        $service = Service::findOrFail($id); // Fetch the specific service by ID
    
        // Limit to the top 4 services
        $topServices = Service::pluck('service', 'id')->take(4); // Adjust as necessary to fit your service field
    
        // Pass service details, top services, and contact details to the view
        return view('frontend.serviceDetails', [
            'contactDetails' => $contactDetails,
            'service' => $service,
            'topServices' => $topServices
        ]);
    }
    

}
