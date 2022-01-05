<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        return view('frontend.wishlist');
    }

    public function create()
    {
        echo "this is wishlist create";
    }

    public function store(Request $request)
    {
        echo "this is wishlist store";
    }

    public function show(Wishlist $wishlist)
    {
        echo "this is wishlist show";
    }

    public function edit(Wishlist $wishlist)
    {
        echo "this is wishlist edit";
    }

    public function update(Request $request, Wishlist $wishlist)
    {
        echo "this is wishlist update";
    }

    public function destroy(Wishlist $wishlist)
    {
        echo "this is wishlist delete";
    }

    public function wishlist_remove_method($wishlist_id){
        Wishlist::find($wishlist_id)->delete();
        return back();
    }
    public function wishlist_method($product_id){
        Wishlist::insert([
            'user_id'=> auth()->id(),
            'product_id'=> $product_id,
            'created_at'=> Carbon::now(),
        ]);
        return back();
    }
}
