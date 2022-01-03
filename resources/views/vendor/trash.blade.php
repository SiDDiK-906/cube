@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Category</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
            <li class="breadcrumb-item active">Trash Category</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-center">
                        <h5>Trash Category</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Category Image</th>
                                <th class="text-center">Category Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($trash_data as $trash)
                                <tr >
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $trash->cat_name }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/category_pic').'/'.$trash->cat_image }}" alt="not found" width="250px">
                                    </td>
                                    <td class="text-center">
                                        @if ($trash->cat_status == 'show')
                                            <a href="{{ route('show_hide_edit',$trash->id) }}" class="btn btn-sm btn-success">Hide</a>
                                        @else
                                            <a href="{{ route('show_hide_edit',$trash->id) }}" class="btn btn-sm btn-success">Show</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('category.edit',$trash->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="{{ route('category.show',$trash->id) }}" class="btn btn-sm btn-warning">View</a>
                                        <div class="mt-1">
                                            <a href="{{ route('restore',$trash->id) }}" class="btn btn-sm btn-primary">Restore</a>
                                            <a href="{{ route('force_delete',$trash->id) }}" class="btn btn-sm btn-danger">Force Delete</a>
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
