<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index',[
            "title" => "Category",
            "sidemenu" => "pengumuman",
            "segmen" => "categories",
            "view" => "admin.dashboard.categories",
            "data" => Category::latest()->filter(request(['search']))->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.index',[
            "title" => "Create Category",
            "sidemenu" => "pengumuman",
            "segmen" => "categories",
            "view" => "admin.categories.categories_add",
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories',
        ]);

        Category::create($validatedData);
        
        return redirect('/dashboard/categories')->with('success', 'New post has been added! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.index',[
            "title" => "Edit Category",
            "sidemenu" => "pengumuman",
            "segmen" => "categories",
            "view" => "admin.categories.categories_edit",
            "data" => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:255',
        ];

        if($request->slug !== $category->slug){
            $rules['slug'] = 'required|unique:categories';
        }

        $validatedData = $request->validate($rules);

        Category::Where('id', $category->id)
                ->update($validatedData);
        
        return redirect('/dashboard/categories')->with('success', 'Post has been Updated! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category->Pengumuman){
            return redirect('/dashboard/pengumuman')->with('failed', 'Please change the category in the relevant announcement table!! ');
        }
        Category::destroy($category->id);
        
        return redirect('/dashboard/categories')->with('success', 'Post has been deleted! ');
    }
}
