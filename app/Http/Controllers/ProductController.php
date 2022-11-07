<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function products()
    {
        //all products
        $all_products       = Product::all();

        //all shoes
        $all_shoes          = Product::where('other_types', '=', 'shoes')->get();

        //all bags
        $all_bags           = Product::where('other_types', '=', 'bags')->get();

        //all accessories
        $all_accessories    = Product::where('accessories', '=', 'true')->get();

        //all casual
        $all_casual         = Product::where('types', '=', 'casual')->get();

        //all formal
        $all_formal         = Product::where('types', '=', 'formal')->get();

        //all sports
        $all_sports         = Product::where('types', '=', 'sports')->get();

        //all men variables
        $men                = Product::where('category', '=', 'men');
        $all_men            = $men->get();
        $men_shoes          = $men->where('other_types', '=', 'shoes')->get();
        $men_bags           = $men->where('other_types', '=', 'bags')->get();
        $men_accessories    = $men->where('accessories', '=', 'true')->get();
        $men_casual         = $men->where('type', '=', 'casual')->get();
        $men_formal         = $men->where('type', '=', 'formal')->get();
        $men_sports         = $men->where('type', '=', 'sports')->get();

        //all women variables
        $women                = Product::where('category', '=', 'women');
        $all_women            = $women->get();
        $women_shoes          = $women->where('other_types', '=', 'shoes')->get();
        $women_bags           = $women->where('other_types', '=', 'bags')->get();
        $women_cosmetics      = $women->where('other_types', '=', 'cosmetics')->get();
        $women_accessories    = $women->where('accessories', '=', 'true')->get();
        $women_casual         = $women->where('type', '=', 'casual')->get();
        $women_formal         = $women->where('type', '=', 'formal')->get();
        $women_sports         = $women->where('type', '=', 'sports')->get();

        //all kids variables
        $kids                = Product::where('category', '=', 'kids');
        $all_kids            = $kids->get();
        $kids_shoes          = $kids->where('other_types', '=', 'shoes')->get();
        $kids_bags           = $kids->where('other_types', '=', 'bags')->get();
        $kids_accessories    = $kids->where('accessories', '=', 'true')->get();
        $kids_casual         = $kids->where('type', '=', 'casual')->get();
        $kids_formal         = $kids->where('type', '=', 'formal')->get();
        $kids_sports         = $kids->where('type', '=', 'sports')->get();
    }

    public function price_filter(Request $request, $id){
        
    }
}
