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
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-center">
                        <h5>All Category</h5>
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
                            @foreach ($view_cats as $view_cat)
                                <tr >
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $view_cat->cat_name }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/category_pic').'/'.$view_cat->cat_image }}" alt="not found" width="250px">
                                    </td>
                                    <td class="text-center">
                                        @if ($view_cat->cat_status == 'show')
                                            <a href="{{ route('show_hide_edit',$view_cat->id) }}" class="btn btn-sm btn-success">Hide</a>
                                        @else
                                            <a href="{{ route('show_hide_edit',$view_cat->id) }}" class="btn btn-sm btn-success">Show</a>
                                        @endif
                                    </td>
                                    <td>
                                        <div style="display: flex; justify-content:space-around">
                                            <a href="{{ route('category.edit',$view_cat->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <a href="{{ route('category.show',$view_cat->id) }}" class="btn btn-sm btn-warning">View</a>
                                            <form action="{{ route('category.destroy',$view_cat->id) }}" method="POST">
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
