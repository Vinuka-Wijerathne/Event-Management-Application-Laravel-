<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\EventImageController;



// BACKEND CONTROLLERS
use App\Http\Controllers\Backend\BackendController AS Backend;
use App\Http\Controllers\Backend\ApplicationSettingController AS BackendApplicationsettings;
use App\Http\Controllers\Backend\EventsController as BackendEventController;
use App\Http\Controllers\Backend\ServiceController; 
// FRONTEND CONTROLLERS
use App\Http\Controllers\Frontend\FrontendController AS Frontend;
use App\Http\Controllers\Frontend\ContactController AS FrontendContact;
use App\Http\Controllers\Frontend\ServiceController As Frontendservice;
use App\Http\Controllers\Frontend\EventController As Frontendevent;




// FRONTEND ROUTES
Route::get('/', [Frontend::class, 'index'])->name('frontend.index');

// Store contact form submissions
Route::get('/contact-us', [FrontendContact::class, 'contactUs'])->name('frontend.contactUs');
Route::post('/contact-us', [FrontendContact::class, 'store'])->name('frontend.contactUs.store');


Route::get('/about-us', [Frontend::class, 'aboutUs'])->name('frontend.aboutUs');
Route::get('/services', [Frontendservice::class, 'services'])->name('frontend.services');
Route::get('/service-details', [Frontendservice::class, 'serviceDetails'])->name('frontend.serviceDetails');
Route::get('/service-details/{id}', [Frontendservice::class, 'serviceDetails'])->name('frontend.serviceDetails');

Route::get('/events', [Frontendevent::class, 'events'])->name('frontend.events');
Route::get('/event-details', [Frontendevent::class, 'eventDetails'])->name('frontend.eventDetails');
Route::get('/evnt-details/{id}', [Frontendevent::class, 'eventDetails'])->name('frontend.eventDetails');

// Store contact form submissions


// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// BACKEND ROUTES



    //2 - Admin Routes
Route::group([ 'prefix' =>'admin', 'middleware' => ['auth','verified']], function () {


    

    Route::get('/', [Backend::class, 'index'])->name('backend.dashboard');
    Route::get('/contact-details', [BackendApplicationsettings::class, 'contactDetails'])->name('backend.contactDetails');
    Route::post('/contact-details/store', [BackendApplicationsettings::class, 'contactDetailsStore'])->name('backend.contactDetails.store');

    // Event routes
    Route::get('/event-details/create', [BackendEventController::class, 'create'])->name('backend.eventDetails.create');
    Route::get('/event-details/{id?}', [BackendEventController::class, 'eventDetails'])->name('backend.eventDetails'); // View or Edit an event    
    Route::post('/event-details/store', [BackendEventController::class, 'store'])->name('backend.eventDetails.store');
    Route::delete('/event-details/{id}', [BackendEventController::class, 'destroy'])->name('backend.eventDetails.destroy');
    Route::put('/event-details/{id}', [BackendEventController::class, 'update'])->name('backend.eventDetails.update');
    Route::get('/events-list', [BackendEventController::class, 'index'])->name('backend.events.list');
    //service routes
    Route::get('/services-details/create', [ServiceController::class, 'create'])->name('backend.serviceDetails.create');
    Route::get('/services-details/{id?}', [ServiceController::class, 'serviceDetails'])->name('backend.serviceDetails');
    Route::post('/services-details/store', [ServiceController::class, 'serviceDetailsStore'])->name('backend.serviceDetails.store');
    Route::delete('/services-details/{id}', [ServiceController::class, 'destroy'])->name('backend.serviceDetails.destroy');
    Route::put('/services-details/{id}', [ServiceController::class, 'update'])->name('backend.serviceDetails.update');
    Route::get('/services-list', [ServiceController::class, 'index'])->name('backend.services.list');

    
   
});





// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');

});

// Include the auth routes
require __DIR__.'/auth.php';
