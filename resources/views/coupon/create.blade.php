@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Profile </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Coupon</li>
            <li class="breadcrumb-item active">Add Coupon</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info mb-1">Add Coupon</div>
                @if (session('success'))
                    <div class="alert alert-success">
                        <span>{{ session('success') }}</span>
                    </div>
                @endif
                <div class="card-body pt-1">
                    <form action="{{ route('coupon.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="image">Coupon Name <small>(Coupon CODE)</small></label>
                            <input class="form-control" type="text" name="name" placeholder="Ex: HT8e32">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        @if (session('name_error'))
                            <span class="text-danger">
                                {{ session('name_error') }}
                            </span>
                        @endif
                        <div class="form-group">
                            <label for="Discount">Coupon Discount <small>(will count on percentage)</small></label>
                            <input class="form-control" type="text" name="discount" placeholder="Ex: 50">
                        </div>
                        @error('discount')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="validity">Coupon validity</label>
                            <input class="form-control" type="date" name="validity">
                        </div>
                        @error('validity')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="limit">Coupon Limitation <small>(Usable Users Limitation)</small></label>
                            <input class="form-control" type="text" name="limit" placeholder="Ex: 30">
                        </div>
                        @error('limit')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <button class="btn btn-primary mt-2">Add New Coupon</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
