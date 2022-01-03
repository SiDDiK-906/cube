@extends('layouts.app_frontend')
@section('og_image')
{{-- for sharer link image --}}
<meta property="og:image" content="{{ asset('uploads/product_pic') }}/{{ $single_products->image }}">
@endsection
@section('content')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Products</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- Product Details Area Start -->
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            @foreach (App\Models\Product_thumbnail::where('product_id',$single_products->id)->get() as $product_thumbnail)
                                <div class="swiper-slide zoom-image-hover">
                                    <img class="img-responsive m-auto" src="{{ asset('uploads/product_thumbnail_pic') }}/{{ $product_thumbnail->product_thumbnails }}"
                                    alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-container zoom-thumbs mt-3 mb-3">
                        <div class="swiper-wrapper">
                            @foreach (App\Models\Product_thumbnail::where('product_id',$single_products->id)->get() as $product_thumbnail)
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="{{ asset('uploads/product_thumbnail_pic') }}/{{ $product_thumbnail->product_thumbnails }}"
                                        alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content">
                        <h2>{{ $single_products->name }}</h2>
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut">${{ $single_products->price }}</li>
                            </ul>
                        </div>
                        <div class="pro-details-rating-wrap" style="margin-bottom: 20px">
                            <div class="my_rating">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star"
                                            @if (howManyReview($single_products->id) == 0)
                                                style="width:0%"
                                            @else
                                                style="width:{{ averateRating($single_products->id) }}%"
                                            @endif>
                                        </span>
                                    </span>
                                </span>
                            </div>
                            <span class="read-review">
                                ( {{ howManyReview($single_products->id) }} Customer
                                @if (howManyReview($single_products->id) > 1)
                                    Reviews )
                                @else
                                    Review )
                                @endif
                            </span>
                        </div>
                        <b>Available Stock: <span style="font-size: 20px; color: #ee3231;">{{ $single_products->quantity }}</span></b>
                        @if (session('stock_out'))
                            <div class="alert alert-danger">
                                {{ session('stock_out') }}
                            </div>
                        @endif
                        <p class="mt-30px mb-0">{{ $single_products->description }}</p>
                        <form action="{{ route('addTocart',$single_products->id) }}" method="POST">
                            @csrf
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                </div>
                                <div class="pro-details-cart">
                                    @if ($single_products->quantity < 1)
                                        <button style="cursor: pointer" class="add-cart" disabled="disabled">Stock Out</button>
                                    @else
                                        <button class="add-cart" type="submit"> Add To Cart</button>
                                    @endif
                                </div>
                        </form>
                                @auth
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        @if ($wishlist_status)
                                            <a href="{{ route('wishlist_remove',$wishlist_id) }}" style="cursor: pointer"><i class="fa fa-heart text-danger"></i></a>
                                        @else
                                            <a href="{{ route('wishlist',$single_products->id) }}" style="cursor: pointer"><i class="fa fa-heart-o"></i></a>
                                        @endif
                                    </div>
                                @else
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#loginActive"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                @endauth
                                <div class="pro-details-compare-wishlist pro-details-compare">
                                    <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                                </div>
                            </div>
                        <div class="pro-details-sku-info pro-details-same-style  d-flex">
                            <span>SKU: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">{{ $single_products->code }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex">
                            <span>Categories:</span>
                            <ul class="d-flex">
                                <li>
                                    <a href="{{ route('category_detail',$single_products->category_id) }}">{{ $single_products->relationtocategory->cat_name }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-social-info pro-details-same-style d-flex">
                            <span>Share: </span>
                            <ul class="d-flex">
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/sharer.php?u={{ url()->full() }}"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://twitter.com/share?url={{ url()->full() }}&text=Simple Share Buttons&hashtags=simplesharebuttons"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://plus.google.com/share?url={{ url()->full() }}"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.youtube.com/sharer.php?u={{ url()->full() }}"><i class="fa fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/sharer.php?u={{ url()->full() }}"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- product details description area start -->
    <div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav">
                    <a data-bs-toggle="tab" href="#des-details2">Information</a>
                    <a class="active" data-bs-toggle="tab" href="#des-details1">Description</a>
                    <a data-bs-toggle="tab" href="#des-details3">Reviews ({{ howManyReview($single_products->id) }})</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details2" class="tab-pane">
                        <div class="product-anotherinfo-wrapper text-start">
                            <ul>
                                <li><span>Weight</span> 400 g</li>
                                <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                                <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                            </ul>
                        </div>
                    </div>
                    <div id="des-details1" class="tab-pane active">
                        <div class="product-description-wrapper">
                            <p>{{ $single_products->L_description }}</p>
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="review-wrapper">
                                    @foreach ($rating_infos as $rating_info)
                                        <div class="single-review">
                                            <div class="review-img">
                                                <img width="100px" src="{{ asset('uploads/profile_pic') }}/{{ $rating_info->relationtoUser->profile_photo }}" alt="" />
                                            </div>
                                            <div class="review-content">
                                                <div class="review-top-wrap">
                                                    <div class="review-left">
                                                        <div class="review-name">
                                                            <h4>{{ $rating_info->relationtoUser->name }}</h4>
                                                        </div>
                                                        <div class="rating-product">
                                                            @for ($i = 0; $i < $rating_info->rating; $i++)
                                                                <i class="fa fa-star"></i>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                    <div class="review-left" style="margin-left: 65px !important;">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="review-bottom">
                                                    <p>{{ $rating_info->review }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="ratting-form-wrapper pl-50">
                                    <h3>Add a Review</h3>
                                    <div class="ratting-form">
                                        <form action="{{ route('front_rating',$single_products->id) }}" method="POST">
                                            @csrf
                                            <div class="hello mt-3" style="display: flex">
                                                <div for="hello" class="mt-2 mr-2">Your Rating: </div>
                                                <div class="rate">
                                                    <input type="radio" id="star5_{{ $single_products->id }}" name="rate" value="5" />
                                                    <label for="star5_{{ $single_products->id }}" title="text">5 stars</label>
                                                    <input type="radio" id="star4_{{ $single_products->id }}" name="rate" value="4" />
                                                    <label for="star4_{{ $single_products->id }}" title="text">4 stars</label>
                                                    <input type="radio" id="star3_{{ $single_products->id }}" name="rate" value="3" />
                                                    <label for="star3_{{ $single_products->id }}" title="text">3 stars</label>
                                                    <input type="radio" id="star2_{{ $single_products->id }}" name="rate" value="2" />
                                                    <label for="star2_{{ $single_products->id }}" title="text">2 stars</label>
                                                    <input type="radio" id="star1_{{ $single_products->id }}" name="rate" value="1" />
                                                    <label for="star1_{{ $single_products->id }}" title="text">1 star</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="rating-form-style form-submit">
                                                        <textarea name="review" placeholder="Message"></textarea>
                                                        <button class="btn btn-primary btn-hover-color-primary "
                                                            type="submit" value="Submit">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details description area end -->

    <!-- Related product Area Start -->
    <div class="related-product-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-30px0px line-height-1">
                        <h2 class="title m-0">Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
                <div class="new-product-wrapper swiper-wrapper">
                    @forelse ($related_products as $product)
                        <div class="new-product-item swiper-slide">
                            <!-- Single Prodect -->
                            <div class="product">
                                <div class="thumb">
                                    <a href="{{ route('single_product',$product->slug) }}" class="image">
                                        <img src="{{ asset('uploads/product_pic') }}/{{ $product->image }}" alt="Product" />
                                        {{-- <img class="hover-image" src="{{ asset('frontend') }}/assets/images/product-image/11.jpg"
                                            alt="Product" /> --}}
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
                                        @if ($product->quantity < 1)
                                            <a title="Add To Cart" class=" add-to-cart" style="line-height: 50px; cursor: pointer;">Stock Out</a>
                                        @else
                                            <a title="Add To Cart" class=" add-to-cart" style="line-height: 50px; cursor: pointer" data-bs-toggle="modal" data-bs-target="#loginActive">Add To Cart</a>
                                        @endif
                                    @endauth
                                </div>
                                <div class="content">
                                    <span class="ratings">
                                        <span class="rating-wrap">
                                            <span class="star" style="width: 100%"></span>
                                        </span>
                                        <span class="rating-num">( 5 Review )</span>
                                    </span>
                                    <h5 class="title">
                                        <a href="{{ route('single_product',$product->slug) }}">{{ $product->name }}</a>
                                    </h5>
                                    <span class="price">
                                        <span class="new">${{ $product->price }}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-danger text-center mb-5 container-fluid">
                            <span>No Related Product to show</span>
                        </div>
                    @endforelse
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related product Area End -->

@endsection
@section('footer_scripts')
<script>
    $('input:radio').change(
    function(){
        var userRating = this.value;
        console.log(userRating)
    });
</script>
@endsection
