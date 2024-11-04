@extends('layouts.backend')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">{{ isset($event) ? 'Edit' : 'Create' }} Event</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">{{ isset($event) ? 'Edit Event' : 'Create Event' }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <!-- Form to Create or Update an Event -->
        <form method="POST" action="{{ isset($event) ? route('backend.eventDetails.update', $event->id) : route('backend.eventDetails.store') }}">
            @csrf
            @if(isset($event))
                @method('PUT') <!-- Use PUT for updates -->
            @endif

            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">{{ isset($event) ? 'Edit' : 'Create' }} Event</h4>
                </div><!-- end card header -->
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Success Message -->
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <!-- Error Message -->
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <!-- Validation Errors -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Input Fields for Event -->
                    <div class="row">
                        <!-- Event Name -->
                        <div class="col-md-6 mb-3">
                            <label for="event" class="form-label">Event Name</label>
                            <input type="text" name="event" id="event" class="form-control" 
                                value="{{ old('event', $event->event ?? '') }}" 
                                placeholder="Enter event name" required>
                        </div>

                        <!-- Slug -->
                        <div class="col-md-6 mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" 
                                value="{{ old('slug', $event->slug ?? '') }}" 
                                placeholder="Enter event slug" required>
                        </div>

                        <!-- Event Date From -->
                        <div class="col-md-6 mb-3">
                            <label for="event_date_from" class="form-label">Event Date From</label>
                            <input type="date" name="event_date_from" id="event_date_from" class="form-control" 
                                value="{{ old('event_date_from', $event->event_date_from ?? '') }}" required>
                        </div>

                        <!-- Venue -->
                        <div class="col-md-6 mb-3">
                            <label for="venue" class="form-label">Venue</label>
                            <input type="text" name="venue" id="venue" class="form-control" 
                                value="{{ old('venue', $event->venue ?? '') }}" 
                                placeholder="Enter venue" required>
                        </div>

                        <!-- Status -->
                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="active" {{ old('status', $event->status ?? '') == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status', $event->status ?? '') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <!-- Event Description -->
                        <div class="col-md-12 mb-3">
                            <label for="description" class="form-label">Event Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4" 
                                placeholder="Enter event description" required>{{ old('description', $event->description ?? '') }}</textarea>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-between">
                            <!-- Save or Update Button -->
                            <button type="submit" class="btn btn-primary">{{ isset($event) ? 'Update' : 'Save' }}</button>
                            
                            @if(isset($event))
                                <!-- Delete Button -->
                                <button type="button" class="btn btn-danger" onclick="deleteEvent()">Delete</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Hidden Delete Form -->
        @if(isset($event))
            <form id="deleteForm" method="POST" action="{{ route('backend.eventDetails.destroy', $event->id) }}" style="display:none;">
                @csrf
                @method('DELETE') <!-- For delete -->
            </form>
        @endif
    </div>
    <!--end col-->
</div>

<script>
    function deleteEvent() {
        if(confirm('Are you sure you want to delete this event?')) {
            document.getElementById('deleteForm').submit();
        }
    }
</script>

@endsection
