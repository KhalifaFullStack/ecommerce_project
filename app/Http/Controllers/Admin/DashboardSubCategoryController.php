<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sub_category;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Validator;

class DashboardSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_Sub_category = Sub_category::orderBy('created_at', 'asc')->paginate(10);
        $count            = $all_Sub_category->count();

        return view('dashboard.subCategories.index', compact('all_Sub_category', 'count'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.subCategories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|unique:sub_categories,name',
            'description'   => 'nullable|string|max:500',
            'category'      => 'required',
            //the variable name must be written with the name of the request not the migration
        ]);

        $subcat                 = new Sub_category;
        $subcat->name           = $request->name;
        $subcat->description    = $request->description;
        $subcat->category_id    = $request->category;
        $subcat->create_user_id = auth()->user()->id;
        $subcat->save();

        return redirect()->route('subcategories.index');
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
        $categories  = Category::all();
        $subcategory = Sub_category::find($id);
        return view('dashboard.subCategories.edit', compact('categories', 'subcategory'));
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
        $request->validate([
            'name'          => 'required|string',
            'description'   => 'nullable|string|max:500',
            'category'      => 'required',
            //the variable name must be written with the name of the request not the migration
        ]);

        $subcat                 = Sub_category::findOrFail($id);
        $subcat->name           = $request->name;
        $subcat->description    = $request->description;
        $subcat->category_id    = $request->category;
        $subcat->update_user_id = auth()->user()->id;
        $subcat->save();

        return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategories = Sub_category::findOrFail($id);
        $subcategories->delete();
        return redirect()->route('subcategories.delete');
    }

    public function delete()
    {
        $subcategories = Sub_category::orderBy('created_at', 'asc')->onlyTrashed()->paginate(10);
        $count         = $subcategories->count();

        if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'moderator') {
            return view('dashboard.subcategories.delete', compact('subcategories', 'count'));
        } elseif (auth()->user()->user_type == 'supplier') {
            return view('dashboard.subcategories.delete', compact('subcategories', 'count'));
        }
    }

    public function restore($id)
    {
        $subcategories = Sub_category::withTrashed()->findOrFail($id)->restore();
        // or can add the restore here like this --> $subcategories->restore();
        return redirect()->route('subcategories.delete');
    }

    public function forceDelete($id)
    {
        $subcategories = Sub_category::where('id', '=', $id)->forceDelete();
        // or can add the restore here like this --> $subcategories->forceDelete();
        return redirect()->route('subcategories.delete');
    }
}
