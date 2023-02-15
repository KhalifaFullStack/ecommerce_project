<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Sub_category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_categories = Category::orderBy('created_at', 'asc')->paginate(10);
        $count          = $all_categories->count();

        return view('dashboard.categories.index', compact('all_categories', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
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
            'name'          => 'required|string|unique:categories,name',
            'description'   => 'nullable|string|max:500',  //can also be written as: ['nullable'],['string'],['max:500'], OR ['nullable','string','max:500'],  
        ]);

        // this is also another way to validate..however we only use it when we need to add a rule (using backend like $id) to validate
        // Validator::make($request->all(), [
        // 'name' => ['required', 'unique:categories', Rule::unique('categories')->ignore($this->id)],
        // 'description' => 'nullable|string',
        //  ]);

        //if the request is valid then proceed to insertion for the entity
        //if the request is not valid, then throw a ValidationException (it is trowed in the blade)
        $categories                 = new Category;
        $categories->name           = $request->name;
        $categories->description    = $request->description;
        $categories->create_user_id = auth()->user()->id;
        $categories->save();

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.categories.edit', compact('category'));
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
        $categories                 = Category::findOrFail($id);
        $categories->name           = $request->name;
        $categories->description    = $request->description;
        $categories->update_user_id = auth()->user()->id;
        $categories->save();

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $category = Category::find($id);
        $sub_cats = Sub_category::where('category_id', $category->id)->get();
        foreach ($sub_cats as $sub_cat) {
            $sub_cat->delete();
        }
        $category->delete();

        return redirect()->route('categories.index');
        // ->with(['deleted_category_message' => "($category->name) - Deleted successfully from the categories main page"]);
    }

    public function delete()
    {
        $categories = Category::orderBy('created_at', 'asc')->onlyTrashed()->paginate(10);
        $count      = $categories->count();

        if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'moderator') {
            return view('dashboard.categories.delete', compact('categories', 'count'));
        } elseif (auth()->user()->user_type == 'supplier') {
            return view('dashboard.categories.delete', compact('categories', 'count'));
        }
    }

    public function restore($id)
    {
        $categories   = Category::withTrashed()->findOrFail($id)->restore();
        $sub_category = Sub_category::where('category_id', '=', $id)->withTrashed()->get(); //we didnt type: find() cause we want all the results not only one result
        foreach ($sub_category as $sub_cat) {
            $sub_cat->restore();
        }
        // or can add the restore here like this --> $categories->restore();
        return redirect()->route('categories.delete');
    }

    public function forceDelete($id)
    {
        $categories = Category::where('id', '=', $id)->forceDelete();
        // or can add the restore here like this --> $categories->forceDelete();
        return redirect()->route('categories.delete');
    }
}
