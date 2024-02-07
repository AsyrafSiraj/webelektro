<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index',[
            "title" => "Prestasi",
            "sidemenu" => "prestasi",
            "segmen" => "prestasi",
            "view" => "admin.dashboard.prestasi",
            "data" => Prestasi::latest()->filter(request(['search']))->paginate(7)->withQueryString()
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
            "title" => "Create Prestasi",
            "sidemenu" => "prestasi",
            "segmen" => "prestasi",
            "view" => "admin.prestasi.prestasi_add",
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
            'deskripsi' => 'required',
            'image' => 'image|file|max:1024'
        ]);
        
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('prestasi-image');
        }

        $validatedData['name'] = Str::title($validatedData['name']); 

        Prestasi::create($validatedData);
        
        return redirect('/dashboard/prestasi')->with('success', 'New post has been added! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show(Prestasi $prestasi)
    {
        return view('admin.index',[
            "title" => "Prestasi",
            "sidemenu" => "prestasi",
            "segmen" => "prestasi",
            "view" => "admin.prestasi.prestasi_detail",
            "data" => $prestasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestasi $prestasi)
    {
        return view('admin.index',[
            "title" => "Edit Prestasi",
            "sidemenu" => "prestasi",
            "segmen" => "prestasi",
            "view" => "admin.prestasi.prestasi_edit",
            "data" => $prestasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'deskripsi' => 'required',
            'image' => 'image|file|max:1024'
        ]);
        
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('prestasi-image');
        }
        $validatedData['name'] = Str::title($validatedData['name']); 

        Prestasi::Where('id', $prestasi->id)
                ->update($validatedData);
        
        return redirect('/dashboard/prestasi')->with('success', 'Post has been Updated! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestasi $prestasi)
    {
        if($prestasi->image){
            Storage::delete($prestasi->image);
        }
        Prestasi::destroy($prestasi->id);
        
        return redirect('/dashboard/prestasi')->with('success', 'Post has been deleted! ');
    }
}
