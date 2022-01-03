@extends('layouts.app')

@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Home </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="welcome_sms">
                <div class="alert alert-success text-center text-primary"> Hello
                    @if (Auth::user()->role == 1)
                        Customer
                    @elseif (Auth::user()->role == 3)
                        Vendor
                    @else
                        Admin
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>User ID</td>
                            <td>{{ Auth::id() }}</td>
                        </tr>
                        <tr>
                            <td>User Role</td>
                            <td>
                                @if (Auth::user()->role == 1)
                                    Customer
                                @elseif (Auth::user()->role == 3)
                                    Vendor
                                @else
                                    Admin
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td>User Email</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <td>User Phone</td>
                            <td>
                                @if(Auth::user()->phone == NULL)
                                    {{ 'N/A' }}
                                @else
                                    {{ Auth::user()->phone }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Account Created</td>
                            <td>{{ Auth::user()->created_at->diffForHumans() }}</td>
                        </tr>
                        <tr>
                            <td>User Image</td>
                            <td>
                                <img width="100px" src="{{ asset('uploads/profile_pic/').'/'.Auth::user()->profile_photo }}" alt="not_found">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
