@extends('layouts.backend')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Contact Details</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Contact Details</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">

    <div class="col-lg-12">
        <form method="POST" action="{{ route('backend.contactDetails.store') }}">
            @csrf
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Contact Details</h4>
                    
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="row"> 
                        <div class="col-sm-12">
                            <!-- Display success message -->
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <!-- Display validation errors -->
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
                    <div class="row">
                        <!-- Phone -->
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" 
                                value="{{ old('phone', $contactDetails->phone ?? '') }}" 
                                placeholder="Enter phone number">
                        </div>
                
                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" 
                                value="{{ old('email', $contactDetails->email ?? '') }}" 
                                placeholder="Enter email">
                        </div>
                
                        <!-- Address -->
                        <div class="col-md-12 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control" 
                                value="{{ old('address', $contactDetails->address ?? '') }}" 
                                placeholder="Enter address">
                        </div>
                
                        <!-- Google Map Location -->
                        <div class="col-md-12 mb-3">
                            <label for="google_map_location" class="form-label">Google Map Location</label>
                            <input type="url" name="google_map_location" id="google_map_location" class="form-control" 
                                value="{{ old('google_map_location', $contactDetails->google_map_location ?? '') }}" 
                                placeholder="Enter Google Map URL">
                        </div>
                
                        <!-- Facebook -->
                        <div class="col-md-6 mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="url" name="facebook" id="facebook" class="form-control" 
                                value="{{ old('facebook', $contactDetails->facebook ?? '') }}" 
                                placeholder="Enter Facebook URL">
                        </div>
                
                        <!-- Tiktok -->
                        <div class="col-md-6 mb-3">
                            <label for="tiktok" class="form-label">Tiktok</label>
                            <input type="url" name="tiktok" id="tiktok" class="form-control" 
                                value="{{ old('tiktok', $contactDetails->tiktok ?? '') }}" 
                                placeholder="Enter Tiktok URL">
                        </div>
                
                        <!-- Instagram -->
                        <div class="col-md-6 mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="url" name="instagram" id="instagram" class="form-control" 
                                value="{{ old('instagram', $contactDetails->instagram ?? '') }}" 
                                placeholder="Enter Instagram URL">
                        </div>
                
                        <!-- Youtube -->
                        <div class="col-md-6 mb-3">
                            <label for="youtube" class="form-label">Youtube</label>
                            <input type="url" name="youtube" id="youtube" class="form-control" 
                                value="{{ old('youtube', $contactDetails->youtube ?? '') }}" 
                                placeholder="Enter Youtube URL">
                        </div>
                
                       
                    </div>
                
                </div>
                <div class="card-footer">
                    <div class="row">   
                        <div class="col-sm-12 d-flex justify-content-end ">
                            <button type="submit" class="btn btn-primary">Save </button>
                        </div>
                    </div>
                
                </div>
            </div>
        </form>
    </div>
    <!--end col-->
</div>

@endsection