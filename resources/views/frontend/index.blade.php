@extends('layouts.app_frontend')
@section('content')
    <!-- Hero/Intro Slider Start -->
    {{-- <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item -->
                @forelse ($banner_datas as $banner_data)
                    <div class="hero-slide-item-2 slider-height swiper-slide d-flex bg-color1">
                        <div class="container align-self-center">
                            <div class="row">
                                <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                                    <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                        <span class="category">Sale {{ $banner_data->discount }}% Off</span>
                                        <h2 class="title-1">{{ $banner_data->title }}</h2>
                                        <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark"> Shop
                                            Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                                    <div class="show-case">
                                        <div class="hero-slide-image">
                                            <img src="{{ asset('uploads/banner_pic') }}/{{ $banner_data->image }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                <div class="alert alert-danger">
                    <span>No banner to show</span>
                </div>
                @endforelse
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div> --}}
{{-- old banner --}}
<div class="section ">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper">
            <!-- Single slider item -->
            <div class="hero-slide-item-2 slider-height swiper-slide d-flex bg-color1">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                            <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                <span class="category">Sale 45% Off</span>
                                <h2 class="title-1">Exclusive New<br> Offer 2022</h2>
                                <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark"> Shop
                                    Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div
                            class="col-xl-6 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <img src="{{ asset('frontend') }}/assets/images/slider-image/s1.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single slider item -->
            <div class="hero-slide-item-2 slider-height swiper-slide d-flex bg-color2">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                            <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                <span class="category">Sale 45% Off</span>
                                <h2 class="title-1">Exclusive New<br> Offer 2022</h2>
                                <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark"> Shop
                                    Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div
                            class="col-xl-6 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <img src="{{ asset('frontend') }}/assets/images/slider-image/s2.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
    <!-- Hero/Intro Slider End -->

    <!-- Feature Area Srart -->
    <div class="feature-area  mt-n-65px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- single item -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend') }}/assets/images/icons/1.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Free Shipping</h4>
                            <span class="sub-title">Capped at $39 per order</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px mt-lm-30px">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend') }}/assets/images/icons/2.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Card Payments</h4>
                            <span class="sub-title">12 Months Installments</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend') }}/assets/images/icons/3.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Easy Returns</h4>
                            <span class="sub-title">Shop With Confidence</span>
                        </div>
                    </div>
                    <!-- single item -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area End -->

    <!-- Product Area Start -->
    <div class="product-area pt-100px pb-100px">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12">
                    <div class="section-title text-center mb-0">
                        <h2 class="title">#products</h2>
                        <!-- Tab Start -->
                        <div class="nav-center">
                            <ul class="product-tab-nav nav align-items-center justify-content-center">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                        href="#tab-product--all">All</a></li>
                                {{-- <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                        href="#tab-product--new">New</a>
                                </li> --}}
                                @foreach ($categories as $categorie)
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                        href="#tab-product-{{ $categorie->cat_name }}">{{ $categorie->cat_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Tab End -->
                    </div>
                </div>
                <!-- Section Title End -->
            </div>
            <!-- Section Title & Tab End -->

            <div class="row">
                <div class="col">
                    <div class="tab-content mb-30px0px">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="tab-product--all">
                            <div class="row">
                                @forelse ($all_product_data as $product)
                                    @include('parts.product_thumb')
                                @empty
                                    <div class="alert alert-danger text-center mt-1 mb-5">
                                        <span>No Product to show</span>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        <!-- 1st tab end -->
                        <!-- 5th tab start -->
                        @forelse ($categories as $categorie)
                            <div class="tab-pane fade" id="tab-product-{{ $categorie->cat_name }}">
                                <div class="row">
                                    @forelse (App\Models\Product::where('category_id',$categorie->id)->get() as $product)
                                        @include('parts.product_thumb')
                                    @empty
                                        <div class="alert alert-danger text-center">
                                            <span>No {{ $categorie->cat_name }} Product to show</span>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        @empty
                        <div class="alert alert-danger text-center mt-5 mb-5">
                            <span>No Category to show</span>
                        </div>
                        @endforelse
                        <!-- 5th tab end -->
                    </div>
                    <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark m-auto"> Load More <i
                            class="fa fa-arrow-right ml-15px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->

    <!-- Banner Area Start -->
    <div class="banner-area pt-100px pb-100px plr-15px">
        <ul class="row m-0" id="myList">
            @forelse ($categories as $category)
                <li class="col-12 col-lg-4 mb-md-30px mb-lm-30px mb-30px">
                    <div class="single-banner-2">
                        <img src="{{ asset('uploads/category_pic').'/'.$category->cat_image }}" alt="not found">
                        <div class="item-disc">
                            <h4 class="title">Best Collection <br>
                                {{ $category->cat_name }}</h4>
                            <a href="{{ route('category_detail',$category->id) }}" class="shop-link btn btn-primary ">Shop Now <i
                                    class="fa fa-shopping-basket ml-5px" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>
            @empty
                <div class="alert alert-danger text-center mt-5 mb-5">
                    <span>No Category to show</span>
                </div>
            @endforelse
        </ul>
        <div class="more_less">
            <div id="loadMore"  class="btn btn-lg btn-primary btn-hover-dark same">Load more</div>
            <div id="showLess"  class="btn btn-lg btn-primary btn-hover-dark same">Show less</div>
        </div>
    </div>

    <!-- Banner Area End -->

    <!-- Product Area Start -->
    <div class="product-area pt-100px pb-100px">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg col-md col-12">
                    <div class="section-title mb-0">
                        <h2 class="title">#newarrivals</h2>
                    </div>
                </div>
                <!-- Section Title End -->

                <!-- Tab Start -->
                {{-- <div class="col-lg-auto col-md-auto col-12">
                    <ul class="product-tab-nav nav">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                href="#tab-product-all">All</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-new">New</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                href="#tab-product-bestsellers">Bestsellers</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                href="#tab-product-itemssale">Items
                                Sale</a></li>
                    </ul>
                </div> --}}
                <!-- Tab End -->
            </div>
            <!-- Section Title & Tab End -->

            <div class="row">
                <div class="col">
                    <div class="tab-content top-borber">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="tab-product-all">
                            <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
                                <div class="new-product-wrapper swiper-wrapper">
                                    @forelse ($new_arrivals as $product)
                                        <div class="new-product-item swiper-slide">
                                                <!-- Single Prodect -->
                                                {{-- <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{ asset('frontend') }}/assets/images/product-image/1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                                    class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Women's Elizabeth
                                                                Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                </div> --}}
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="{{ route('single_product',$product->slug) }}" class="image">
                                                            <img src="{{ asset('uploads/product_pic') }}/{{ $product->image }}" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="actions">
                                                            @auth
                                                                @if (wishlist_exist($product->id)->exists())
                                                                    <a href="{{ route('wishlist_remove',wishlist_id($product->id)) }}" class="action wishlist" title="Wishlist" ><i class="fa fa-heart text-danger"></i></a>
                                                                @else
                                                                    <a href="{{ route('wishlist',$product->id) }}" class="action wishlist" title="Wishlist" ><i class="fa fa-heart-o"></i></a>
                                                                @endif
                                                            @else
                                                                <a style="cursor: pointer" class="action wishlist" title="Wishlist"  data-bs-toggle="modal" data-bs-target="#loginActive"><i class="fa fa-heart-o"></i></a>
                                                            @endauth
                                                            <a href="#" class="action quickview" data-link-action="quickview"
                                                                title="Quick view" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                                    class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                        @auth
                                                            @if ($product->quantity < 1)
                                                                <a title="Add To Cart" class=" add-to-cart" style="line-height: 50px; cursor: pointer;">Stock Out</a>
                                                            @else
                                                                <a href="{{ route('product_addCart',$product->id) }}" title="Add To Cart" class=" add-to-cart" style="line-height: 50px;">Add To Cart</a>
                                                            @endif
                                                        @else
                                                            <a title="Add To Cart" class=" add-to-cart" style="line-height: 50px; cursor: pointer" data-bs-toggle="modal" data-bs-target="#loginActive">Add To Cart</a>
                                                        @endauth
                                                    </div>
                                                    <div class="content">
                                                        @if (session('product_id') == $product->id)
                                                            @if (session('stock_out'))
                                                                <div class="alert alert-danger text-center" style="width: 100%">
                                                                    {{ session('stock_out') }}
                                                                </div>
                                                                <script>
                                                                    alert('{{ session('stock_out') }}');
                                                                </script>
                                                            @endif
                                                        @endif
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                {{-- @php
                                                                    $avg_rating = 0;
                                                                    foreach (averateRating($product->id) as $averateRating) {
                                                                        $avg_rating += $averateRating->rating;
                                                                    }
                                                                @endphp --}}
                                                                <span class="star"
                                                                    @if (howManyReview($product->id) == 0)
                                                                        style="width:0%"
                                                                    @else
                                                                    {{-- sorasori sum + avg value paite pari from helper function --}}
                                                                        style="width:{{ averateRating($product->id) }}%"
                                                                        {{-- style="width:{{ (($avg_rating) / (howManyReview($product->id)))*20 }}%" --}}
                                                                    @endif>
                                                                </span>
                                                            </span>
                                                            <span class="rating-num">(
                                                                {{ howManyReview($product->id) }}
                                                                @if (howManyReview($product->id) > 1)
                                                                    Reviews
                                                                @else
                                                                    Review
                                                                @endif
                                                            )</span>
                                                        </span>
                                                        <h5 class="title"><a href="{{ route('single_product',$product->slug) }}">{{ $product->name }}
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">${{ $product->price }}</span>
                                                        </span>
                                                        <span>Available Stock: <b style="font-size: 20px; color: #ee3231;">{{ $product->quantity }}</b></span>
                                                        <span class="price">
                                                            <span class="new">Vendor:{{ App\Models\User::find($product->user_id)->name }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                        </div>
                                    @empty
                                        <div class="alert alert-danger text-center mt-1 mb-5">
                                            <span>No Product to show</span>
                                        </div>
                                    @endforelse
                                    {{-- <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/2.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-10%</span>
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 80%"></span>
                                                    </span>
                                                    <span class="rating-num">( 4 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Ardene Microfiber
                                                        Tights</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$48.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/3.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-7%</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 90%"></span>
                                                    </span>
                                                    <span class="rating-num">( 4.5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Women's Long
                                                        Sleeve
                                                        Shirts</a></h5>
                                                <span class="price">
                                                    <span class="new">$30.50</span>
                                                    <span class="old">$38.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/11.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">Sale</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 70%"></span>
                                                    </span>
                                                    <span class="rating-num">( 3.5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Parrera
                                                        Sunglasses -
                                                        Lomashop</a></h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/7.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-10%</span>
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 80%"></span>
                                                    </span>
                                                    <span class="rating-num">( 4 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Ardene Microfiber
                                                        Tights</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$48.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/4.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Women's Elizabeth
                                                        Coat
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div> --}}
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <!-- 1st tab end -->
                        <!-- 2nd tab start -->
                        <div class="tab-pane fade" id="tab-product-new">
                            <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
                                <div class="new-product-wrapper swiper-wrapper">
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/8.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Women's Elizabeth
                                                        Coat
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/9.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-10%</span>
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 80%"></span>
                                                    </span>
                                                    <span class="rating-num">( 4 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Ardene Microfiber
                                                        Tights</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$48.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/10.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-7%</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 90%"></span>
                                                    </span>
                                                    <span class="rating-num">( 4.5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Women's Long
                                                        Sleeve
                                                        Shirts</a></h5>
                                                <span class="price">
                                                    <span class="new">$30.50</span>
                                                    <span class="old">$38.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/11.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">Sale</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 70%"></span>
                                                    </span>
                                                    <span class="rating-num">( 3.5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Parrera
                                                        Sunglasses -
                                                        Lomashop</a></h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/3.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-10%</span>
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 80%"></span>
                                                    </span>
                                                    <span class="rating-num">( 4 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Ardene Microfiber
                                                        Tights</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$48.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/1.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Women's Elizabeth
                                                        Coat
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd tab end -->
                        <!-- 3rd tab start -->
                        <div class="tab-pane fade" id="tab-product-bestsellers">
                            <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
                                <div class="new-product-wrapper swiper-wrapper">
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/8.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Women's Elizabeth
                                                        Coat
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/9.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-10%</span>
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 80%"></span>
                                                    </span>
                                                    <span class="rating-num">( 4 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Ardene Microfiber
                                                        Tights</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$48.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/10.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-7%</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 90%"></span>
                                                    </span>
                                                    <span class="rating-num">( 4.5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Women's Long
                                                        Sleeve
                                                        Shirts</a></h5>
                                                <span class="price">
                                                    <span class="new">$30.50</span>
                                                    <span class="old">$38.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/11.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">Sale</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 70%"></span>
                                                    </span>
                                                    <span class="rating-num">( 3.5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Parrera
                                                        Sunglasses -
                                                        Lomashop</a></h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/3.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-10%</span>
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 80%"></span>
                                                    </span>
                                                    <span class="rating-num">( 4 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Ardene Microfiber
                                                        Tights</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$48.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/1.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Women's Elizabeth
                                                        Coat
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <!-- 3rd tab end -->
                        <!-- 4th tab start -->
                        <div class="tab-pane fade" id="tab-product-itemssale">
                            <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
                                <div class="new-product-wrapper swiper-wrapper">
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/8.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Women's Elizabeth
                                                        Coat
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/9.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-10%</span>
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 80%"></span>
                                                    </span>
                                                    <span class="rating-num">( 4 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Ardene Microfiber
                                                        Tights</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$48.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/10.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-7%</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 90%"></span>
                                                    </span>
                                                    <span class="rating-num">( 4.5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Women's Long
                                                        Sleeve
                                                        Shirts</a></h5>
                                                <span class="price">
                                                    <span class="new">$30.50</span>
                                                    <span class="old">$38.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/11.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">Sale</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 70%"></span>
                                                    </span>
                                                    <span class="rating-num">( 3.5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Parrera
                                                        Sunglasses -
                                                        Lomashop</a></h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/3.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-10%</span>
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 80%"></span>
                                                    </span>
                                                    <span class="rating-num">( 4 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Ardene Microfiber
                                                        Tights</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$48.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-image/1.jpg" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="pe-7s-refresh-2"></i></a>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="single-product.html">Women's Elizabeth
                                                        Coat
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <!-- 4th tab end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->

    <!-- Deal Area Start -->
    <div class="deal-area deal-bg deal-bg-2" data-bg-image="assets/images/deal-img/deal-bg-2.jpg">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="deal-inner position-relative pt-100px" style="padding-bottom: 100px;margin-bottom: 50px;" >
                        <div class="deal-wrapper">
                            <span class="category">#FASHION SHOP</span>
                            <h3 class="title">Deal Of The Day</h3>
                            <div class="deal-timing">
                                <div data-countdown="2022/05/15"></div>
                            </div>
                            <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark m-auto"> Shop
                                Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                        </div>
                        <div class="deal-image">
                            <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/deal-img/woman.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Area End -->
    <!--  Blog area Start -->
    <div class="main-blog-area pb-100px pt-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-30px0px">
                        <h2 class="title">#blog</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing eiusmod.
                        </p>
                    </div>
                </div>
            </div>
            <!-- section title start -->

            <div class="row">
                <div class="col-lg-4 mb-md-30px mb-lm-30px">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="{{ asset('frontend') }}/assets/images/blog-image/1.jpg"
                                    class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date height-shape" href="#"><i class="fa fa-calendar"
                                        aria-hidden="true"></i> 24 Aug, 2021</a>
                                <a class="blog-mosion" href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 1.5
                                    K</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link"
                                    href="blog-single-left-sidebar.html">There are many variations of
                                    passages of Lorem</a></h5>

                            <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More<i
                                    class="fa fa-arrow-right ml-5px" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-lg-4 mb-md-30px mb-lm-30px">
                    <div class="single-blog ">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="{{ asset('frontend') }}/assets/images/blog-image/2.jpg"
                                    class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date height-shape" href="#"><i class="fa fa-calendar"
                                        aria-hidden="true"></i> 24 Aug, 2021</a>
                                <a class="blog-mosion" href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 1.5
                                    K</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link"
                                    href="blog-single-left-sidebar.html">It is a long established factoi
                                    ader will be distracted</a></h5>

                            <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More<i
                                    class="fa fa-arrow-right ml-5px" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="{{ asset('frontend') }}/assets/images/blog-image/3.jpg"
                                    class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date height-shape" href="#"><i class="fa fa-calendar"
                                        aria-hidden="true"></i> 24 Aug, 2021</a>
                                <a class="blog-mosion" href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 1.5
                                    K</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link"
                                    href="blog-single-left-sidebar.html">Contrary to popular belieflo
                                    lorem Ipsum is not</a></h5>


                            <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More<i
                                    class="fa fa-arrow-right ml-5px" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
            </div>
        </div>
    </div>
    <!--  Blog area End -->

@endsection
