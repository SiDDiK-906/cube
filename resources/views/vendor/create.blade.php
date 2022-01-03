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
                <div class="card-header bg-info mb-1">Change Password</div>
                @if (session('success'))
                    <div class="alert alert-success">
                        <span>{{ session('success') }}</span>
                    </div>
                @endif
                <div class="card-body pt-1">
                    <form action="{{ route('vendor.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="image">Vendor Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Vendor Name">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="phone">Vendor phone</label>
                            <input class="form-control" type="text" name="phone" placeholder="Vendor phone">
                        </div>
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="email">Vendor email</label>
                            <input class="form-control" type="text" name="email" placeholder="Vendor email">
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="address">Vendor address</label>
                            <input class="form-control" type="text" name="address" placeholder="Vendor address">
                        </div>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <button class="btn btn-primary mt-2">Add New Vendor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
