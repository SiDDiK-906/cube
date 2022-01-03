@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Category</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
            <li class="breadcrumb-item active">Edit Category</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Edit the Category</div>

                <div class="card-body">
                    <form action="{{ route('category.update',$the_data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="image">Category Name</label>
                            <input class="form-control" type="text" name="cat_name" placeholder="Category Name" value="{{ $the_data->cat_name }}">
                        </div>
                        @error('cat_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="cat_status">Category Status</label>
                            <select name="cat_status" class="form-control">
                                <option value="show" {{ $the_data->cat_status == 'show' ? 'selected' : '' }}>Show</option>
                                <option value="hide" {{ $the_data->cat_status == 'hide' ? 'selected' : '' }}>Hide</option>
                            </select>
                        </div>
                        @error('cat_status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="image">Your Description</label>
                            <textarea name="cat_description" class="form-control">{{ $the_data->cat_description }}</textarea>
                        </div>
                        @error('cat_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        {{-- previous image --}}
                        <div class="form-group">
                            <label for="image">Previous Image</label>
                            <img src="{{ asset('uploads/category_pic').'/'.$the_data->cat_image }}" alt="not found" style="width: 300px;"  class="form-control">
                        </div>
                        {{-- new image --}}
                        <div class="form-group">
                            <label for="image">Choose your Image</label>
                            <input type="file" name="cat_image" class="form-control">
                        </div>
                        @error('cat_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <button class="btn btn-primary mt-2">Edit Category</button>
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
