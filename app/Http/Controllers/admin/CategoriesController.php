<?php

namespace App\Http\admin\Controllers;

use App\Models\admin\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'title' => ['required'],
            'image' => ['required'],
            'jobs_count' => ['required'],
            'sort' => ['required']
        ]);
        $category = new Categories();

        $category->fill(['title' => $request->input('title')]);
        $category->fill(['image' => $request->input('image')]);
        $category->fill(['jobs_count' => $request->input('jobs_count')]);
        $category->fill(['sort' => $request->input('sort')]);
        return redirect()->route('admin.categories.index');
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
    public function update(Request $request, Categories $category)
    {
        $request->validate([
            'title' => ['required'],
            'image' => ['required'],
            'jobs_count' => ['required'],
            'sort' => ['required']
        ]);
        $category->update(['title' => $request->input('title')]);
        $category->update(['image' => $request->input('image')]);
        $category->update(['jobs_count' => $request->input('jobs_count')]);
        $category->update(['sort' => $request->input('sort')]);
        return redirect()->route('.admin.categories.index', ['book' => $category]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        $category->delete();
        return redirect('/');
    }
}
