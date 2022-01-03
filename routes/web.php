<?php

use Illuminate\Support\Facades\Route;
// alternate way of using controllers together
use App\Http\Controllers\{SocialiteController,SslCommerzPaymentController,CheckoutController,CouponController,CartController,WishlistController,BannerController,ProductController,HomeController,ProfileController,DashboardController,CategoryController,FrontendController,VendorController};
use Illuminate\Support\Facades\Auth;

Auth::routes();
// HomeController
Route::get('/home', [HomeController::class, 'index_home'])->name('home');
Route::get('/home/email/offer', [HomeController::class, 'email_offer_method'])->name('email_offer');
Route::get('/home/email/offer/send/{id}', [HomeController::class, 'send_email_offer_method'])->name('send_email_offer');
Route::post('/home/email/offer/checkbox', [HomeController::class, 'check_box_method'])->name('check_box');
Route::get('/home/location', [HomeController::class, 'location_method'])->name('location');
Route::post('/home/update/location', [HomeController::class, 'location_update_method'])->name('location_update');
Route::get('/home/location/view', [HomeController::class, 'location_view_method'])->name('location_view');
Route::post('/home/location/active', [HomeController::class, 'active_location_method'])->name('active_location');
Route::post('/home/location/deactive', [HomeController::class, 'deactive_location_method'])->name('deactive_location');
Route::get('/home/myorders', [HomeController::class, 'myorders_method'])->name('myorders');
Route::get('/home/all/orders', [HomeController::class, 'allOrders_method'])->name('allOrders');
Route::get('/home/all/orders/delivary/status/{id}', [HomeController::class, 'delivarystatus_method'])->name('delivarystatus');
Route::get('/home/order/details/{id}', [HomeController::class, 'order_details_method'])->name('order_details');
Route::get('/home/pdf/invoice', [HomeController::class, 'pdf_invoice_method'])->name('pdf_invoice');
Route::get('/home/excel/invoice', [HomeController::class, 'excel_invoice_method'])->name('excel_invoice');
Route::post('/home/product/rating/{id}', [HomeController::class, 'rating_method'])->name('rating');
Route::post('/home/product/front/rating/{id}', [HomeController::class, 'front_rating_method'])->name('front_rating');
// ProfileController
Route::get('/home/profile', [ProfileController::class, 'profile_method'])->name('profile');
Route::post('/home/profile/change/name', [ProfileController::class, 'change_name_method'])->name('change_name');
Route::post('/home/profile/change/password', [ProfileController::class, 'change_password_method'])->name('change_password');
Route::post('/home/profile/change/photo', [ProfileController::class, 'change_profile_pic_method'])->name('change_profile_pic');
// DashboardController
Route::get('/home/dashboard', [DashboardController::class, 'dashboard_method'])->name('dashboard');
// CategoryController
Route::resource('category', CategoryController::class);
Route::get('/home/category/edit/{id}', [CategoryController::class, 'show_hide_edit_method'])->name('show_hide_edit');
Route::get('/home/category/trash', [CategoryController::class, 'trash_method'])->name('trash');
Route::get('/home/category/force_delete/{id}', [CategoryController::class, 'force_delete_method'])->name('force_delete');
Route::get('/home/category/restore/{id}', [CategoryController::class, 'restore_method'])->name('restore');
// FrontendController
Route::get('/', [FrontendController::class, 'front_page_method'])->name('front_page');
Route::get('/product/single/{slug}', [FrontendController::class, 'single_product_method'])->name('single_product');
Route::get('/home/category/detail/{cat_id}', [FrontendController::class, 'category_detail_method'])->name('category_detail');
// VendorController
Route::resource('vendor', VendorController::class);
// ProductController
Route::resource('product', ProductController::class);
// ProductController
Route::resource('banner', BannerController::class);
// WishlistController
Route::resource('wishlist', WishlistController::class);
Route::get('/home/product/add/wishlist/{id}', [WishlistController::class, 'wishlist_method'])->name('wishlist');
Route::get('/home/product/remove/wishlist/{wishlist_id}', [WishlistController::class, 'wishlist_remove_method'])->name('wishlist_remove');
// CartController
Route::get('/cartlist', [CartController::class, 'cartlist_method'])->name('cartlist');
Route::get('/wishlist/cart/add/{wishlist_id}', [CartController::class, 'addCartFromWishlist_method'])->name('addCartFromWishlist');
Route::get('/cartlist/remove/{cartlist_id}', [CartController::class, 'cartlist_remove_method'])->name('cartlist_remove');
Route::post('/cartlist/add/cart/{product_id}', [CartController::class, 'addTocart_method'])->name('addTocart');
Route::get('/cartlist/remove/all/cart/{user_id}', [CartController::class, 'clear_cart_method'])->name('clear_cart');
Route::get('/product/add/cart/{product_id}', [CartController::class, 'product_addCart_method'])->name('product_addCart');
Route::post('/product/update/cart', [CartController::class, 'update_cart_method'])->name('update_cart');
// CouponController
Route::resource('coupon', CouponController::class);
// CheckoutController
Route::get('checkout', [CheckoutController::class, 'checkout_method'])->name('checkout');
Route::post('checkout/form/submit', [CheckoutController::class, 'checkout_form_method'])->name('checkout_form');
Route::post('checkout/country/city/link', [CheckoutController::class, 'country_city_method'])->name('country_city');
// SocialiteController
    // For Github Login
Route::get('/github/redirect', [SocialiteController::class, 'github_redirect_method'])->name('github_redirect');
Route::get('/github/callback', [SocialiteController::class, 'github_callback_method'])->name('github_callback');
    // For Google Login
Route::get('/google/redirect', [SocialiteController::class, 'google_redirect_method'])->name('google_redirect');
Route::get('/google/callback', [SocialiteController::class, 'google_callback_method'])->name('google_callback');

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::get('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
