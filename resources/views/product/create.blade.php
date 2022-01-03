@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Product</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Product</li>
            <li class="breadcrumb-item active">Add Product</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info mb-1">Add Product</div>
                @if (session('success'))
                    <div class="alert alert-success">
                        <span>{{ session('success') }}</span>
                    </div>
                @endif
                <div class="card-body pt-1">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="category_id">Category of Product</label>
                            <select name="category_id" class="form-control">
                                <option value="">-Select One-</option>
                                @foreach ($category_data as $category)
                                    <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="image">Product Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Product Name">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="price">Product Price</label>
                            <input class="form-control" type="text" name="price" placeholder="Product Price">
                        </div>
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="quantity">Product Quantity</label>
                            <input class="form-control" type="number" name="quantity" placeholder="Ex: 00">
                        </div>
                        @error('quantity')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="description">Product Description</label>
                            <textarea class="form-control" name="description" placeholder="Product Description"></textarea>
                        </div>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="L_description">Product Long Description</label>
                            <textarea class="form-control" name="L_description" placeholder="Product Long Description"></textarea>
                        </div>
                        @error('L_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="code">Product Code</label>
                            <input class="form-control" type="text" name="code" placeholder="Product Code">
                        </div>
                        @error('code')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="image">Choose product Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="product_thumbnails">Choose product Thumbnails</label>
                            <input type="file" name="product_thumbnails[]" class="form-control" multiple>
                        </div>
                        @error('product_thumbnails')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <button class="btn btn-primary mt-2">Add New product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
