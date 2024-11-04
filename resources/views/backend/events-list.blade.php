@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>All Events</h1>
        <a href="{{ route('backend.eventDetails.create') }}" class="btn btn-success">Create New Event</a>
    </div>

    <!-- Search Form -->
    <form action="{{ route('backend.events.list') }}" method="GET" class="mb-4">
        <div class="input-group" style="max-width: 300px;">
            <input
                type="text"
                name="query"
                class="form-control"
                placeholder="Search events..."
                value="{{ request()->input('query') }}"
            >
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>

    @if($events && $events->count() > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->event }}</td>
                <td>{{ $event->description }}</td>
                <td>{{ $event->created_at->format('d-m-Y') }}</td>
                <td>
                    <a href="{{ route('backend.eventDetails', $event->id) }}" class="btn btn-info btn-sm">Edit</a>

                    <form action="{{ route('backend.eventDetails.destroy', $event->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No events available.</p>
    @endif
</div>
@endsection
