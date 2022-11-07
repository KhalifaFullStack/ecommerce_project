<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $all_cart_products   = Cart::all()->where('customer_id', '=', auth()->user()->id);
        $count_cart_products = $all_cart_products->count();

        return view('cart', compact('all_cart_products', 'count_cart_products'));
    }

    public function create_cart(request $request, $id)
    {
        $user                     = auth()->user();
        $product                  = Product::find($id);

        $cart                     = new Cart;
        $cart->product_name       = $product->name;
        $cart->price              = $product->price;
        $cart->category           = $product->category;
        $cart->accessories        = $product->accessories;
        $cart->type               = $product->type;
        $cart->description        = $product->description;
        $cart->discount           = $product->discount;
        $cart->address            = $product->address;
        $cart->product_id         = $product->id;
        $cart->image              = $product->image;

        $cart->address            = $user->address;
        $cart->customer_id        = $user->id;
        $cart->email              = $user->email;
        $cart->phone_no           = $user->phone_no;
        $cart->customer_name      = $user->name;

        if ($request->add_quantity <= 0 || $request->add_quantity == " ") {
            return redirect()->back();
        } elseif ($request->add_quantity > $product->available_quantity) {
            return redirect()->back();
        } elseif ($request->add_quantity <= $product->available_quantity) {
            $cart->quantity                 = $request->add_quantity;
            $product->available_quantity    = $product->available_quantity - $request->add_quantity;
            $product->save();
            $cart->available_quantity       =  $product->available_quantity;
        }

        $cart->save();
        return redirect()->back();
    }

    public function update_cart(request $request, $id)
    {
        $cart_update          = Cart::where('customer_id', '=', auth()->user()->id)->find($id);
        $product_update       = Product::find($id);

        if ($request->update_quantity <= 0 || $request->update_quantity == " ") {
            return redirect()->back();
        } elseif ($request->update_quantity > $product_update->available_quantity) {
            return redirect()->back();
        } elseif ($request->update_quantity == 0) {
            $cart_update->forceDelete();
            return redirect()->back();
        } elseif ($request->update_quantity <= $product_update->available_quantity) {
            $cart_update->quantity                 = $request->update_quantity;
            $product_update->available_quantity    = $product_update->available_quantity - $request->update_quantity;
            $product_update->save();
            $cart_update->available_quantity       =  $product_update->available_quantity;
        }

        $cart_update->save();
        return redirect()->back();
    }

    public function delete_row($id)
    {
        $cart_delete_row  = Cart::find($id); //same as Cart::where('customer_id', '=', auth()->user()->id)->find($id); as the ID is coming from the frontend loop
        $cart_delete_row->forceDelete();
        return redirect()->back();
    }

    public function delete_all()
    {
        $cart_delete  = Cart::where('customer_id', '=', auth()->user()->id)->get();

        foreach ($cart_delete as $cart_product) {
            $cart_product->forceDelete();
        }
        return redirect()->back();
    }
}
