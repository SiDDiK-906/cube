<?php

namespace App\Http\Controllers;

use App\Mail\EmailOffer;
use App\Models\Country;
use App\Models\order_summaries;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PDF;
use App\Exports\order_summariesExport;
use App\Models\order_details;
use App\Models\Product;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index_home(){
        if (strpos(url()->previous(),'product/single')) {
            return redirect(url()->previous());
        }
        return view('home');
    }
    public function frontend_method(){
        return view('frontend.index');
    }
    public function email_offer_method(){
        return view('emailOffer',[
            'email_offers' => User::where('role','!=',2)->get(),
        ]);
    }
    public function send_email_offer_method($id){
        Mail::to(User::find($id)->email)->send(new EmailOffer());
        return back();
    }
    public function check_box_method(Request $request){
        if ($request->check == NULL) {
            return back()->with('select_one','Please select one at least!');
        } else {
            foreach ($request->check as  $value) {
                Mail::to(User::find($value)->email)->send(new EmailOffer());
            }
            return back();
        }
    }
    public function location_method(){
        return view('location.index',[
            'all_country_info'=>Country::get(['id','name','status']),
        ]);
    }
    public function location_update_method(Request $request){
            Country::where('status','active')->update([
                'status'=> 'deactive',
            ]);
        foreach ($request->countries as $country_id) {
            Country::find($country_id)->update([
                'status'=> 'active',
            ]);
        }
        return back();
    }
    public function location_view_method(){
        return view('location.view',[
            'active_view_countries'=>Country::where('status','active')->get(),
            'deactive_view_countries'=>Country::where('status','deactive')->get(),
        ]);
    }
    public function active_location_method(Request $request){
        foreach ($request->active as $country_id) {
            Country::find($country_id)->update([
                'status'=> 'deactive',
            ]);
        }
        return back();
    }
    public function deactive_location_method(Request $request){
        foreach ($request->deactive as $country_id) {
            Country::find($country_id)->update([
                'status'=> 'active',
            ]);
        }
        return back();
    }
    // myorders methods are here
    public function myorders_method (){
        return view('myorders.index',[
            'myorders' => order_summaries::where('user_id',Auth()->id())->get(),
        ]);
    }
    public function order_details_method ($id){
        $order_summary_id = Crypt::decryptString($id);
        return view('myorders.show',[
            'order_summary' => order_summaries::find($order_summary_id),
            'order_details' => order_details::where('order_summary_id',$order_summary_id)->get(),
        ]);
    }
    public function pdf_invoice_method (){
        $data = "this is data";
        $pdf = PDF::loadView('pdf.invoice',[
            'the_data' => $data,
        ]);
        return $pdf->download('invoice.pdf');
        // for direct view the pdf use stream instead of download
        // return $pdf->stream('invoice.pdf');
    }
    public function excel_invoice_method (){
        return Excel::download(new order_summariesExport, 'excel_invoice.xlsx');
    }
    public function allOrders_method (){
        return view('myorders.all_orders',[
            'myorders' => order_summaries::all(),
        ]);
    }
    public function delivarystatus_method($id)
    {
        if (order_summaries::find($id)->delivary_status == 1) {
            order_summaries::find($id)->update([
                'delivary_status'=> 0,
            ]);
        } else {
            order_summaries::find($id)->update([
                'delivary_status'=> 1,
            ]);
        }
        return back();
    }
    public function rating_method(Request $request,$id)
    {
        $product_id = order_details::find($id)->product_id;
        Rating::insert([
            'user_id' => Auth()->id(),
            'product_id' => $product_id,
            'order_details_id' => $id,
            'review' => $request->review,
            'rating' => $request->rate,
            'created_at'=> Carbon::now(),
        ]);
        return back();
    }
    public function front_rating_method(Request $request,$product_id)
    {

        if (order_details::where('product_id',$product_id)->where('user_id',Auth()->id())->exists()) {

            $order_details_id = order_details::where('product_id',$product_id)->where('user_id',Auth()->id())->first()->id;

            if (Rating::where('order_details_id',$order_details_id)->exists()) {
                echo "You already gave a review of this product";
            }
            else {
                Rating::insert([
                    'user_id' => Auth()->id(),
                    'product_id' => $product_id,
                    'order_details_id' => $order_details_id,
                    'review' => $request->review,
                    'rating' => $request->rate,
                    'created_at'=> Carbon::now(),
                ]);
                return back();
            }

        }
        else{
            echo "plz order the product for giving a review";

        }
    }
}
