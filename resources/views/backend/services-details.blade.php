@extends('layouts.backend')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">{{ isset($serviceDetails) ? 'Edit' : 'Create' }} Service</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">{{ isset($serviceDetails) ? 'Edit Service' : 'Create Service' }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <!-- Update or Create Form -->
        <form method="POST" action="{{ isset($serviceDetails) ? route('backend.serviceDetails.update', $serviceDetails->id) : route('backend.serviceDetails.store') }}">
            @csrf
            @if(isset($serviceDetails))
                @method('PUT') <!-- Use PUT for updates -->
            @endif
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">{{ isset($serviceDetails) ? 'Edit' : 'Create' }} Service</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="row">
                        <!-- Success and Error Messages -->
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
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

                    <!-- Input Fields for Service -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="service" class="form-label">Service Name</label>
                            <input type="text" name="service" id="service" class="form-control" 
                                value="{{ old('service', $serviceDetails->service ?? '') }}" 
                                placeholder="Enter service name" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" 
                                value="{{ old('slug', $serviceDetails->slug ?? '') }}" 
                                placeholder="Enter slug" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="active" {{ old('status', $serviceDetails->status ?? '') == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status', $serviceDetails->status ?? '') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <!-- CKEditor for Description -->
                        <div class="col-md-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter service description" required>{{ old('description', $serviceDetails->description ?? '') }}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="image" class="form-label">Image URL</label>
                            <input type="url" name="image" id="image" class="form-control" 
                                value="{{ old('image', $serviceDetails->image ?? '') }}" 
                                placeholder="Enter image URL" required>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">{{ isset($serviceDetails) ? 'Update' : 'Save' }}</button>
                            @if(isset($serviceDetails))
                                <button type="button" class="btn btn-danger" onclick="deleteService()">Delete</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Hidden Delete Form -->
        @if(isset($serviceDetails))
            <form id="deleteForm" method="POST" action="{{ route('backend.serviceDetails.destroy', $serviceDetails->id) }}" style="display:none;">
                @csrf
                @method('DELETE')
            </form>
        @endif
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor
    CKEDITOR.replace('description', {
        height: 200,
        placeholder: 'Enter service description...'
    });

    function deleteService() {
        if(confirm('Are you sure you want to delete this service?')) {
            document.getElementById('deleteForm').submit();
        }
    }
</script>

@endsection
