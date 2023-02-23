<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;
use App\Models\User;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('user_type', 'asc')->paginate(10);
        $count = $users->count();
        return view('dashboard.users.index', compact('users', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create');
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
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
        // ->with(['deleted_product_message' => "($product->name) - Deleted successfully from the products main page"]);
    }

    public function delete()
    {
        $users = User::orderBy('user_type', 'asc')->onlyTrashed()->paginate(10);
        $count = $users->count();
        return view('dashboard.users.delete', compact('users', 'count'));
    }

    public function restore($id)
    {
        $users = User::withTrashed()->findOrFail($id)->restore();
        return redirect()->route('users.index');
    }

    public function forceDelete($id)
    {
        $users = User::where('id', '=', $id)->forceDelete();
        // or can add the restore here like this --> $users->forceDelete();
        return redirect()->route('users.delete');
    }
}
