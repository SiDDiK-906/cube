<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
    <!-- Single Prodect -->
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
