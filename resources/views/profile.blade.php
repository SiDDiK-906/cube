@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Profile </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Profie</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            {{-- For Changing Name --}}
            <div class="card">
                <div class="card-header bg-info">Change Your Name</div>

                <div class="card-body">
                    <form action="{{ route('change_name') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Enter your name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-success mt-3 mb-2">Submit</button>
                    </form>
                    @if (session('success'))
                        <div class="alert alert-success">
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif
                </div>
            </div>
            {{-- For Changing Profile Photo --}}
            <div class="card mt-5">
                <div class="card-header bg-info mb-2">Change Profile Photo</div>
                @if (session('photo_success'))
                        <div class="alert alert-success">
                            <span>{{ session('photo_success') }}</span>
                        </div>
                @endif
                <div class="text-center mt-3">
                    <img width="100px" id="image_id" class="mx-auto" src="{{ asset('uploads/profile_pic').'/'.Auth::user()->profile_photo }}" alt="old photo">
                </div>

                <div class="card-body">
                    <form action="{{ route('change_profile_pic') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Choose Your Photo</label>
                            <input class="form-control" type="file" name="profile_photo" onchange="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])">
                            @error('profile_photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-success mt-3 mb-2">Submit</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            {{-- For Changing Password --}}
            <div class="card">
                <div class="card-header bg-info">Change Password</div>

                <div class="card-body">
                    <form action="{{ route('change_password') }}" method="POST">
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
                        <div class="form-group">
                            <input class="form-control" type="password" name="old_password" placeholder="Old Password">
                        </div>
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if (session('old_pass'))
                                <div class="text-danger">
                                    <span>{{ session('old_pass') }}</span>
                                </div>
                            @endif
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="New Password">
                        </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        <div class="form-group">
                            <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password">
                        </div>
                            @error('confirm_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if (session('pass_match'))
                                <div class="text-danger">
                                    <span>{{ session('pass_match') }}</span>
                                </div>
                            @endif
                        <div class="form-group">
                            <button class="btn btn-success mt-2">Submit</button>
                        </div>
                    </form>
                    @if (session('change_success'))
                        <div class="alert alert-success">
                            <span>{{ session('change_success') }}</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
