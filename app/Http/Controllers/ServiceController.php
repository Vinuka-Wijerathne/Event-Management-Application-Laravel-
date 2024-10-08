<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return Service::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'slug' => 'required|unique:services',
            'service' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        return Service::create($validatedData);
    }

    public function show(Service $service)
    {
        return $service;
    }

    public function update(Request $request, Service $service)
    {
        $validatedData = $request->validate([
            'slug' => 'required|unique:services,slug,' . $service->id,
            'service' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $service->update($validatedData);
        return $service;
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json(['message' => 'Service deleted successfully']);
    }
}
