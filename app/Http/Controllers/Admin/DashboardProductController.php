<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Product_detail;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->user_type == 'supplier') {
            $products = Product::where('supplier_id', '=', auth()->user()->id)->orderBy('created_at', 'asc')->paginate(10);
            $count    = $products->count();
        } else {
            $products = Product::orderBy('created_at', 'asc')->paginate(10);
            $count    = $products->count(); //OR $count  = Product::all()->count();
        }

        return view('dashboard.products.index', compact('products', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $product        = Product::find($id);
        $product_detail = Product_detail::where('product_id', $product->id)->get();
        foreach ($product_detail as $detail) {
            $detail->delete();
        }
        $product->delete();

        return redirect()->route('products.index');
        // ->with(['deleted_product_message' => "($product->name) - Deleted successfully from the products main page"]);
    }

    public function delete()
    {
        $products = Product::orderBy('created_at', 'asc')->onlyTrashed()->paginate(10);
        $count    = $products->count();

        if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'moderator') {
            return view('dashboard.products.delete', compact('products', 'count'));
        } elseif (auth()->user()->user_type == 'supplier') {
            return view('dashboard.products.delete', compact('products', 'count'));
        }
    }

    public function restore($id)
    {
        $products       = Product::withTrashed()->findOrFail($id)->restore();
        $Product_detail = Product_detail::where('product_id', '=', $id)->withTrashed()->get();
        foreach ($Product_detail as $detail) {
            $detail->restore();
        }
        // or can add the restore here like this --> $products->restore();
        return redirect()->route('products.delete');
    }

    public function forceDelete($id)
    {
        $products = Product::where('id', '=', $id)->forceDelete();
        // or can add the restore here like this --> $products->forceDelete();
        return redirect()->route('products.delete');
    }
}
