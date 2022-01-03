@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Vendor</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Vendor</li>
            <li class="breadcrumb-item active">View Vendor</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-center">
                        <h5>All Vendor</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Vendor User Id</th>
                                <th>Vendor Address</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($vendors as $vendor)
                                <tr >
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $vendor->user_id }}</td>
                                    <td>{{ $vendor->address }}</td>
                                    <td>
                                        <div style="display: flex; justify-content:space-around">
                                            <a href="{{ route('vendor.edit',$vendor->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <a href="{{ route('vendor.show',$vendor->id) }}" class="btn btn-sm btn-warning">View</a>
                                            <form action="{{ route('vendor.destroy',$vendor->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
