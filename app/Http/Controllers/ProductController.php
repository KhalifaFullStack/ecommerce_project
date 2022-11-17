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

            // // sort conditions
            // if ($request->SortBy == 'alfa_asc') {
            //     $compact_value_order  = $compact_value->orderBy('name', 'ASC');
            // } elseif ($request->SortBy  == 'alfa_desc') {
            //     $compact_value_order  = $compact_value->orderBy('name', 'DESC');
            // } elseif ($request->SortBy  == 'price_asc') {
            //     $compact_value_order  = $compact_value->orderBy('price', 'ASC');
            // } elseif ($request->SortBy == 'price_desc') {
            //     $compact_value_order  = $compact_value->orderBy('price', 'DESC');
            // } elseif ($request->SortBy == 'date_asc') {
            //     $compact_value_order  = $compact_value->orderBy('created_at', 'ASC');
            // } elseif ($request->SortBy == 'date_desc') {
            //     $compact_value_order  = $compact_value->orderBy('created_at', 'DESC');
            // } else {
            //     $compact_value_order  = $compact_value->orderBy('name', 'ASC');
            // }
        }

        //all clothes (Not with any other types)
        if ($request->all_clothing == 'all_clothing') {
            $condition_all_clothing   = Product::where('other_types', '=', null);
            $compact_value            = $condition_all_clothing->get();
            $compact_value_count      = $compact_value->count();
            $items_name               = 'All Clothes';

            // //Sorting conditions
            // if ($request->SortBy == 'alfa_asc') {
            //     $compact_value_order  = $condition_all_clothing->orderBy('name', 'ASC')->get();
            // } elseif ($request->SortBy  == 'alfa_desc') {
            //     $compact_value_order  = $condition_all_clothing->orderBy('name', 'DESC')->get();
            // } elseif ($request->SortBy  == 'price_asc') {
            //     $compact_value_order  = $condition_all_clothing->orderBy('price', 'ASC')->get();
            // } elseif ($request->SortBy == 'price_desc') {
            //     $compact_value_order  = $condition_all_clothing->orderBy('price', 'DESC')->get();
            // } elseif ($request->SortBy == 'date_asc') {
            //     $compact_value_order  = $condition_all_clothing->orderBy('created_at', 'ASC')->get();
            // } elseif ($request->SortBy == 'date_desc') {
            //     $compact_value_order  = $condition_all_clothing->orderBy('created_at', 'DESC')->get();
            // } else {
            //     $compact_value_order  = $condition_all_clothing->orderBy('name', 'ASC')->get();
            // }
        }

        // all men 
        elseif ($request->men == 'men') {
            $condition_men       = Product::where('category', '=', 'men');
            $compact_value       = $condition_men->get();
            $compact_value_count = $compact_value->count();
            $items_name          = 'Men';

            // //Sorting conditions
            // if ($request->SortBy == 'alfa_asc') {
            //     $compact_value_order  = $condition_men->orderBy('name', 'ASC')->get();
            // } elseif ($request->SortBy  == 'alfa_desc') {
            //     $compact_value_order  = $condition_men->orderBy('name', 'DESC')->get();
            // } elseif ($request->SortBy  == 'price_asc') {
            //     $compact_value_order  = $condition_men->orderBy('price', 'ASC')->get();
            // } elseif ($request->SortBy == 'price_desc') {
            //     $compact_value_order  = $condition_men->orderBy('price', 'DESC')->get();
            // } elseif ($request->SortBy == 'date_asc') {
            //     $compact_value_order  = $condition_men->orderBy('created_at', 'ASC')->get();
            // } elseif ($request->SortBy == 'date_desc') {
            //     $compact_value_order  = $condition_men->orderBy('created_at', 'DESC')->get();
            // } else {
            //     $compact_value_order  = $condition_men->orderBy('name', 'ASC')->get();
            // }
        }

        // all women 
        elseif ($request->women == 'women') {
            $condition_women     = Product::where('category', '=', 'women');
            $compact_value       = $condition_women->get();
            $compact_value_count = $compact_value->count();
            $items_name          = 'Women';

            // //Sorting conditions
            // if ($request->SortBy == 'alfa_asc') {
            //     $compact_value_order  = $condition_women->orderBy('name', 'ASC')->get();
            // } elseif ($request->SortBy  == 'alfa_desc') {
            //     $compact_value_order  = $condition_women->orderBy('name', 'DESC')->get();
            // } elseif ($request->SortBy  == 'price_asc') {
            //     $compact_value_order  = $condition_women->orderBy('price', 'ASC')->get();
            // } elseif ($request->SortBy == 'price_desc') {
            //     $compact_value_order  = $condition_women->orderBy('price', 'DESC')->get();
            // } elseif ($request->SortBy == 'date_asc') {
            //     $compact_value_order  = $condition_women->orderBy('created_at', 'ASC')->get();
            // } elseif ($request->SortBy == 'date_desc') {
            //     $compact_value_order  = $condition_women->orderBy('created_at', 'DESC')->get();
            // } else {
            //     $compact_value_order  = $condition_women->orderBy('name', 'ASC')->get();
            // }
        }

        // all kids 
        elseif ($request->kids == 'kids') {
            $condition_kids         = Product::where('category', '=', 'kids');
            $compact_value          = $condition_kids->get();
            $compact_value_count    = $compact_value->count();
            $items_name             = 'kids';

            // //Sorting conditions
            // if ($request->SortBy == 'alfa_asc') {
            //     $compact_value_order  = $condition_kids->orderBy('name', 'ASC')->get();
            // } elseif ($request->SortBy  == 'alfa_desc') {
            //     $compact_value_order  = $condition_kids->orderBy('name', 'DESC')->get();
            // } elseif ($request->SortBy  == 'price_asc') {
            //     $compact_value_order  = $condition_kids->orderBy('price', 'ASC')->get();
            // } elseif ($request->SortBy == 'price_desc') {
            //     $compact_value_order  = $condition_kids->orderBy('price', 'DESC')->get();
            // } elseif ($request->SortBy == 'date_asc') {
            //     $compact_value_order  = $condition_kids->orderBy('created_at', 'ASC')->get();
            // } elseif ($request->SortBy == 'date_desc') {
            //     $compact_value_order  = $condition_kids->orderBy('created_at', 'DESC')->get();
            // } else {
            //     $compact_value_order  = $condition_kids->orderBy('name', 'ASC')->get();
            // }
        }

        //all shoes
        elseif ($request->shoes == 'shoes') {
            $condition_shoes        = Product::where('other_types', '=', 'shoes');
            $compact_value          = $condition_shoes->get();
            $compact_value_count    = $compact_value->count();
            $items_name             = 'shoes';

            // //Sorting conditions
            // if ($request->SortBy == 'alfa_asc') {
            //     $compact_value_order  = $condition_shoes->orderBy('name', 'ASC')->get();
            // } elseif ($request->SortBy  == 'alfa_desc') {
            //     $compact_value_order  = $condition_shoes->orderBy('name', 'DESC')->get();
            // } elseif ($request->SortBy  == 'price_asc') {
            //     $compact_value_order  = $condition_shoes->orderBy('price', 'ASC')->get();
            // } elseif ($request->SortBy == 'price_desc') {
            //     $compact_value_order  = $condition_shoes->orderBy('price', 'DESC')->get();
            // } elseif ($request->SortBy == 'date_asc') {
            //     $compact_value_order  = $condition_shoes->orderBy('created_at', 'ASC')->get();
            // } elseif ($request->SortBy == 'date_desc') {
            //     $compact_value_order  = $condition_shoes->orderBy('created_at', 'DESC')->get();
            // } else {
            //     $compact_value_order  = $condition_shoes->orderBy('name', 'ASC')->get();
            // }
        }

        //all bags
        elseif ($request->bags == 'bags') {
            $condition_bags         = Product::where('other_types', '=', 'bags');
            $compact_value          = $condition_bags->get();
            $compact_value_count    = $compact_value->count();
            $items_name             = 'shoes';

            // //Sorting conditions
            // if ($request->SortBy == 'alfa_asc') {
            //     $compact_value_order  = $condition_bags->orderBy('name', 'ASC')->get();
            // } elseif ($request->SortBy  == 'alfa_desc') {
            //     $compact_value_order  = $condition_bags->orderBy('name', 'DESC')->get();
            // } elseif ($request->SortBy  == 'price_asc') {
            //     $compact_value_order  = $condition_bags->orderBy('price', 'ASC')->get();
            // } elseif ($request->SortBy == 'price_desc') {
            //     $compact_value_order  = $condition_bags->orderBy('price', 'DESC')->get();
            // } elseif ($request->SortBy == 'date_asc') {
            //     $compact_value_order  = $condition_bags->orderBy('created_at', 'ASC')->get();
            // } elseif ($request->SortBy == 'date_desc') {
            //     $compact_value_order  = $condition_bags->orderBy('created_at', 'DESC')->get();
            // } else {
            //     $compact_value_order  = $condition_bags->orderBy('name', 'ASC')->get();
            // }
        }

        // //all accessories
        elseif ($request->accessories == 'accessories') {
            $condition_accessories  = Product::where('accessories', '=', 'true');
            $compact_value          = $condition_accessories->get();
            $compact_value_count    = $compact_value->count();
            $items_name             = 'accessories';

            // //Sorting conditions
            // if ($request->SortBy == 'alfa_asc') {
            //     $compact_value_order  = $condition_accessories->orderBy('name', 'ASC')->get();
            // } elseif ($request->SortBy  == 'alfa_desc') {
            //     $compact_value_order  = $condition_accessories->orderBy('name', 'DESC')->get();
            // } elseif ($request->SortBy  == 'price_asc') {
            //     $compact_value_order  = $condition_accessories->orderBy('price', 'ASC')->get();
            // } elseif ($request->SortBy == 'price_desc') {
            //     $compact_value_order  = $condition_accessories->orderBy('price', 'DESC')->get();
            // } elseif ($request->SortBy == 'date_asc') {
            //     $compact_value_order  = $condition_accessories->orderBy('created_at', 'ASC')->get();
            // } elseif ($request->SortBy == 'date_desc') {
            //     $compact_value_order  = $condition_accessories->orderBy('created_at', 'DESC')->get();
            // } else {
            //     $compact_value_order  = $condition_accessories->orderBy('name', 'ASC')->get();
            // }
        }

        //all cosmetics
        elseif ($request->cosmetics == 'cosmetics') {
            $condition_cosmetics      = Product::where('category', '=', 'women')->where('other_types', '=', 'cosmetics');
            $compact_value            = $condition_cosmetics->get();
            $compact_value_count      = $compact_value->count();
            $items_name               = 'accessories';

            // //Sorting conditions
            // if ($request->SortBy == 'alfa_asc') {
            //     $compact_value_order  = $condition_cosmetics->orderBy('name', 'ASC')->get();
            // } elseif ($request->SortBy  == 'alfa_desc') {
            //     $compact_value_order  = $condition_cosmetics->orderBy('name', 'DESC')->get();
            // } elseif ($request->SortBy  == 'price_asc') {
            //     $compact_value_order  = $condition_cosmetics->orderBy('price', 'ASC')->get();
            // } elseif ($request->SortBy == 'price_desc') {
            //     $compact_value_order  = $condition_cosmetics->orderBy('price', 'DESC')->get();
            // } elseif ($request->SortBy == 'date_asc') {
            //     $compact_value_order  = $condition_cosmetics->orderBy('created_at', 'ASC')->get();
            // } elseif ($request->SortBy == 'date_desc') {
            //     $compact_value_order  = $condition_cosmetics->orderBy('created_at', 'DESC')->get();
            // } else {
            //     $compact_value_order  = $condition_cosmetics->orderBy('name', 'ASC')->get();
            // }
        }

        //if $request is empty OR not true
        else {
            $compact_value          = Product::all();
            $compact_value_count    = $compact_value->count();
            $items_name             = 'All Products';
            // $compact_value_order    = Product::all()->orderBy('name', 'ASC');
        }

        // if(){ ->orderBy('name', 'ASC')

        // }

        return view('shop', compact('compact_value', 'compact_value_count', 'items_name'));
    }

    public function price_filter(Request $request)
    {
        //
    }

    public function men_shop()
    {
        $men_products                  = Product::where('category', '=', 'men')->get();
        $compact_value_count           = Product::where('category', '=', 'men')->count();
        $items_name                    = 'Men';


        return  view('categories.men_shop', compact('men_products', 'compact_value_count', 'items_name'));
    }

    public function women_shop()
    {
        $women_products               = Product::where('category', '=', 'women')->get();
        $compact_value_count          = Product::where('category', '=', 'women')->count();
        $items_name                   = 'Women';

        return  view('categories.women_shop', compact('women_products', 'compact_value_count', 'items_name'));
    }

    public function kids_shop()
    {
        $kids_products                 = Product::where('category', '=', 'kids')->get();
        $compact_value_count           = Product::where('category', '=', 'kids')->count();
        $items_name                    = 'Kids';

        return  view('categories.kids_shop', compact('kids_products', 'compact_value_count', 'items_name'));
    }

    public function shoes_shop()
    {
        $shoes_products                = Product::where('other_types', '=', 'shoes')->get();
        $compact_value_count           = Product::where('other_types', '=', 'shoes')->count();
        $items_name                    = 'Shoes';

        return  view('categories.shoes_shop', compact('shoes_products', 'compact_value_count', 'items_name'));
    }

    public function accessories_shop()
    {
        $accessories_products          = Product::where('accessories', '=', 'true')->get();
        $compact_value_count           = Product::where('accessories', '=', 'true')->count();
        $items_name                    = 'Accessories';

        return  view('categories.accessories_shop', compact('accessories_products', 'compact_value_count', 'items_name'));
    }

    public function cosmetics_shop()
    {
        $cosmetics_products            = Product::where('category', '=', 'women')->where('other_types', '=', 'cosmetics')->get();
        $compact_value_count           = Product::where('category', '=', 'women')->where('other_types', '=', 'cosmetics')->count();
        $items_name                    = 'Cosmetics';

        return  view('categories.cosmetics_shop', compact('cosmetics_products', 'compact_value_count', 'items_name'));
    }

    public function search(Request $request)
    {
        $criteria     = $request->criteria;
        $products     = Product::where('name', 'like', '%' . $criteria . '%')->get();
        $search_count = $products->count();

        return view('search', compact('products', 'criteria', 'search_count'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function single_product_show($id, $category = null, $type = null)
    {
        $single_product     = Product::find($id); //same as saying: find the product with same id as the slug id that was passed
        $related_products   = Product::where('category', '=', $category)->where('type', '=', $type)->get();

        if ($single_product == null) {
            return view('404');
        } else {
            return view('product-page', compact('single_product', 'related_products'));
        }
    }
}
