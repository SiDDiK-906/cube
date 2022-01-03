@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Category </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
            <li class="breadcrumb-item active">View Category</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Show the Category of <b>{{ $show_data->cat_name }}</b></div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Category Id</td>
                            <td>{{ $show_data->id }}</td>
                        </tr>
                        <tr>
                            <td>Category Name</td>
                            <td>{{ $show_data->cat_name }}</td>
                        </tr>
                        <tr>
                            <td>Category Description</td>
                            <td>{{ $show_data->cat_description }}</td>
                        </tr>
                        <tr>
                            <td>Category Image</td>
                            <td>
                                <img width="250px" src="{{ asset('uploads/category_pic').'/'.$show_data->cat_image }}" alt="not found">
                            </td>
                        </tr>
                        <tr>
                            <td>Category Status</td>
                            <td>{{ $show_data->cat_status }}</td>
                        </tr>
                        <tr>
                            <td>Category Created</td>
                            <td>{{ $show_data->created_at->diffForHumans() }}</td>
                        </tr>
                        <tr>
                            <td>Category Updated</td>
                            <td>
                                @if ($show_data->updated_at == NULL)
                                    N/A
                                @else
                                    {{ $show_data->updated_at->diffForHumans() }}
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
