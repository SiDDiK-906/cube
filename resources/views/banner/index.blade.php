@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Banner </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Banner</li>
            <li class="breadcrumb-item active">View Banner</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-center">
                        <h5>All Banner</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th class="text-center">Sales Discount</th>
                                <th>Banner Title</th>
                                <th class="text-center">Banner Status</th>
                                <th>Banner Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($banner_datas as $banner_data)
                                <tr >
                                    <td>{{ $loop->index+1 }}</td>
                                    <td class="text-center">{{ $banner_data->discount }}%</td>
                                    <td>{{ $banner_data->title }}</td>
                                    <td class="text-center">
                                        @if ($banner_data->status == 'show')
                                        <a href="{{ route('show_hide_edit',$banner_data->id) }}" class="btn btn-sm btn-success">Hide</a>
                                        @else
                                        <a href="{{ route('show_hide_edit',$banner_data->id) }}" class="btn btn-sm btn-success">Show</a>
                                        @endif
                                    </td>
                                    <td>
                                        <img src="{{ asset('uploads/banner_pic').'/'.$banner_data->image }}" alt="not found" width="150px" height="200px">
                                    </td>
                                    <td>
                                        <div style="display: flex; justify-content:space-around">
                                            <a href="{{ route('banner.edit',$banner_data->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <a href="{{ route('banner.show',$banner_data->id) }}" class="btn btn-sm btn-warning">View</a>
                                            <form action="{{ route('banner.destroy',$banner_data->id) }}" method="POST">
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
