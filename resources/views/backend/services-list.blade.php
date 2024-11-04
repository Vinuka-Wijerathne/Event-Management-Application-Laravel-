@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>All Services</h1>
        <a href="{{ route('backend.serviceDetails.create') }}" class="btn btn-success">Create New Service</a>
    </div>

    <!-- Search Form -->
    <form action="{{ route('backend.services.list') }}" method="GET" class="mb-4">
        <div class="input-group" style="max-width: 300px;">
            <input
                type="text"
                name="query"
                class="form-control"
                placeholder="Search services..."
                value="{{ request()->input('query') }}"
            >
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>

    @if($services && $services->count() > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Service Name</th>
                <th>Description</th>
                <th>Status</th> <!-- Added Status column -->
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{ $service->service }}</td>
                <td>{{ Str::limit(strip_tags($service->description), 100) }}</td> <!-- Display first 100 characters -->
                <td>{{ ucfirst($service->status) }}</td> <!-- Displaying Status -->
                <td>{{ $service->created_at->format('d-m-Y') }}</td>
                <td>
                    <a href="{{ route('backend.serviceDetails', $service->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <form action="{{ route('backend.serviceDetails.destroy', $service->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No services available.</p>
    @endif
</div>
@endsection
