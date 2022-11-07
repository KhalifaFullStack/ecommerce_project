<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function products(Request $request)
    {
        //all products
        if ($request->all_products == 'all_products') {
            $compact_value            = Product::all();
            $compact_value_count      = $compact_value->count();
            $items_name               = 'All Products';
            return view('shop', compact('compact_value', 'compact_value_count', 'items_name'));
        }

        //all clothes (Not with any other types)
        if ($request->all_clothing == 'all_clothing') {
            $compact_value            = Product::where('other_types', '=', null)->get();
            $compact_value_count      = $compact_value->count();
            $items_name               = 'All Clothes';
            return view('shop', compact('compact_value', 'compact_value_count', 'items_name'));
        }

        // all men 
        elseif ($request->men == 'men') {
            $compact_value       = Product::where('category', '=', 'men')->get();
            $compact_value_count = $compact_value->count();
            $items_name          = 'Men';
            return view('shop', compact('compact_value', 'compact_value_count', 'items_name'));
        }

        // all women 
        elseif ($request->women == 'women') {
            $compact_value       = Product::where('category', '=', 'women')->get();
            $compact_value_count = $compact_value->count();
            $items_name          = 'Women';
            return view('shop', compact('compact_value', 'compact_value_count', 'items_name'));
        }

        // all kids 
        elseif ($request->kids == 'kids') {
            $compact_value          = Product::where('category', '=', 'kids')->get();
            $compact_value_count    = $compact_value->count();
            $items_name             = 'kids';
            return view('shop', compact('compact_value', 'compact_value_count', 'items_name'));
        }

        //all shoes
        elseif ($request->shoes == 'shoes') {
            $compact_value          = Product::where('other_types', '=', 'shoes')->get();
            $compact_value_count    = $compact_value->count();
            $items_name             = 'shoes';
            return view('shop', compact('compact_value', 'compact_value_count', 'items_name'));
        }

        //all bags
        elseif ($request->bags == 'bags') {
            $compact_value          = Product::where('other_types', '=', 'bags')->get();
            $compact_value_count    = $compact_value->count();
            $items_name             = 'shoes';
            return view('shop', compact('compact_value', 'compact_value_count', 'items_name'));
        }

        // //all accessories
        elseif ($request->accessories == 'accessories') {
            $compact_value          = Product::where('accessories', '=', 'true')->get();
            $compact_value_count    = $compact_value->count();
            $items_name             = 'accessories';
            return view('shop', compact('compact_value', 'compact_value_count', 'items_name'));
        }

        //all cosmetics
        elseif ($request->cosmetics == 'cosmetics') {
            $compact_value            = Product::where('category', '=', 'women')->where('other_types', '=', 'cosmetics')->get();;
            $compact_value_count      = $compact_value->count();
            $items_name               = 'accessories';
            return view('shop', compact('compact_value', 'compact_value_count', 'items_name'));
        }

        //if $request is empty OR not true
        else {
            $compact_value          = Product::all();
            $compact_value_count    = $compact_value->count();
            $items_name             = 'All Products';
            return view('shop', compact('compact_value', 'compact_value_count', 'items_name'));
        }

        // //all casual
        // $all_casual         = Product::where('type', '=', 'casual')->get();

        // //all formal
        // $all_formal         = Product::where('type', '=', 'formal')->get();

        // //all sports
        // $all_sports         = Product::where('type', '=', 'sports')->get();


        // $all_men            = $men->get();
        // $men_shoes          = $men->where('other_types', '=', 'shoes')->get();
        // $men_bags           = $men->where('other_types', '=', 'bags')->get();
        // $men_accessories    = $men->where('accessories', '=', 'true')->get();
        // $men_casual         = $men->where('type', '=', 'casual')->get();
        // $men_formal         = $men->where('type', '=', 'formal')->get();
        // $men_sports         = $men->where('type', '=', 'sports')->get();

        // //all women variables
        // $women                = Product::where('category', '=', 'women')->where('other_types', '=', 'cosmetics')->get();
        // $all_women            = $women->get();
        // $women_shoes          = $women->where('other_types', '=', 'shoes')->get();
        // $women_bags           = $women->where('other_types', '=', 'bags')->get();
        // $women_cosmetics      = $women->where('other_types', '=', 'cosmetics')->get();
        // $women_accessories    = $women->where('accessories', '=', 'true')->get();
        // $women_casual         = $women->where('type', '=', 'casual')->get();
        // $women_formal         = $women->where('type', '=', 'formal')->get();
        // $women_sports         = $women->where('type', '=', 'sports')->get();

        // //all kids variables
        // $kids                = Product::where('category', '=', 'kids');
        // $all_kids            = $kids->get();
        // $kids_shoes          = $kids->where('other_types', '=', 'shoes')->get();
        // $kids_bags           = $kids->where('other_types', '=', 'bags')->get();
        // $kids_accessories    = $kids->where('accessories', '=', 'true')->get();
        // $kids_casual         = $kids->where('type', '=', 'casual')->get();
        // $kids_formal         = $kids->where('type', '=', 'formal')->get();
        // $kids_sports         = $kids->where('type', '=', 'sports')->get();
    }

    // public function price_filter(Request $request, $id){

    // }
}
