@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Profile </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
            <li class="breadcrumb-item active">Add Category</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info mb-1">Change Location</div>
                @if (session('success'))
                    <div class="alert alert-success">
                        <span>{{ session('success') }}</span>
                    </div>
                @endif
                <div class="card-body pt-1">
                    <form action="{{ route('location_update') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="location">Location Name</label>
                            <select id="location_dropdown" class="form-control" name="countries[]" multiple>
                                <option value="">Select Locations</option>
                                    @foreach ($all_country_info as $all_country)
                                        <option {{ ($all_country->status == 'active') ? 'selected' : ''}} value="{{ $all_country->id }}">{{ $all_country->name }}</option>
                                    @endforeach
                            </select>
                        </div>
                        @error('location')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group text-center">
                            <button class="btn btn-primary mt-2" type="submit">Update Locations</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('location_index')
    <script>
        $(document).ready(function() {
            $('#location_dropdown').select2();
        });
    </script>
@endsection
