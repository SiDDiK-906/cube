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
                <div class="card-header bg-info">Change Password</div>

                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <ul>
                                        <li class="text-danger">{{ $error}}</li>
                                    </ul>
                                @endforeach
                            </div>
                        @endif --}}
                        {{-- @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if (session('old_pass'))
                                <div class="text-danger">
                                    <span>{{ session('old_pass') }}</span>
                                </div>
                            @endif --}}
                        <div class="form-group">
                            <label for="image">Category Name</label>
                            <input class="form-control" type="text" name="cat_name" placeholder="Category Name">
                        </div>
                        @error('cat_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="image">Your Description</label>
                            <textarea name="cat_description" class="form-control"></textarea>
                        </div>
                        @error('cat_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="image">Choose your Image</label>
                            <input type="file" name="cat_image" class="form-control">
                        </div>
                        @error('cat_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <button class="btn btn-primary mt-2">Add New Category</button>
                        </div>
                    </form>
                    @if (session('image_success'))
                        <div class="alert alert-success">
                            <span>{{ session('image_success') }}</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
