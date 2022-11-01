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

        $products_first_row   = Product::skip(0)->take(4)->where('hover_image', '!=', null)->get(); // get from record 0 to record 4 (including the where clause)
        $products_seconds_row = Product::skip(4)->take(4)->where('hover_image', '!=', null)->get(); // skip the first 4 records & get the next 4 (including the where clause)

        // $all_men = Product::all()->where('category', '=', 'men');
        // $men_accessories = Product::all()->where('category', '=', 'men')->where('accessories', '=', 'true');
        // $all_men_clothes = Product::all()->where('category', '=', 'men')->where('accessories', '=', 'false');
        // $men_casual = Product::all()->where('category', '=', 'men')->where('type', '=', 'casual');
        return view('home', compact('products_first_row', 'products_seconds_row')); //don't add compact variables that will not b e used in the blade as it might give and error
        //I can return view OR link--> redirect( url() ) OR route 
    }


    // public function colored_variation_products()
    // {
    //     $product_to_variant = Product::all()->where('id' , '=', 'variation_id')->VariationPic::all()->where('color_availability', '=', 'yes');
    //     $variant_image = VariationPic::all()->where('color_availability', '=', 'yes');

    //     return view('home', compact('product_to_variant'));
    // }
    
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
