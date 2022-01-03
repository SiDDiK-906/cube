@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">product</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">product</li>
            <li class="breadcrumb-item active">View product</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-center">
                        <h5>All product</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>product name</th>
                                <th>product price</th>
                                <th>product quantity</th>
                                <th>product barcode</th>
                                <th>product image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($products as $product)
                                <tr >
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    {{-- <td>{{ url('/product/single').'/'.$product->slug }}</td> --}}
                                    <td>{!! DNS2D::getBarcodeHTML(url('/product/single').'/'.$product->slug, 'QRCODE',3,3) !!}</td>
                                    <td>
                                        <img width="100px" src="{{ asset('uploads/product_pic/').'/'.$product->image }}" alt="not found">
                                    </td>
                                    <td>
                                        <div style="display: flex; justify-content:space-around">
                                            <a href="{{ route('product.edit',$product->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <a href="{{ route('product.show',$product->id) }}" class="btn btn-sm btn-warning">View</a>
                                            <form action="{{ route('product.destroy',$product->id) }}" method="POST">
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
