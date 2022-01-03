@extends('layouts.app_frontend')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Product</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Wishlist</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->


    <!-- Wishlist Area Start -->
    <div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Your Wishlist items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Until Price</th>
                                        <th>Product Quantity</th>
                                        <th>Add To Cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse (all_wishlist() as $all_wishlist)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img class="img-responsive ml-15px" src="{{ asset('uploads/product_pic') }}/{{$all_wishlist->relationToProduct->image }}" alt="not found" /></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{ $all_wishlist->relationToProduct->name }}</a></td>
                                            <td class="product-price-cart"><span class="amount">${{ $all_wishlist->relationToProduct->price }}</span></td>
                                            <td>
                                                @if ($all_wishlist->relationToProduct->quantity < 1)
                                                    <div class="alert alert-danger text-center" style="width: 100%; margin-bottom:0px !important">
                                                        This Product has stocked out
                                                    </div>
                                                @else
                                                    <b style="font-size: 20px; color: #ee3231;">{{ $all_wishlist->relationToProduct->quantity }}</b>
                                                @endif
                                            </td>
                                            <td class="product-wishlist-cart" style="position: relative">
                                                    @if ($all_wishlist->relationToProduct->quantity < 1)
                                                        <a style="cursor: pointer">stock out</a>
                                                    @else
                                                        <a href="{{ route('addCartFromWishlist',$all_wishlist->id) }}">add to cart</a>
                                                    @endif
                                                <div style="position: absolute; top:10px; right:10px;">
                                                    <a href="{{ route('wishlist_remove',$all_wishlist->id) }}"><i class="fa fa-times" style="color: black"></i></a>
                                                </div>
                                                <br>
                                                @if (session('no_product'))
                                                    <div class="alert alert-danger text-center" style="width: 100%; margin-top:10px;">
                                                        {{ session('no_product') }}
                                                    </div>
                                                @endif
                                                @if (session('wishlist_id') == $all_wishlist->id)
                                                    @if (session('stock_out'))
                                                        <div class="alert alert-danger text-center" style="width: 100%; margin-top:10px;">
                                                            {{ session('stock_out') }}
                                                        </div>
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger text-center">
                                            <span>No Wishlist to show</span>
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Wishlist Area End -->

@endsection
