<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from template.hasthemes.com/jesco/jesco/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Sep 2021 07:18:43 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow" />
    <title>Shop Cube - Online Fashoin Shopping Bangladesh</title>
    <meta name="description" content="Shop Cube - Online Fashoin Shopping Bangladesh" />
    {{-- for sharer link image --}}
    @yield('og_image')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/logo/cube.png" type="image/png">


    <!-- vendor css (Icon Font) -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/bootstrap.bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/font.awesome.css" /> -->

    <!-- plugins css (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/venobox.css" /> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/5starrating.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/plugins/select2/css/select2.min.css">

    <!-- Main Style -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css" /> -->
    <style>
        #myList li{ display:none; }
        .same{ cursor:pointer; margin: 0 5px;}
        .more_less{ display: flex; justify-content: center; flex-direction: row; }
        .border_error{border:1px solid red !important;}
    </style>
</head>

<body>

    <!-- Top Bar -->

    <div class="header-to-bar"> HELLO EVERYONE! 25% Off All Products </div>

    <!-- Top Bar -->
    <!-- Header Area Start -->
    <header>
        <div class="header-main sticky-nav ">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-auto align-self-center">
                        <div class="header-logo" style="display: flex;">
                            <a href="{{ route('front_page') }}"><img src="{{ asset('frontend') }}/assets/images/logo/logo.png"  width="100px" style="margin-top: 5px;" alt="Site Logo" /></a>
                            <a href="{{ route('front_page') }}"><img src="{{ asset('frontend') }}/assets/images/logo/cube.png" width="75px" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <div class="col align-self-center d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ route('front_page') }}">Home</a></li>
                                <li class="dropdown position-static"><a href="#">Shop <i
                                            class="pe-7s-angle-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">

                                                <li class="title"><a href="#">Shop Page</a></li>
                                                <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">product Details Page</a></li>
                                                <li><a href="single-product.html">Product Single</a></li>
                                                <li><a href="single-product-variable.html">Product Variable</a></li>
                                            </ul>

                                            <ul class="d-block">
                                                <li class="title"><a href="#">Other Shop Pages</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                                <li><a href="my-account.html">Account Page</a></li>
                                                <li><a href="login.html">Login & Register Page</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Pages</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="faq.html">Faq Page</a></li>
                                                <li><a href="coming-soon.html">Coming Soon Page</a></li>

                                            </ul>
                                        </li>
                                        {{-- <li>

                                            <ul class="menu-banner w-100">
                                                <li>
                                                    <a class="p-0" href="shop-left-sidebar.html"><img
                                                            class="img-responsive w-100"
                                                            src="{{ asset('frontend') }}/assets/images/banner/7.jpg" alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="p-0" href="shop-left-sidebar.html"><img
                                                            class="img-responsive w-100"
                                                            src="{{ asset('frontend') }}/assets/images/banner/8.jpg" alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="p-0" href="shop-left-sidebar.html"><img
                                                            class="img-responsive w-100"
                                                            src="{{ asset('frontend') }}/assets/images/banner/9.jpg" alt=""></a>
                                                </li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                </li>
                                <li class="dropdown "><a href="#">Category <i class="pe-7s-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid.html">Category Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('http://localhost/phpmyadmin/db_structure.php?server=1&db=cube') }}">Database</a></li>
                                <li><a href="{{ url('http://127.0.0.1:8000/home/profile') }}">My Profile</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Action Start -->
                    <div class="col col-lg-auto align-self-center pl-0">
                        <div class="header-actions">
                            {{-- <a href="{{ route('login') }}" class="header-action-btn login-btn" >Sign In</a> --}}
                            @auth
                                <div class="main-menu">
                                    <ul>
                                        <li class="dropdown"><span style="color:#4c4c4c; font-weight:bold; cursor: pointer;">{{ Auth()->user()->name }}</span><i class="pe-7s-angle-down"></i>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('http://127.0.0.1:8000/home/profile') }}">My Profile</a></li>
                                                <li><a href="{{ url('/home') }}">Dashboard</a></li>
                                                <li>
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <a style="cursor: pointer" class="header-action-btn login-btn" data-bs-toggle="modal"
                                    data-bs-target="#loginActive">Sign In</a>
                            @endauth
                            <!-- Single Wedge Start -->
                            <a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#searchActive">
                                <i class="pe-7s-search"></i>
                            </a>
                            <!-- Single Wedge End -->
                            <!-- Single Wedge Start -->
                            {{-- <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                <i class="pe-7s-like"></i>
                            </a> --}}
                            <a href="#offcanvas-wishlist"
                                class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="pe-7s-like"></i>
                                <span class="header-action-num">{{ count_wishlist() }}</span>
                            </a>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart"
                                class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="pe-7s-shopbag"></i>
                                <span class="header-action-num">{{ count_allCart() }}</span>
                                <!-- <span class="cart-amount">???30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu"
                                class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="pe-7s-menu"></i>
                            </a>
                        </div>
                        <!-- Header Action End -->
                    </div>
                </div>
            </div>
    </header>
    <!-- Header Area End -->
    <div class="offcanvas-overlay"></div>

    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">??</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    @forelse ( all_wishlist() as $wishlist_products)
                        <li>
                            <a href="{{ route('single_product',App\Models\Product::find($wishlist_products->product_id)->slug) }}" class="image"><img src="{{ asset('uploads/product_pic') }}/{{App\Models\Product::find($wishlist_products->product_id)->image }}"
                                alt="Cart product Image"></a>
                            <div class="content">
                                <a href="{{ route('single_product',App\Models\Product::find($wishlist_products->product_id)->slug) }}" class="title">{{App\Models\Product::find($wishlist_products->product_id)->name }}</a>
                                <span class="quantity-price"><span class="amount">${{App\Models\Product::find($wishlist_products->product_id)->price }}</span></span>
                                <span>Available Stock: <b style="font-size: 20px; color: #ee3231;">{{ all_Carts_ProductInfo($wishlist_products->product_id)->quantity }}</b></span>
                                <a href="{{ route('wishlist_remove',$wishlist_products->id) }}" class="remove">??</a>
                            </div>
                        </li>
                    @empty
                        <div class="alert alert-danger text-center">
                            <span>No Wishlist to show</span>
                        </div>
                    @endforelse
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    @auth
                        <a href="{{ route('wishlist.index') }}" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                    @else
                        <div class="alert alert-danger text-center">
                            <span>You Are not Logged In!</span>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">??</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    @forelse (all_Carts() as $all_cart)
                        <li>
                            <a href="{{ route('single_product',$all_cart->relationToProduct->slug) }}" class="image"><img src="{{ asset('uploads/product_pic') }}/{{all_Carts_ProductInfo($all_cart->product_id)->image }}"
                                alt="Cart product Image"></a>
                            <div class="content">
                                <a href="{{ route('single_product',all_Carts_ProductInfo($all_cart->product_id)->slug) }}" class="title">{{all_Carts_ProductInfo($all_cart->product_id)->name }}</a>
                                <span class="quantity-price">{{ $all_cart->amount }} x <span class="amount">${{all_Carts_ProductInfo($all_cart->product_id)->price }}</span></span>
                                <span class="quantity-price">Sub Total <span class="amount">${{ $all_cart->amount * $all_cart->relationToProduct->price }}</span></span>
                                <span>Available Stock: <b style="font-size: 20px; color: #ee3231;">{{ all_Carts_ProductInfo($all_cart->product_id)->quantity }}</b></span>
                                <a href="{{ route('cartlist_remove',$all_cart->id) }}" class="remove">??</a>
                            </div>
                        </li>
                    @empty
                        <div class="alert alert-danger text-center">
                            <span>No Cartlist to show</span>
                        </div>
                    @endforelse
                </ul>
            </div>
            <div class="foot">
                <div class="buttons mt-30px">
                    @auth
                        <a href="{{ route('cartlist') }}" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    @else
                        <div class="alert alert-danger text-center">
                            <span>You Are not Logged In!</span>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>

        <div class="inner customScroll">

            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li class="title"><a href="#">Shop Page</a></li>
                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                    <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Product Single</a></li>
                                    <li><a href="single-product-variable.html">Product Variable</a></li>
                                    <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                    <li><a href="single-product-group.html">Product Group</a></li>
                                    <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-slider.html">Product Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                    </li>
                                    <li><a href="single-product-gallery-right.html">Product Gallery Right</a>
                                    </li>
                                    <li><a href="single-product-sticky-left.html">Product Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right.html">Product Sticky Right</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Other Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="compare.html">Compare Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="my-account.html">Account Page</a></li>
                                    <li><a href="login.html">Login & Register Page</a></li>
                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="faq.html">Faq Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid.html">Blog Grid Page</a></li>
                            <li><a href="blog-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                            <li><a href="blog-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Single Page</a></li>
                            <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar.html">Single Right Sidbar</a>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->

    @yield('content')

    <!-- Footer Area Start -->
    <div class="footer-area m-lrb-30px">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <div class="footer-logo">
                                    <a href="{{ route('front_page') }}"><img src="{{ asset('frontend') }}/assets/images/logo/logo.png"  width="100px" style="margin-top: 0px;" alt="Site Logo" /></a>
                                    <a href="{{ route('front_page') }}"><img src="{{ asset('frontend') }}/assets/images/logo/cube.png" width="75px" alt="Site Logo" /></a>
                                </div>
                                <p class="about-text">Lorem ipsum dolor sit amet consectet adipisicing elit, sed do
                                    eiusmod templ incididunt ut labore et dolore magnaol aliqua Ut enim ad minim.
                                </p>
                                <ul class="link-follow">
                                    <li>
                                        <a class="m-0" title="Twitter" href="https://twitter.com/sid16115906"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a title="Github" href="https://github.com/SiDDiK-906"><i class="fa fa-github" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Facebook" href="https://www.facebook.com/siddik.cse.diu/"><i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Instagram" href="https://www.instagram.com/siddik_sid_/"><i class="fa fa-instagram" aria-hidden="true"></i>
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-3 col-sm-6 col-lg-2 mb-md-30px mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Quick Links</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="#">Support
                                                </a></li>
                                            <li class="li"><a class="single-link" href="#">Helpline</a></li>
                                            <li class="li"><a class="single-link" href="#">Courses</a></li>
                                            <li class="li"><a class="single-link" href="about.html">About</a></li>
                                            <li class="li"><a class="single-link" href="#">Event</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-3 col-lg-2 col-sm-6 mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Other Page</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="about.html"> About </a>
                                            </li>
                                            <li class="li"><a class="single-link" href="blog-grid.html">Blog</a></li>
                                            <li class="li"><a class="single-link" href="#">Speakers</a></li>
                                            <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                            <li class="li"><a class="single-link" href="#">Tricket</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-3 col-lg-2 col-sm-6 mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Company</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="index.html">Jesco</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="contact.html">Contact us</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="login.html">Log in</a></li>
                                            <li class="li"><a class="single-link" href="#">Help</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-4 col-lg-3 col-sm-6">
                            <div class="single-wedge">

                                <h4 class="footer-herading">Store Information.</h4>
                                <div class="footer-links">
                                    <!-- News letter area -->
                                    <p class="address">2005 Your Address Goes Here. <br>
                                        896, Address 10010, HGJ</p>
                                    <p class="phone">Phone/Fax:<a href="tel:0123456789">0123456789</a></p>
                                    <p class="mail">Email:<a href="mailto:demo@example.com">demo@example.com</a></p>
                                    <img src="{{ asset('frontend') }}/assets/images/icons/payment.png" alt="" class="payment-img img-fulid">

                                    <!-- News letter area  End -->
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="copy-text"> ?? 2022 <strong>Jesco</strong> Made <i class="fa fa-heart"
                                    aria-hidden="true"></i> By <a class="company-name" href="https://github.com/SiDDiK-906">
                                    <strong> SiDDiK</strong></a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->

    <!-- Search Modal Start -->
    <div class="modal popup-search-style" id="searchActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Search Your Product</h2>
                        <form class="navbar-form position-relative" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search here...">
                            </div>
                            <button type="submit" class="submit-btn"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- Login Modal Start -->
    <div class="modal popup-login-style" id="loginActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="login-content">
                            <div class="api_login">
                                {{-- <div class="item" style="display: flex; justify-content: center;background: #3b5998; margin-bottom:10px; padding:16px; border-radius:5px;">
                                    <i class="fa fa-facebook" aria-hidden="true" style="color: white; margin-right:10px; font-size:20px;"></i>
                                    <a href="#" class="btn text-white">Sign in with Facebook</a>
                                </div> --}}
                                <div class="item" style="background:#DD5144;display: flex; justify-content: center; margin-bottom:10px; padding:16px; border-radius:5px;">
                                    <i class="fa fa-google" aria-hidden="true" style="color: white; margin-right:10px; font-size:20px;"></i>
                                    <a href="{{ route('google_redirect') }}" class="btn text-white">Sign in with Google</a>
                                </div>
                                {{-- <div class="item" style="background:#00acee;display: flex; justify-content: center; margin-bottom:15px; padding:16px; border-radius:5px;">
                                    <i class="fa fa-twitter" aria-hidden="true" style="color: white; margin-right:10px; font-size:20px;"></i>
                                    <a href="#" class="btn text-white">Sign in with Twitter</a>
                                </div> --}}
                                <div class="item" style="background:#3b5998;display: flex; justify-content: center; margin-bottom:10px; padding:16px; border-radius:5px;">
                                    <i class="fa fa-github" aria-hidden="true" style="color: white; margin-right:10px; font-size:20px;"></i>
                                    <a href="{{ route('github_redirect') }}" class="btn text-white">Sign in with Github</a>
                                </div>
                                {{-- <div class="item" style="background:#0e76a8; display: flex; justify-content: center; margin-bottom:15px; padding:16px; border-radius:5px;">
                                    <i class="fa fa-linkedin" aria-hidden="true" style="color: white; margin-right:10px; font-size:20px;"></i>
                                    <a href="#" class="btn text-white">Sign in with Linkedin</a>
                                </div> --}}
                            </div>
                            <p class="text-white text-center">------------ OR ------------</p>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <input style="margin-bottom:10px !important; " type="text" placeholder="Enter Email" name="email" value="admin@gmail.com">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                <input style="margin-bottom:10px !important; " type="password" placeholder="Password" name="password" value="admin@gmail.com">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                <div class="remember-forget-wrap" style="margin-bottom:10px !important; ">
                                    <div class="remember-wrap">
                                        <input type="checkbox">
                                        <p>Remember</p>
                                        <span class="checkmark"></span>
                                    </div>
                                    <div class="forget-wrap">
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit">Log in</button>
                                </div>
                                <div class="member-register" style="margin-top:20px !important; ">
                                    <p> Not a member? <a style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#registerActive"> Register now</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal End -->
    <!-- Register Modal Start -->
    <div class="modal popup-login-style" id="registerActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="login-content">
                            <h2>Sign Up</h2>
                            <h3>Sign Up for free</h3>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                    <input type="text" id="username"  placeholder="Enter Your Name" name="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <input type="text" id="phone"  placeholder="Enter Phone Number" name="phone">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <input type="email" id="emailaddress"  placeholder="Enter Email" name="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <input type="password" id="password" placeholder="Enter Password" name="password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <input type="password" id="confirm_password" placeholder="Enter Confirm Password" name="password_confirmation">
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="remember-forget-wrap" style="margin-top: 10px">
                                        <div class="remember-wrap">
                                            <input type="checkbox">
                                            <p>Remember</p>
                                            <span class="checkmark"></span>
                                        </div>
                                        <div class="forget-wrap">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <button type="submit">Sign Up</button>
                                    <div class="member-register">
                                        <p> Already have an account? <a style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#registerActive"> Sign In</a></p>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Modal End -->
    <!-- Modal -->
    {{-- Why this modal? --}}
    {{-- <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container zoom-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('frontend') }}/assets/images/product-image/zoom-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('frontend') }}/assets/images/product-image/zoom-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('frontend') }}/assets/images/product-image/zoom-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('frontend') }}/assets/images/product-image/zoom-image/4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container zoom-thumbs mt-3 mb-3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('frontend') }}/assets/images/product-image/small-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('frontend') }}/assets/images/product-image/small-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('frontend') }}/assets/images/product-image/small-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('frontend') }}/assets/images/product-image/small-image/4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2>Ardene Microfiber Tights</h2>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">$18.90</li>
                                    </ul>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">( 5 Customer Review
                                            )</a></span>
                                </div>
                                <p class="mt-30px mb-0">Lorem ipsum dolor sit amet, consect adipisicing elit, sed do
                                    eiusmod tempor incidi ut labore
                                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco
                                    laboris nisi
                                    ut aliquip ex ea commodo </p>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart" href="#"> Add To
                                            Cart</button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-compare">
                                        <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details-sku-info pro-details-same-style  d-flex">
                                    <span>SKU: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Ch-256xl</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Fashion.</a>
                                        </li>
                                        <li>
                                            <a href="#">eCommerce</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-social-info pro-details-same-style d-flex">
                                    <span>Share: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Modal end -->

    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->
    <script src="{{ asset('frontend') }}/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/jquery-ui.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/countdown.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/scrollup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/venobox.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/ajax-mail.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/vendor.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/plugins.min.js"></script>
    <script src="{{ asset('dashboard') }}/plugins/select2/js/select2.min.js"></script>

    <!-- Main Js -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
    <script>
        $(document).ready(function () {
            size_li = $("#myList li").size();
            x=3;
            $('#myList li:lt('+x+')').show();

            $('#loadMore').click(function () {
                x= (x+5 <= size_li) ? x+3 : size_li;
                $('#myList li:lt('+x+')').show();
            });

            $('#showLess').click(function () {
                x=(x-5<3) ? 3 : x-3;
                $('#myList li').not(':lt('+x+')').hide();
            });
        });
    </script>
    @yield('plus_minus_button')
    @yield('shipping_button')
    @yield('country_section')
</body>


<!-- Mirrored from template.hasthemes.com/jesco/jesco/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Sep 2021 07:19:21 GMT -->
</html>
