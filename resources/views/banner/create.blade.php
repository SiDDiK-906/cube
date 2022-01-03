@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Profile </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Banner</li>
            <li class="breadcrumb-item active">Add Banner</li>
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
                    <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="discount">Sale Discount</label>
                            <input class="form-control" type="number" name="discount" placeholder="Ex: 50%">
                        </div>
                        @error('discount')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="title">Banner Title</label>
                            <input class="form-control" type="text" name="title" placeholder="Banner Title">
                        </div>
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="image">Choose Banner Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <button class="btn btn-primary mt-2">Add New Banner</button>
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
