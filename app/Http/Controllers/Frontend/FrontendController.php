<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ApplicationSetting;
class FrontendController extends Controller
{
    public function index()
    {
        $contactDetails = ApplicationSetting::where('id', 1)->first();
        return view('frontend.index', ['contactDetails' => $contactDetails]);
    }
        
        
   

    public function aboutUs()
    {
       
        
        $contactDetails = ApplicationSetting::where('id', 1)->first();
        return view('frontend.about-us', ['contactDetails' => $contactDetails]);
    }

    
    public function services()
    {
        
        
        $contactDetails = ApplicationSetting::where('id', 1)->first();
        return view('frontend.services', ['contactDetails' => $contactDetails]);
    }
    public function serviceDetails()
    {
        
      
        $contactDetails = ApplicationSetting::where('id', 1)->first();
        return view('frontend.serviceDetails', ['contactDetails' => $contactDetails]);
    }

}