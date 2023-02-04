<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\VariationPic;

class HomeController extends Controller
{

    public function home_new_arrivals()
    {
        // $products = Product::get()->where('hover_image', '!=', null);

        // $products_first_row   = Product::skip(0)->take(4)->where('hover_image', '!=', null)->get(); // get from record 0 to record 4 (including the where clause)
        // $products_seconds_row = Product::skip(4)->take(4)->where('hover_image', '!=', null)->get(); // skip the first 4 records & get the next 4 (including the where clause)
        $home_products        = Product::get();

        return view('home', compact('home_products')); //don't add compact variables that will not b e used in the blade as it might give and error
        //I can return view OR link--> redirect( url() ) OR route 
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth'); //this is the middleware 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
}
