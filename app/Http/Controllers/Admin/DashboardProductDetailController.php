<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_detail;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class DashboardProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $find_product   = Product::FindOrFail($id);

        if (auth()->user()->user_type == 'supplier') {
            $products       = Product_detail::where('product_id', '=', $find_product->id)->where('supplier_id', '=', auth()->user()->id)->orderBy('created_at', 'asc')->paginate(10);
        } else {
            $products       = Product_detail::where('product_id', '=', $find_product->id)->orderBy('created_at', 'asc')->paginate(10);
            //OR $product_count  = Product_detail::all()->count();
        }

        $product_count  = $products->count();

        return view('dashboard.products.detail', compact('products', 'find_product', 'product_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $products = Product::find($id);

        return view('dashboard.products.edit', compact('product'));
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
    public function destroy($id) //this is exactly the softdelete where it is only deleted to the recycle-bin (ps:add value to deleted_at) and can be restored by: public function restore()
    {
        //
    }
}
