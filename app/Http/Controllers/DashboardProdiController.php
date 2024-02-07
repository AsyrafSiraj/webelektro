<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class DashboardProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index',[
            "title" => "Prodi",
            "sidemenu" => "prodi",
            "segmen" => "prodi",
            "view" => "admin.dashboard.prodi",
            "data" => Prodi::latest()->filter(request(['search']))->paginate(7)->withQueryString()
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
            "title" => "Create Prodi",
            "sidemenu" => "prodi",
            "segmen" => "prodi",
            "view" => "admin.prodi.prodi_add",
            "prodi" => Prodi::all()
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
            'slug' => 'required|unique:prodi',
            'title_hero.*' => '',
            'deskripsi_hero.*' => '',
            'title_about' => 'required',
            'deskripsi_about' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'tujuan' => 'required',
            'sasaran' => 'required',
            'sikap' => 'required',
            'umum' => 'required',
            'khusus' => 'required',
            'penguasaan' => 'required',
            'deskripsi_kurikulum' => 'required',
            'title_lulusan.*' => '',
            'deskripsi_lulusan.*' => ''
        ]);
        // @dump($validatedData);
        @dd($validatedData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function show(Prodi $prodi)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
