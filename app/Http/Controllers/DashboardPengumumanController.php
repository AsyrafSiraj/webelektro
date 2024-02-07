<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Category;
use Illuminate\Http\Request;
// use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index',[
            "title" => "Pengumuman",
            "sidemenu" => "pengumuman",
            "segmen" => "pengumuman",
            "view" => "admin.dashboard.pengumuman",
            "data" => Pengumuman::latest()->filter(request(['search']))->paginate(7)->withQueryString()
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
            "title" => "Create Pengumuman",
            "sidemenu" => "pengumuman",
            "segmen" => "pengumuman",
            "view" => "admin.pengumuman.pengumuman_add",
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
            'title' => 'required|max:255',
            'slug' => 'required|unique:table_pengumuman',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);
        
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('pengumuman-image');
        }

        $validatedData['excerpt'] = Str::limit( strip_tags($request->body), 300);

        Pengumuman::create($validatedData);
        
        return redirect('/dashboard/pengumuman')->with('success', 'New post has been added! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {

        return view('admin.index',[
            "title" => "Pengumuman",
            "sidemenu" => "pengumuman",
            "view" => "admin.pengumuman.pengumuman_detail",
            "data" => $pengumuman
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        //
        return view('admin.index',[
            "title" => "Edit Pengumuman",
            "sidemenu" => "pengumuman",
            "segmen" => "pengumuman",
            "view" => "admin.pengumuman.pengumuman_edit",
            "data" => $pengumuman,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        if($request->slug !== $pengumuman->slug){
            $rules['slug'] = 'required|unique:table_pengumuman';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('pengumuman-image');
        }

        $validatedData['excerpt'] = Str::limit( strip_tags($request->body), 300);

        Pengumuman::Where('id', $pengumuman->id)
                ->update($validatedData);
        
        return redirect('/dashboard/pengumuman')->with('success', 'Post has been Updated! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        //
        if($pengumuman->image){
            Storage::delete($pengumuman->image);
        }
        Pengumuman::destroy($pengumuman->id);
        
        return redirect('/dashboard/pengumuman')->with('success', 'Post has been deleted! ');
    }

    // public function checkSlug(Request $request){
    //     $slug = SlugService::createSlug(Pengumuman::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
}
